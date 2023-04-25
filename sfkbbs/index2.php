<?php
include_once 'inc/config.inc.php';
include_once 'inc/mysql.inc.php';
include_once 'inc/tool.inc.php';
$link=connect();
$member_id=is_login($link);


$template['title']='首页';
$template['css']=array('style/public.css','style/index.css');
?>
    <link rel="stylesheet" href="style/swiper.min.css">
    <link rel="stylesheet" href="style/swiper.css">
<?php include 'inc/header.inc.php'?>
    <!-- Swiper -->

    <section class="pc-banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide-center none-effect"><a href="#"><img src="pcbanner/images/top_hero_conc_2017.jpg" ></a></div>
                <div class="swiper-slide"><a href="#"><img src="pcbanner/images/top_hero_cs_2017.jpg" ></a></div>
                <div class="swiper-slide"><a href="#"><img src="pcbanner/images/top_hero_cw_im17.jpg" ></a></div>
                <div class="swiper-slide"><a href="#"><img src="pcbanner/images/top_hero_hakko.jpg" ></a></div>
                <div class="swiper-slide"><a href="#"><img src="pcbanner/images/top_hero_karadacalpis_im02.jpg" ></a></div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
        <div class="button">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div></div>
    </section>



<div id="hot" class="auto">
	<div class="title">热门动态</div>
	<ul class="newlist">
		<!-- 20条 -->
		<li><a href="#">[库队]</a> <a href="#">私房库实战项目录制中...</a></li>
		
	</ul>
	<div style="clear:both;"></div>
</div>
<?php 
$query="select * from sfk_father_module order by sort desc";
$result_father=execute($link, $query);
while($data_father=mysqli_fetch_assoc($result_father)){
?>
<div class="box auto">
	<div class="title">
		<a href="list_father.php?id=<?php echo $data_father['id']?>" style="color:#105cb6;"><?php echo $data_father['module_name']?></a>
	</div>
	<div class="classList">
		<?php 
		$query="select * from sfk_son_module where father_module_id={$data_father['id']}";
		$result_son=execute($link, $query);
		if(mysqli_num_rows($result_son)){
			while ($data_son=mysqli_fetch_assoc($result_son)){
				$query="select count(*) from sfk_content where module_id={$data_son['id']} and time > CURDATE()";
				$count_today=num($link,$query);
				$query="select count(*) from sfk_content where module_id={$data_son['id']}";
				$count_all=num($link,$query);
				$html=<<<A
					<div class="childBox new">
						<h2><a href="list_son.php?id={$data_son['id']}">{$data_son['module_name']}</a> <span>(今日{$count_today})</span></h2>
						帖子：{$count_all}<br />
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
    <!-- Swiper JS -->
    <script src="style/swiper.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        window.onload = function() {
            var swiper = new Swiper('.swiper-container',{
                autoplay:3000,
                speed:1000,
                autoplayDisableOnInteraction : false,
                loop:true,
                centeredSlides : true,
                slidesPerView:2,
                pagination : '.swiper-pagination',
                paginationClickable:true,
                prevButton:'.swiper-button-prev',
                nextButton:'.swiper-button-next',
                onInit:function(swiper){
                    swiper.slides[2].className="swiper-slide swiper-slide-active";//第一次打开不要动画
                },
                breakpoints: {
                    668: {
                        slidesPerView: 1,
                    }
                }
            });
        }
    </script>
<?php }?>

<?php include 'inc/footer.inc.php'?>