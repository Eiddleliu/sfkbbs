<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
	skip('message.php','error','id参数错误！');
}
$query="delete from sfk_message_connect where id={$_GET['id']}";
execute($link,$query);
if(mysqli_affected_rows($link)==1){
	skip('message.php','ok','恭喜你删除成功！');
}else{
	skip('message.php','error','对不起删除失败，请重试！');
}
?>