<?php
//include_once '../inc/config.inc.php';
//include_once '../inc/mysql.inc.php';
//include_once '../inc/tool.inc.php';
//$link=connect();
//include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录
//if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
//    skip('message.php','error','id参数错误！');
//}
//$query="select * from sfk_message_connect where id={$_GET['id']};";
//$result=execute($link,$query);
//if(!mysqli_num_rows($result)){
//    skip('message.php','error','这条版块信息不存在！');
//}
//$data=mysqli_fetch_assoc($result);
//if(isset($_POST['submit'])){
////    var_dump($data);
////    exit();
//    //验证
//    $check_flag='update';
//    include 'inc/check_message.inc.php';
//    $save_path='../uploads/message_img';
//    $save_path2='../uploads/message_img';
//
//    $upload=upload($save_path,'8M','photo');
//    $upload2=upload($save_path2,'8M','photo2');
//    $query="insert into sfk_message_connect(imgurl,imgurl2) values('{$upload['save_path']}','{$upload2['save_path2']}')";
//    execute($link,$query);
//    if(mysqli_affected_rows($link)==1){
//        skip('message.php','ok','修改成功！');
//    }else{
//        skip('message.php','error','修改失败,请重试！');
//    }
////    $query="update sfk_message_connect set module_name='{$_POST['module_name']}', info='{$_POST['info']}',sort={$_POST['sort']},info3='{$_POST['info3']}' where id={$_GET['id']}";
////    execute($link,$query);
////    if(mysqli_affected_rows($link)==1){
////        skip('message.php','ok','修改成功！');
////    }else{
////        skip('message.php','error','修改失败,请重试！');
////    }
//
//}
//$template['title']='资讯修改页';
//$template['css']=array('style/public.css');
//?>
<?php //include 'inc/header.inc.php'?>
<!--    <div id="main">-->
<!--        <div class="title" style="margin-bottom:20px;">编辑资讯</div>-->
<!--        <form method="post" enctype="multipart/form-data">-->
<!--            <table class="au">-->
<!--                <tr>-->
<!--                    <td>资讯标题</td>-->
<!--                    <td><input name="module_name" value="--><?php //echo $data['module_name']?><!--" type="text" /></td>-->
<!--                    <td>-->
<!--                        版块名称不得为空，最大不得超过66个字符-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>资讯内容</td>-->
<!--                    <td>-->
<!--                        <textarea name="info">--><?php //echo $data['info']?><!--</textarea>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        请输入资讯内容-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>资讯内容2</td>-->
<!--                    <td>-->
<!--                        <textarea name="info2">--><?php //echo $data['info2']?><!--</textarea>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        请输入资讯内容-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>资讯内容3</td>-->
<!--                    <td>-->
<!--                        <textarea name="info3">--><?php //echo $data['info3']?><!--</textarea>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        请输入资讯内容-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>序号</td>-->
<!--                    <td><input name="sort" value="--><?php //echo $data['sort']?><!--" type="int" /></td>-->
<!--                    <td>-->
<!--                        请输入序号-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>板块图片</td>-->
<!--                    <td>-->
<!--                        <div style="margin:15px 0 0 0;">-->
<!--                            <input style="cursor:pointer;" value="--><?php //echo $data['imgurl']?><!--" width="100" type="file" name="photo" /><br /><br />-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        插入一张图片-->
<!--                    </td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>板块图片2</td>-->
<!--                    <td>-->
<!--                        <div style="margin:15px 0 0 0;">-->
<!--                            <input style="cursor:pointer;" width="100" type="file" name="photo2" /><br /><br />-->
<!--                        </div>-->
<!--                    </td>-->
<!--                    <td>-->
<!--                        插入一张图片-->
<!--                    </td>-->
<!--                </tr>-->
<!---->
<!---->
<!--                <tr>-->
<!--                    <td>排序</td>-->
<!--                    <td><input name="sort" value="0" type="text" /></td>-->
<!--                    <td>-->
<!--                        填写一个数字即可-->
<!--                    </td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />-->
<!--        </form>-->
<!--    </div>-->
<?php //include 'inc/footer.inc.php'?>

<?php
include_once '../inc/config.inc.php';
include_once '../inc/mysql.inc.php';
include_once '../inc/tool.inc.php';
$link=connect();
include_once 'inc/is_manage_login.inc.php';//验证管理员是否登录
if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
    skip('message.php','error','id参数错误！');
}
$query="select * from sfk_message_connect where id={$_GET['id']}";
$result=execute($link,$query);
if(!mysqli_num_rows($result)){
    skip('message.php','error','这条子版块信息不存在！');
}
$data=mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){

    //验证
    $check_flag='update';
//    include 'inc/check_message.inc.php';
    $query="update sfk_message_connect set module_name='{$_POST['module_name']}',info='{$_POST['info']}',sort={$_POST['sort']},info='{$_POST['info2']}',info='{$_POST['info3']}' where id={$_GET['id']}";
    execute($link,$query);
    if(mysqli_affected_rows($link)==1){
        skip('message.php','ok','修改成功！');
    }else{
        skip('message.php','error','修改失败,请重试！');
    }
}
$template['title']='资讯修改页';
$template['css']=array('style/public.css');
?>
<?php include 'inc/header.inc.php'?>
<div id="main">
    <div class="title" style="margin-bottom:20px;">编辑资讯</div>
    <form method="post" enctype="multipart/form-data">
        <table class="au">
            <tr>
                <td>资讯标题</td>
                <td><input name="module_name"  value="<?php echo $data['module_name']?>" type="text" /></td>
                <td>
                    版块名称不得为空，最大不得超过66个字符
                </td>
            </tr>
            <tr>
                <td>资讯内容</td>
                <td>
                    <textarea name="info"  ><?php echo $data['info']?></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>资讯内容2</td>
                <td>
                    <textarea name="info2"  ><?php echo $data['info2']?></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>资讯内容3</td>
                <td>
                    <textarea name="info3"  ><?php echo $data['info3']?></textarea>
                </td>
                <td>
                    请输入资讯内容
                </td>
            </tr>
            <tr>
                <td>序号</td>
                <td><input name="sort"  value="<?php echo $data['sort']?>" type="int" /></td>
                <td>
                    请输入序号
                </td>
            </tr>


        </table>
        <input style="margin-top:20px;cursor:pointer;" class="btn" type="submit" name="submit" value="添加" />
    </form>
</div>
<?php include 'inc/footer.inc.php'?>
