<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
$member_id=is_login($link);


$template['title']='首页';
$template['css']=array('style/public.css','style/message.css','style/swiper.min.css','style/swiper.css','style/style.css');

?>
<?php include 'inc/header.inc.php'?>
    <div class="bigbox">

        <div class="box auto">
            <div class="title">
<!--                <a href="list_father.php?id=--><?php //echo $data_father['id']?><!--" style="color:#1f2233;font-size: 20px;">--><?php //echo $data_father['module_name']?><!--</a>-->
                <h1>最新资讯</h1>
            </div>
            <div class="classList">
                <?php
                $query="select * from sfk_message_connect ";
                $result_son=execute($link, $query);
                if(mysqli_num_rows($result_son)){
                    while ($data_son=mysqli_fetch_assoc($result_son)){
                        $html=<<<A
                    
					<div class="childBox">
					<a href="message_connect.php?id={$data_son['id']}">
					    <div class="childBox_img"><img class="childBox_img_size" src="{$data_son['imgurl']}" alt=""></div>
						<h2><a href="message_connect.php?id={$data_son['id']}">{$data_son['module_name']}</a> </h2>
						<text style="padding-right: 60px">{$data_son['info']}</text><br /><br />
						<p style="color: #7d7d7d" >发布时间：{$data_son['time']}</p><br />
						</a>
					</div>
                   
A;
                        echo $html;
                    }
                }else{
                    echo '<div style="padding:10px 0;">暂无子版块...</div>';
                }
                ?>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>



<?php include 'inc/footer.inc.php'?>