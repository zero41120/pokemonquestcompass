<!-- Set environment and debug flag-->
<?php
    require_once('../includes/config.php');
    if($debug_mode) {  }
?>

<!-- Show welcome information -->
<html lang="en">
  <?php include_layout_template('header.php'); ?>
  <body>
  <?php include_layout_template('navigator.php'); ?>

  <div class="probootstrap-main">
    <section class="probootstrap-section-half probootstrap-no-hover">
      <div class="probootstrap-image" style="background-image: url(img/setting.png)"></div>
      <div class="probootstrap-text">
        <div class="probootstrap-inner">
          <h1 class="heading">404</h1>
          <p>不是找不到的話，就是站長還沒做出來，敬請期待。</p>
        </div>
      </div>
    </section>    
  </div>
  
  <?php include_layout_template('footer.php'); ?>

</body></html>