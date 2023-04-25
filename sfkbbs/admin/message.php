<?php 
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录

$template['title']='子版块列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
	<div class="title">子版块列表</div>
	<form method="post">
	<table class="list">
		<tr>
			<th>排序</th>	 	 	
			<th>资讯名称</th>
			<th>资讯内容</th>
			<th>序号</th>
            <th>上传时间</th>
		</tr>
		<?php 
//		$query="select ssm.id,ssm.sort,ssm.module_name,sfm.module_name father_module_name,ssm.member_id from sfk_son_module ssm,sfk_father_module sfm where ssm.father_module_id=sfm.id order by sfm.id";
        $query="select * from sfk_message_connect";
		$result=execute($link,$query);
		while ($data=mysqli_fetch_assoc($result)){
			$url=urlencode("message_delete.php?id={$data['id']}");
			$return_url=urlencode($_SERVER['REQUEST_URI']);
			$message="你真的要删除该资讯 {$data['module_name']} 吗？";
			$delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";
$html=<<<A
			<tr>
				<td><input class="sort" type="text" name="sort[{$data['id']}]" value="{$data['sort']}" /></td>
				<td>{$data['module_name']}[id:{$data['id']}]</td>
				<td style="width: 200px">{$data['info']}</td>
				<td>{$data['sort']}</td>
				<td>{$data['time']}</td>
				<td><a href="#">[访问]</a><a href="message_update.php?id={$data['id']}">[编辑]</a>&nbsp;<a href="$delete_url">[删除]</a></td>
			</tr>
A;
			echo $html;
		}
		?>
		
	</table>
	<input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="排序" />
	</form>
</div>
<?php include 'inc/footer.inc.php'?>