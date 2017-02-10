<?php
//header('Content-Type: application/json;charset=UTF-8');
$list = ['新手学堂 >','游戏特色 >','点亮图标 >','视频中心 >','道聚城 >','公会专区 >', '官方论坛 >','客服专区 >'];
//var_dump($list);
//echo $list;
//echo'<ul>';	
foreach($list as & $value){
	echo"<li><a href='#'>$value</a></li>";
}
//echo'</ul>';
