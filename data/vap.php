<?php
//header('Content-Type: application/json;charset=UTF-8');
$list = ['心悦专区','TGB专区','蓝钻专区','QQ会员','工会专区','先游专区','17173专区','多玩专区'];
//var_dump($list);
//echo $list;
echo'<ul>';	
foreach($list as & $value){
	echo"<li><a href='#'><b></b><span>$value</span></a></li>";
}
echo'</ul>';