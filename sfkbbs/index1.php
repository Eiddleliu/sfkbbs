
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="style/swiper-bundle.min.css">
    <link rel="stylesheet" href="style/swiper.min.css">


    <!-- Demo styles -->
    <style>
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .pc-banner {
            background: url(pcbanner/images/top_main_bg01.jpg) no-repeat center top/100% auto;
            width: 100%;
            float: left;
        }

        @media screen and (max-width: 668px) {
            .pc-banner {
                background-size: auto 100%;
            }
        }

        .swiper-container {
            width: 100%;
            margin: 35px 0;
        }

        @media screen and (max-width: 668px) {
            .swiper-container {
                margin: 20px 0 15px;
            }
        }

        .swiper-slide {
            -webkit-transition: transform 1.0s;
            -moz-transition: transform 1.0s;
            -ms-transition: transform 1.0s;
            -o-transition: transform 1.0s;
            -webkit-transform: scale(0.7);
            transform: scale(0.7);
        }

        @media screen and (max-width: 668px) {
            .swiper-slide {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
            }
        }

        .swiper-slide-active,.swiper-slide-duplicate-active {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        @media screen and (max-width: 668px) {
            .swiper-slide-active,.swiper-slide-duplicate-active {
                -webkit-transform: scale(0.97);
                transform: scale(0.97);
            }
        }

        .none-effect {
            -webkit-transition: none;
            -moz-transition: none;
            -ms-transition: none;
            -o-transition: none;
        }

        .swiper-slide a {
            background: #fff;
            padding:10px;
            display: block;
            border-radius: 14px;
        }

        @media screen and (min-width: 668px) {
            .swiper-slide a:after {
                position: absolute;
                top: 0;
                left: 0;
                display: block;
                box-sizing: border-box;
                border: 10px solid #fff;
                content: "";
                width: 100%;
                height: 100%;
                background: url(pcbanner/images/top_slick_cover_bg01.png) 0 0 repeat;
                border-radius: 20px;
            }
        }

        .swiper-slide-active a:after {
            background: none;
        }

        @media screen and (max-width: 668px) {
            .swiper-slide a {
                padding: 5px;
                border-radius: 7px;
            }
        }

        .swiper-slide img {
            width: 100%;
            border-radius: 14px;
            display: block;
        }

        @media screen and (max-width: 668px) {
            .swiper-slide img {
                border-radius: 7px;
            }
        }

        .swiper-pagination {
            position: relative;
            margin-bottom: 30px;
        }

        .swiper-pagination-bullet {
            background: #00a0e9;
            margin-left: 4px;
            margin-right: 4px;
            width: 17px;
            height: 17px;
            opacity: 1;
            margin-bottom: 4px;
        }

        .swiper-pagination-bullet-active {
            width: 13px;
            height: 13px;
            background: #FFF;
            border: 6px solid #00a0e9;
            margin-bottom: 0;
        }

        @media screen and (max-width: 668px) {

            .swiper-pagination {
                position: relative;
                margin-bottom: 20px;
            }

            .swiper-pagination-bullet {
                background: #00a0e9;
                margin-left: 2px;
                margin-right: 2px;
                width: 8px;
                height: 8px;
                margin-bottom: 2px;
            }

            .swiper-pagination-bullet-active {
                width: 6px;
                height: 6px;
                background: #FFF;
                border: 3px solid #00a0e9;
                margin-bottom: 0;
            }
        }

        .button {
            width: 1000px;
            margin: 0 auto;
            bottom: 43px;
            position: relative;
        }

        @media screen and (max-width: 668px) {
            .button {
                width: 70%;
                bottom: 22px;
            }
        }

        .button div:hover {
            background-color: #2f4798;
        }

        .swiper-button-prev {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l4.2%2C4.2L8.4%2C22l17.8%2C17.8L22%2C44L0%2C22z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E") #00a0e9 center 50%/50% 50% no-repeat;
        }

        .swiper-button-next {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L5%2C44l-4.2-4.2L18.6%2C22L0.8%2C4.2L5%2C0z'%20fill%3D'%23ffffff'%2F%3E%3C%2Fsvg%3E") #00a0e9 center 50%/50% 50% no-repeat;
        }

        @media screen and (max-width: 668px) {
            .button div {
                width: 28px;
                height: 28px;
            }
        }

    </style>
</head>
<body >
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

<!-- Swiper JS -->
<script src="style/swiper-bundle.min.js"></script>
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
</body>
</html>
