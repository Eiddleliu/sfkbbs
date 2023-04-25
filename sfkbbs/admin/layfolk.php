<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录
$template['title']='用户列表页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
    <div id="main">
        <div class="title">用户列表</div>
        <table class="list">
            <tr>
                <th>名称</th>
                <th>头像</th>
                <th>创建日期</th>
                <th>操作</th>
            </tr>
            <?php
            $query="select * from sfk_member";
            $result=execute($link,$query);
            while ($data=mysqli_fetch_assoc($result)){


                $url=urlencode("layfolk_delete.php?id={$data['id']}");
                $return_url=urlencode($_SERVER['REQUEST_URI']);
                $message="你真的要删除用户 {$data['name']} 吗？";
                $delete_url="confirm.php?url={$url}&return_url={$return_url}&message={$message}";

                $html=<<<A
			<tr>
				<td>{$data['name']} [id:{$data['id']}]</td>
				<td><img width="30px" height="30px" src=" ../{$data['photo']}"></td>
				<td>{$data['register_time']}</td>
				<td><a href="{$delete_url}">[删除]</a></td>
			</tr>
A;
                echo $html;
            }
            ?>
        </table>
    </div>
<?php include 'inc/footer.inc.php'?>