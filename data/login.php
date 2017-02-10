<?php
/**
接收客户端提交的用户名和密码，验证是否正确，向客户端输出ok或err
**/
header('Content-Type: text/plain');

@$uname = $_REQUEST['uname'] or die('uname-required');
@$upwd = $_REQUEST['upwd'] or die('upwd-required');

require('0_init.php');

$sql = "SELECT uid FROM sgsj_user WHERE uname='$uname' AND upwd='$upwd'";
$result = mysqli_query($conn, $sql);

//DQL: false或结果集

$row = mysqli_fetch_row($result);
if($row===null){		//查询结果集中没有一行记录
	echo 'err';
}else {
	echo 'ok';
}
