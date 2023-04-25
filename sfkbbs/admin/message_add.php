<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
include_once '../inc/upload.inc.php';
$link=connect();
include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录
if(isset($_POST['submit'])){
	//验证用户填写的信息
	$check_flags='add';
//	include 'inc/check_message.inc.php';
    $save_path='../uploads/message_img';
    $save_path2='../uploads/message_img';
    $save_path3='../uploads/message_img';
    $upload=upload($save_path,'8M','photo');
    $upload2=upload($save_path2,'8M','photo2');
	$query="insert into sfk_message_connect(module_name,info,sort,imgurl,info2,info3,imgurl2,time) values('{$_POST['module_name']}','{$_POST['info']}',{$_POST['sort']},'{$upload['save_path']}','{$_POST['info2']}','{$_POST['info3']}','{$upload2['save_path2']}')";

    execute($link,$query);
	if(mysqli_affected_rows($link)==1){
		skip('#','ok','恭喜你，添加成功！');
	}else{
		skip('#','error','对不起，添加失败，请重试！');
	}
}

$template['title']='资讯添加页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title" style="margin-bottom:20px;">添加资讯</div>
	<form method="post" enctype="multipart/form-data">
		<table class="au">
			<tr>
				<td>资讯标题</td>
				<td><input name="module_name" type="text" /></td>
				<td>
					版块名称不得为空，最大不得超过66个字符
				</td>
			</tr>
            <tr>
                <td>资讯内容</td>
                <td>
                    <textarea name="info"></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>资讯内容2</td>
                <td>
                    <textarea name="info2"></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>资讯内容3</td>
                <td>
                    <textarea name="info3"></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>序号</td>
                <td><input name="sort" type="int" /></td>
                <td>
                    请输入序号
                </td>
            </tr>
            <tr>
                <td>板块图片</td>
                <td>
                    <div style="margin:15px 0 0 0;">
                            <input style="cursor:pointer;" width="100" type="file" name="photo" /><br /><br />
                    </div>
                </td>
                <td>
                    插入一张图片
                </td>
            </tr>
            <tr>
                <td>板块图片2</td>
                <td>
                    <div style="margin:15px 0 0 0;">
                        <input style="cursor:pointer;" width="100" type="file" name="photo2" /><br /><br />
                    </div>
                </td>
                <td>
                    插入一张图片
                </td>
            </tr>


			<tr>
				<td>排序</td>
				<td><input name="sort" value="0" type="text" /></td>
				<td>
					填写一个数字即可
				</td>
			</tr>
		</table>
		<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
	</form>
</div>
<?php include 'inc/footer.inc.php'?>