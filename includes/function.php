<?php
function br2nl( $input ) {
	return preg_replace('/<br\s?\/?>/ius', "\n", 
		   str_replace("\n","",
		   str_replace("\r","", htmlspecialchars_decode($input))));
}
function is_ie() {
	preg_match ( '/MSIE (.*?);/', $_SERVER ['HTTP_USER_AGENT'], $matches );
	if (count ( $matches ) < 2) {
		preg_match ( '/Trident\/\d{1,2}.\d{1,2}; rv:([0-9]*)/', $_SERVER ['HTTP_USER_AGENT'], $matches );
	}
	if (count ( $matches ) > 1) {
		// Then we're using IE
		$version = $matches [1];
		
		switch (true) {
			
			case ($version <= 11) :
				return true;
				break;
			
			default :
				return false;
				break;
		}
	}
}

function include_layout_template($template_name = "") {
	include (LIB_PATH . DS . 'layout' . DS . $template_name);
}

function echo_html_header($title){
	echo('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">');
	echo('<html xmlns="http://www.w3.org/1999/xhtml">');
	echo('<head>');
	echo('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
	echo('<title>'. $title. '</title>');
	echo('<link rel="stylesheet" type="text/css" href="');
	echo('css/cha_view.css');
	echo('" media="all">');
	echo('</head>');
}

function redirect_to($new_location) {
	header ( "Location: " . $new_location );
	exit ();
}

function safe_input($str) {
    $js_string = array("/<script(.*)<\/script>/isU");
    $js_clear = array("");

    $frame_string = array("/<frame(.*)>/isU", "/<\/fram(.*)>/isU", "/<iframe(.*)>/isU", "/<\/ifram(.*)>/isU",);
    $frame_clear = array("", "", "", "");

    $style_string = array("/<style(.*)<\/style>/isU", "/<link(.*)>/isU", "/<\/link>/isU");
    $style_clear = array("", "", "");

    $str = trim($str);
    $str = str_replace($html_string, $html_clear, $str);
    $str = preg_replace($js_string, $js_clear, $str);
    $str = preg_replace($frame_string, $frame_clear, $str);
    $str = preg_replace($style_string, $style_clear, $str);
	$str = stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}

function safe_array($array){
	global $db_connect;
	foreach ( $array as $key => $value ) {
		if (!empty ( $value )) {
			$array[$key] = $db_connect->escape_value(safe_input($value));
		}
	}
		
}

?>