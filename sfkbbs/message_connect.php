<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
$member_id=is_login($link);


$template['title']='资讯';
$template['css']=array('style/public.css','style/message.css','style/swiper.min.css','style/style.css');

?>
    <!-- Bundle -->
    <link rel="stylesheet" href="style/message_css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="style/message_css/cubeportfolio.min.css">
    <link rel="stylesheet" href="style/message_css/owl.carousel.min.css">
    <link rel="stylesheet" href="style/message_css/animate.min.css">
    <link rel="stylesheet" href="style/message_css/jquery.fancybox.css">
    <link rel="stylesheet" href="style/message_css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="style/message_css/line-awesome.min.css">
    <link rel="stylesheet" href="style/message_css/mediaelementplayer.css">
    <link rel="stylesheet" href="style/message_css/mejs-controls.svg">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="style/message_css/style.css">
    <link rel="stylesheet" type="text/css" href="style/public.css" />

<?php include 'inc/header.inc.php'?>

    <section id="search3">
<?php

if($_GET['id'] == "" || $_GET['id'] < 1) {
   return;
}
$query = "select * from sfk_message_connect where id={$_GET['id']}";
$result_son = execute($link,$query);
$data_son = mysqli_fetch_assoc($result_son);
if($data_son['module_name'] != ""){
        $html=<<<A
        <div class="container">
            <div class="row pt-lg-5 pb-lg-5">

                <div class="col-sm-12 col-ms-8 col-lg-8">
                     <div class="quote_text">
                        <p class="quote green-color">{$data_son['module_name']}</p>
                        <div class="verticle_lineQ green-color"></div>
                    </div>

A;
        echo $html;

}else{
    echo '<div style="padding:10px 0;">暂无子版块...</div>';
}
if($data_son['video']!=""){
    $html=<<<A
<div class="col-sm-12 col-ms-8 col-lg-8">
<h1 class="pt-3 font-weight-bold blog_detail-heading green-color">相关视频</h1>
                    <div class="row mt-40 pl-3 pr-3">

                        <video id="player1" poster="img/video-poster.jpg" controls="controls" style="max-width: 100%;" playsinline="">
                            <source type="video/mp4" src="{$data_son['video']}">
                        </video>
                    </div>
</div>
A;
    echo $html;
}else{
    echo '<div style="padding:10px 0;">暂无子版块...</div>';
}
if($data_son['module_name'] != ""){
        $html=<<<A
                    <div class="text_minimal1 pt-0" style="text-indent:2em;margin: 40px 0px 40px 0px">
                    <p class="sub-heading text-black"style="margin: 40px 0px 40px 0px" >{$data_son['info']}</p>


                            <div class="col-12 pt-2"> <img class="image_blogL" src="{$data_son['imgurl']}" alt=""></div>


                        <p class="sub-heading text-black"style="margin: 40px 0px 40px 0px" >{$data_son['info2']}</p>


                            <div class="col-12 pt-2"> <img class="image_blogL" src="{$data_son['imgurl2']}" alt=""></div>

                        <p class="sub-heading text-black"style="margin: 40px 0px 40px 0px" >{$data_son['info3']}</p>
                    </div>
                </div>
A;
    echo $html;

}else{
    echo '<div style="padding:10px 0;">暂无子版块...</div>';
}
?>
                <div class="col-12 col-lg-4 order-2 order-md-1">


                    <section id="topics">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-0 pl-0">
                                    <div class="topic_outerbox mt-4">
                                        <h2>热点资讯</h2>
                                        <div class="inner-box">
                                            <ul>
                                                    <?php
                                                    $query="select * from sfk_message_connect";
                                                    $result_father=execute($link, $query);
                                                    while($data_father=mysqli_fetch_assoc($result_father)){
                                                        ?>
                                                        <li>
                                                            <span class="dots"">-·<a href="message_connect.php?id=<?php echo $data_father['id']?>"><?php echo $data_father['module_name']?></a></span>
                                                        </li>
                                                        <?php
                                                    }
                                                    ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section id="tags">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-0 pl-0">
                                    <div class="outer_tag mt-4">
                                        <h2 class="main_tag">Tags</h2>
                                        <div class="inner_tag">
                                            <div class="tag_text">
                                                <span><a href="">JEWELRY</a></span>
                                                <span><a href="">BRIDAL</a></span>
                                                <span><a href="">GOLD</a></span>
                                                <span><a href="">DIAMOND</a></span>
                                                <span><a href="">RING</a></span>
                                                <span><a href="">BRACELET</a></span>
                                                <span><a href="">NECKLACE</a></span>
                                                <span><a href="">EARRINGS</a></span>
                                                <span><a href="">PEARL</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="sale_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 pr-0 pl-0 pt-4 pb-4">
                                    <img class="sale_img" src="pcbanner/images/j+%20GAME.png" alt="advertisment image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <div style="clear:both;"></div>
    <!-- JavaScript -->
    <script src="style/message_js/bundle.min.js"></script>
    <!-- Plugin Js -->
    <script src="style/message_js/owl.carousel.min.js"></script>
    <script src="style/message_js/jquery.cubeportfolio.min.js"></script>
    <!-- custom script -->
    <script src="style/message_js/jquery.fancybox.js"></script>
    <script src="style/message_js/jquery.fancybox.min.js"></script>
    <script src="style/message_js/owl.carousel.min.js"></script>
    <script src="style/message_js/mediaelement-and-player.min.js"></script>
    <script src="style/message_js/wow.min.js"></script>
    <script src="style/message_js/parallaxie.min.js"></script>
    <script src="style/message_js/js.js"></script>
<?php
if(isset($_POST['submit'])){
    if(!$member_id=is_login($link)){
        skip('login.php', 'error', '请登录之后再做回复!');
    }
    include 'inc/check_reply.inc.php';
    $_POST=escape($link,$_POST);
    $query="insert into sfk_reply_message(content_id,content,time,member_id) values({$_GET['id']},'{$_POST['content']}',now(),{$member_id})";
    execute($link, $query);
    if(mysqli_affected_rows($link)==1){
        skip("message_connect.php?id={$_GET['id']}", 'ok', '回复成功!');
    }else{
        skip($_SERVER['REQUEST_URI'], 'error', '回复失败,请重试!');
    }
}
?>
    <div class="comment">
        <h1 class="comment_text mt-6 mb-5 green-color">留下你的<span class="blue-color"> 评论</span></h1>
        <form method="post">
            <div class="row">


                <div class="col-12">
                    <div class="form-group">
                        <span class="message-error error"></span>
                        <textarea class="form-control" rows="5" required="" name="content" ></textarea>
                    </div>
                    <button  class="btn btn-slider btn-small trans-btn w-100" type="submit" name="submit" value="" ;">SUBMIT NOW</button>
                </div>

            </div>
        </form>
    </div>

<?php include 'show_message.php'?>


<?php include 'inc/footer.inc.php'?>