<?php
$query="select * from sfk_message_connect where id={$_POST['id']}";
$result=execute($link,$query);
if(empty($_POST['module_name'])){
	skip('message_add.php','error','子版块名称不得为空！');
}
if(mb_strlen($_POST['module_name'])>66){
	skip('message_add.php','error','子版块名称不得多余66个字符！');
}
$_POST=escape($link,$_POST);
switch ($check_flags){
	case 'add':
		$query="select * from sfk_message_connect where module_name='{$_POST['module_name']}'";
		break;
	case 'update':
		$query="select * from sfk_message_connect where module_name='{$_POST['module_name']}' and id!={$_GET['id']}";
		break;
	default:
		skip('son_module','error','$check_flags参数错误！');
}
$result=execute($link,$query);
if(!is_numeric($_POST['sort'])){
	skip('message_add.php','error','排序只能是数字！');
}
?>