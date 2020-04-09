var pot_chance = {
	"方可樂健康青汁(好吃到不行)":[['001', '80.00%'], ['114', '20.00%'], ['127', '16.22%']],
	"方可樂黏豆湯(好吃到不行)":[['001', '80.00%'], ['048', '67.57%']],
	"方可樂健康青汁(超好吃)":[['001', '26.67%'], ['046', '57.47%'], ['102', '33.33%'], ['114', '6.67%'], ['127', '6.90%']],
	"方可樂黏豆湯(超好吃)":[['001', '26.67%'], ['023', '18.02%'], ['041', '18.02%'], ['048', '28.74%'], ['088', '18.02%'], ['109', '18.02%']],
	"方可樂黃咖哩(好吃到不行)":[['001', '3.33%'], ['025', '3.33%'], ['096', '3.33%'], ['106', '3.33%'], ['115', '3.33%'], ['123', '3.33%'], ['125', '3.33%'], ['143', '3.33%']],
	"方可樂大雜燴(好吃到不行)":[['001', '3.33%'], ['004', '3.33%'], ['007', '3.33%'], ['025', '3.33%'], ['048', '3.33%'], ['083', '3.33%'], ['092', '3.33%'], ['096', '3.33%'], ['104', '3.33%'], ['106', '3.33%'], ['107', '3.33%'], ['113', '3.33%'], ['114', '3.33%'], ['115', '3.33%'], ['122', '3.33%'], ['123', '3.33%'], ['124', '3.33%'], ['125', '3.33%'], ['126', '3.33%'], ['127', '3.33%'], ['128', '3.33%'], ['129', '3.33%'], ['131', '3.33%'], ['132', '3.33%'], ['133', '3.33%'], ['138', '3.33%'], ['140', '3.33%'], ['142', '3.33%'], ['143', '3.33%'], ['147', '3.33%']],
	"方可樂黃咖哩(超好吃)":[['001', '2.00%'], ['025', '2.00%'], ['077', '2.00%'], ['096', '2.00%'], ['106', '2.00%'], ['115', '2.00%'], ['123', '2.00%'], ['125', '2.00%'], ['143', '2.00%']],
	"方可樂大雜燴(超好吃)":[['001', '2.00%'], ['004', '2.00%'], ['007', '2.00%'], ['023', '2.00%'], ['025', '2.00%'], ['035', '2.00%'], ['039', '2.00%'], ['041', '2.00%'], ['046', '2.00%'], ['048', '2.00%'], ['050', '2.00%'], ['066', '2.00%'], ['077', '2.00%'], ['079', '2.00%'], ['081', '2.00%'], ['083', '2.00%'], ['084', '2.00%'], ['086', '2.00%'], ['088', '2.00%'], ['090', '2.00%'], ['092', '2.00%'], ['095', '2.00%'], ['096', '2.00%'], ['102', '2.00%'], ['104', '2.00%'], ['106', '2.00%'], ['107', '2.00%'], ['108', '2.00%'], ['109', '2.00%'], ['113', '2.00%'], ['114', '2.00%'], ['115', '2.00%'], ['116', '2.00%'], ['122', '2.00%'], ['123', '2.00%'], ['124', '2.00%'], ['125', '2.00%'], ['126', '2.00%'], ['127', '2.00%'], ['128', '2.00%'], ['129', '2.00%'], ['131', '2.00%'], ['132', '2.00%'], ['133', '2.00%'], ['137', '2.00%'], ['138', '2.00%'], ['140', '2.00%'], ['142', '2.00%'], ['143', '2.00%'], ['147', '2.00%']],
	"方可樂健康青汁(好吃)":[['001', '1.95%'], ['046', '96.43%'], ['102', '48.78%'], ['114', '0.49%'], ['127', '0.58%']],
	"方可樂黏豆湯(好吃)":[['001', '1.95%'], ['023', '24.52%'], ['041', '24.52%'], ['048', '2.41%'], ['088', '24.52%'], ['109', '24.52%']],
	"方可樂黃咖哩(好吃)":[['001', '0.23%'], ['025', '0.23%'], ['077', '4.65%'], ['096', '0.23%'], ['106', '0.23%'], ['115', '0.23%'], ['123', '0.23%'], ['125', '0.23%'], ['143', '0.23%']],
	"方可樂大雜燴(好吃)":[['001', '0.23%'], ['004', '0.23%'], ['007', '0.23%'], ['023', '4.65%'], ['025', '0.23%'], ['035', '4.65%'], ['039', '4.65%'], ['041', '4.65%'], ['046', '4.65%'], ['048', '0.23%'], ['050', '4.65%'], ['066', '4.65%'], ['077', '4.65%'], ['079', '4.65%'], ['081', '4.65%'], ['083', '0.23%'], ['084', '4.65%'], ['086', '4.65%'], ['088', '4.65%'], ['090', '4.65%'], ['092', '0.23%'], ['095', '4.65%'], ['096', '0.23%'], ['102', '4.65%'], ['104', '0.23%'], ['106', '0.23%'], ['107', '0.23%'], ['108', '4.65%'], ['109', '4.65%'], ['113', '0.23%'], ['114', '0.23%'], ['115', '0.23%'], ['116', '4.65%'], ['122', '0.23%'], ['123', '0.23%'], ['124', '0.23%'], ['125', '0.23%'], ['126', '0.23%'], ['127', '0.23%'], ['128', '0.23%'], ['129', '0.23%'], ['131', '0.23%'], ['132', '0.23%'], ['133', '0.23%'], ['137', '4.65%'], ['138', '0.23%'], ['140', '0.23%'], ['142', '0.23%'], ['143', '0.23%'], ['147', '0.23%']],
	"方可樂焰辣湯(好吃到不行)":[['004', '80.00%'], ['126', '20.00%']],
	"方可樂焰辣湯(超好吃)":[['004', '40.00%'], ['077', '50.00%'], ['126', '10.00%']],
	"方可樂紅燉湯(好吃到不行)":[['004', '19.76%'], ['083', '19.76%'], ['107', '14.97%'], ['124', '3.59%'], ['126', '3.59%'], ['127', '3.59%'], ['133', '19.76%'], ['140', '14.97%']],
	"方可樂紅燉湯(超好吃)":[['004', '4.30%'], ['046', '13.04%'], ['050', '13.04%'], ['079', '13.04%'], ['083', '4.30%'], ['084', '13.04%'], ['107', '3.26%'], ['108', '13.04%'], ['124', '0.78%'], ['126', '0.78%'], ['127', '0.78%'], ['133', '4.30%'], ['137', '13.04%'], ['140', '3.26%']],
	"方可樂焰辣湯(好吃)":[['004', '3.81%'], ['077', '95.24%'], ['126', '0.95%']],
	"方可樂紅燉湯(好吃)":[['004', '0.27%'], ['046', '16.44%'], ['050', '16.44%'], ['079', '16.44%'], ['083', '0.27%'], ['084', '16.44%'], ['107', '0.21%'], ['108', '16.44%'], ['124', '0.05%'], ['126', '0.05%'], ['127', '0.05%'], ['133', '0.27%'], ['137', '16.44%'], ['140', '0.21%']],
	"方可樂藍蘇打(好吃到不行)":[['007', '33.56%'], ['114', '4.03%'], ['129', '33.56%'], ['131', '4.03%'], ['132', '4.03%'], ['138', '16.78%'], ['147', '4.03%']],
	"方可樂藍蘇打(超好吃)":[['007', '7.70%'], ['023', '15.41%'], ['066', '15.41%'], ['088', '15.41%'], ['109', '15.41%'], ['114', '0.92%'], ['116', '15.41%'], ['129', '7.70%'], ['131', '0.92%'], ['132', '0.92%'], ['138', '3.85%'], ['147', '0.92%']],
	"方可樂清蒸鍋(超好吃)":[['007', '7.21%'], ['079', '18.02%'], ['086', '18.02%'], ['090', '18.02%'], ['116', '18.02%'], ['129', '7.21%'], ['131', '4.50%'], ['138', '16.13%'], ['140', '16.13%']],
	"方可樂藍蘇打(好吃)":[['007', '0.49%'], ['023', '19.71%'], ['066', '19.71%'], ['088', '19.71%'], ['109', '19.71%'], ['114', '0.06%'], ['116', '19.71%'], ['129', '0.49%'], ['131', '0.06%'], ['132', '0.06%'], ['138', '0.25%'], ['147', '0.06%']],
	"方可樂清蒸鍋(好吃)":[['007', '0.49%'], ['079', '24.52%'], ['086', '24.52%'], ['090', '24.52%'], ['116', '24.52%'], ['129', '0.49%'], ['131', '0.31%'], ['138', '1.22%'], ['140', '1.22%']],
	"方可樂藍蘇打(普通)":[['010', '20.00%'], ['019', '20.00%'], ['032', '20.00%'], ['060', '20.00%'], ['072', '20.00%']],
	"方可樂大雜燴(普通)":[['010', '4.17%'], ['013', '4.17%'], ['016', '4.17%'], ['019', '4.17%'], ['021', '4.17%'], ['027', '4.17%'], ['029', '4.17%'], ['032', '4.17%'], ['037', '14.29%'], ['043', '4.17%'], ['052', '4.17%'], ['054', '4.17%'], ['056', '4.17%'], ['058', '4.17%'], ['060', '4.17%'], ['063', '4.17%'], ['069', '4.17%'], ['072', '4.17%'], ['074', '4.17%'], ['098', '4.17%'], ['100', '4.17%'], ['111', '4.17%'], ['118', '4.17%'], ['120', '4.17%']],
	"方可樂黃咖哩(普通)":[['013', '4.17%'], ['016', '4.17%'], ['027', '4.17%'], ['052', '4.17%'], ['054', '4.17%'], ['063', '4.17%'], ['069', '4.17%'], ['120', '4.17%']],
	"方可樂絲滑可麗餅(普通)":[['016', '25.00%'], ['019', '25.00%'], ['021', '25.00%'], ['052', '25.00%']],
	"方可樂紅燉湯(普通)":[['021', '14.29%'], ['037', '50.00%'], ['056', '14.29%'], ['058', '14.29%'], ['098', '14.29%'], ['100', '14.29%'], ['118', '14.29%']],
	"方可樂麻麻燴飯(好吃到不行)":[['025', '80.00%'], ['125', '20.00%']],
	"方可樂麻麻燴飯(超好吃)":[['025', '40.00%'], ['081', '50.00%'], ['125', '10.00%']],
	"方可樂麻麻燴飯(好吃)":[['025', '3.81%'], ['081', '95.24%'], ['125', '0.95%']],
	"方可樂大地蛤湯(普通)":[['027', '33.33%'], ['074', '50.00%'], ['111', '33.33%']],
	"方可樂白焗菜(普通)":[['029', '4.17%'], ['043', '4.17%'], ['074', '4.17%'], ['111', '4.17%']],
	"方可樂白焗菜(好吃)":[['035', '4.65%'], ['039', '4.65%'], ['041', '4.65%'], ['048', '0.23%'], ['081', '4.65%'], ['086', '4.65%'], ['090', '4.65%'], ['092', '0.23%'], ['095', '4.65%'], ['102', '4.65%'], ['104', '0.23%'], ['113', '0.23%'], ['122', '0.23%'], ['128', '0.23%'], ['142', '0.23%']],
	"方可樂白焗菜(超好吃)":[['035', '2.00%'], ['039', '2.00%'], ['041', '2.00%'], ['048', '2.00%'], ['081', '2.00%'], ['086', '2.00%'], ['090', '2.00%'], ['092', '2.00%'], ['095', '2.00%'], ['102', '2.00%'], ['104', '2.00%'], ['113', '2.00%'], ['122', '2.00%'], ['128', '2.00%'], ['142', '2.00%']],
	"方可樂焰辣湯(普通)":[['037', '大雜燴(好吃)'], ['058', '50.00%']],
	"方可樂絲滑可麗餅(好吃)":[['039', '24.53%'], ['083', '0.55%'], ['084', '24.53%'], ['108', '24.53%'], ['113', '0.07%'], ['115', '0.61%'], ['128', '0.07%'], ['132', '0.07%'], ['133', '0.43%'], ['137', '24.53%'], ['143', '0.07%']],
	"方可樂絲滑可麗餅(超好吃)":[['039', '18.05%'], ['083', '8.12%'], ['084', '18.05%'], ['108', '18.05%'], ['113', '1.08%'], ['115', '9.03%'], ['128', '1.08%'], ['132', '1.08%'], ['133', '6.32%'], ['137', '18.05%'], ['143', '1.08%']],
	"方可樂旋風焗烤(好吃)":[['041', '24.52%'], ['083', '0.55%'], ['084', '24.53%'], ['123', '0.58%'], ['142', '0.24%']],
	"方可樂旋風焗烤(超好吃)":[['041', '18.02%'], ['083', '8.12%'], ['084', '18.05%'], ['123', '6.90%'], ['142', '3.23%']],
	"方可樂蜂蜜鍋(好吃)":[['046', '96.43%'], ['048', '2.41%'], ['123', '0.58%'], ['127', '0.58%']],
	"方可樂蜂蜜鍋(超好吃)":[['046', '57.47%'], ['048', '28.74%'], ['123', '6.90%'], ['127', '6.90%']],
	"方可樂蜂蜜鍋(好吃到不行)":[['048', '67.57%'], ['123', '16.22%'], ['127', '16.22%']],
	"方可樂白焗菜(好吃到不行)":[['048', '3.33%'], ['092', '3.33%'], ['104', '3.33%'], ['113', '3.33%'], ['122', '3.33%'], ['128', '3.33%'], ['142', '3.33%']],
	"方可樂大地蛤湯(好吃)":[['050', '48.78%'], ['095', '97.32%'], ['104', '2.44%']],
	"方可樂大地蛤湯(超好吃)":[['050', '33.33%'], ['095', '64.52%'], ['104', '33.33%']],
	"方可樂清蒸鍋(普通)":[['054', '16.67%'], ['060', '16.67%'], ['072', '16.67%'], ['098', '16.67%'], ['118', '16.67%'], ['120', '16.67%']],
	"方可樂念椒肉絲(普通)":[['063', '100.00%']],
	"方可樂壯壯歐蕾(好吃)":[['066', '96.15%'], ['106', '1.92%'], ['107', '1.92%']],
	"方可樂壯壯歐蕾(超好吃)":[['066', '55.56%'], ['106', '22.22%'], ['107', '22.22%']],
	"方可樂頑石煮(普通)":[['074', '50.00%'], ['111', '33.33%']],
	"方可樂念椒肉絲(好吃)":[['079', '24.52%'], ['096', '1.95%'], ['102', '48.78%'], ['122', '0.24%']],
	"方可樂念椒肉絲(超好吃)":[['079', '18.02%'], ['096', '26.67%'], ['102', '33.33%'], ['122', '3.33%']],
	"方可樂旋風焗烤(好吃到不行)":[['083', '29.22%'], ['123', '16.22%'], ['142', '9.09%']],
	"方可樂絲滑可麗餅(好吃到不行)":[['083', '29.22%'], ['113', '3.90%'], ['115', '32.47%'], ['128', '3.90%'], ['132', '3.90%'], ['133', '22.73%'], ['143', '3.90%']],
	"方可樂頑石煮(好吃)":[['095', '97.32%'], ['138', '1.22%'], ['140', '1.22%'], ['142', '0.24%']],
	"方可樂頑石煮(超好吃)":[['095', '64.52%'], ['138', '16.13%'], ['140', '16.13%'], ['142', '3.23%']],
	"方可樂大地蛤湯(好吃到不行)":[['104', '100.00%']],
	"方可樂頑石煮(好吃到不行)":[['138', '45.45%'], ['140', '45.45%'], ['142', '9.09%']],
	"方可樂傳奇湯(超好吃)":[['144', '33.33%'], ['145', '33.33%'], ['146', '33.33%']],
	"方可樂傳奇湯(好吃)":[['144', '33.33%'], ['145', '33.33%'], ['146', '33.33%']],
	"方可樂傳奇湯(好吃到不行)":[['144', '15.87%'], ['145', '15.87%'], ['146', '15.87%'], ['150', '47.62%'], ['151', '4.76%']]
}