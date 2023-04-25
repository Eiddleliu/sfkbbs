<?php
define('IN_SFKBBS',true);
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
if(!$member_id=is_login($link)){
    skip('login.php', 'error', '请登录之后再对自己的头像做设置!');
}

$query="select pw from sfk_member where id={$member_id}";
$result_memebr=execute($link,$query);
if(mysqli_num_rows($result_memebr)==1){
    $data=mysqli_fetch_assoc($result_memebr);
}else{
    return ;
}

if(isset($_POST['pw'])){
    $query="update sfk_member set pw=md5('{$_POST['pw']}') where id={$member_id}";
    $result_pw=execute($link,$query);
    if(mysqli_affected_rows($link)==1){
        skip("member.php?id={$member_id}",'ok','密码修改成功！');
    }else{
        skip('member_pw_update.php','error','密码修改失败，请重试');
    }

}
$template['title']='会员注册页';
$template['css']=array('style/public.css','style/register.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="register" class="auto">
    <h2>欢迎注册成为 私房库会员</h2>
    <form method="post">
        <label>密码：<input type="password" name="pw"  /><span>*密码不得少于6位</span></label>
        <label>确认密码：<input type="password" name="confirm_pw"  /><span>*请输入与上面一致</span></label>
        <div style="clear:both;"></div>
        <input class="btn" name="submit" type="submit" value="确定注册" />
    </form>
</div>
<div id="footer" class="auto">
    <div class="bottom">
        <a>传游社</a>
    </div>
    <div class="copyright">Powered by chaunyoushe ©2023 粤网文[2023]6725-2386号</div>
</div>
</body>
</html>