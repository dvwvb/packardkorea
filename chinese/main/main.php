<?php
$mmenu = 9999;
$smenu = 9999;
include_once '../contents/inc/config.php';
?>

<body class="chinese">
    <div id="wrap">

        <div class="main num1">
            <?php include '../contents/inc/top.php';?>
            <div class="main_visual">
                <div class="content">
                    <div class="mainslide">
                        <ul>
                            <li class="ms_list07"></li>
                            <li class="ms_list04"></li>
                            <li class="ms_list03"></li>
                            <li class="ms_list06"></li>
                            <li class="ms_list05"></li>
                        </ul>
                    </div>
                    <script>
                    $(document).on('ready',function(){
                        // $('.mainslide>ul').on('init', function(event, slick) {
                        //     $(".slick-slide").eq(0).addClass("active");
                        // });
                        // $('.mainslide>ul').on('afterChange', function(event, slick, currentSlide, nextSlide){
                        //     $(".slick-slide").removeClass("active");
                        //     $(this).find(".slick-slide").eq(currentSlide).addClass("active")
                        // });

                        $('.mainslide>ul').slick({
                            dots: false,
                            infinite: true,
                            arrows:true,
                            pauseOnHover:false,
                            autoplay:true,
                            fade:true,
                            autoplaySpeed: 7000,
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            cssEase: 'linear'
                        });

                        $('.visual .txt02').css('opacity',0).delay(1500).animate({
                            'opacity':1,
                            'marginTop':'5px'
                        },1200);
                        $('.visual .txt03').css('opacity',0).delay(1800).animate({
                            'opacity':1,
                            'marginTop':'5px'
                        },1200);

                    })
</script>
<div class="visual">
    <!-- <p class="txt01">A Spirit of</p> -->
    <p class="txt02">????????? ?????? ??????, ???????????????</p>
    <p class="txt03">Packard Korea ???????????????????????????????????????????????????????????????</p>
</div>
</div>
</div>
</div>

<div id="sec01" class="intro num2">
    <div class="content">
        <p class="txt01">???????????????????????????????????????</p>
        <p class="txt02">(???)Packard Korea???????????????????????????????????????????????????????????????????????????????????????????????????</p>
        <div class="btn">
            <a href="/contents/about/overview.php" class="btn_type01"><span>????????????</span></a>
        </div>
    </div>
</div>

<div id="sec02" class="business num3 stg_w">
    <div class="content">
        <h2 class="con_tit">????????????</h2>
        <div class="top clear">
            <div class="box box01 motion_stg">
                <div class="">
                    <div class="txt">
                        <h3 class="m_tit">Wiring Harness</h3>
                        <p class="m_stit">???????????????W/Harness System??????????????????</p>
                        <div class="btn">
                            <a href="/contents/business/wiring_harness.php" class="btn_type08"><span>more</span></a>
                        </div>
                    </div>
                    <div class="img">
                        <!--img src="/img/@img_business01.jpg" alt=""-->
                    </div>
                </div>
            </div>
            <div class="box box02 motion_stg">
                <div>
                    <div class="txt">
                        <h3 class="m_tit">?????????</h3>
                        <p class="m_stit">????????????????????????????????????????????????</p>
                        <div class="btn">
                            <a href="/contents/business/component.php" class="btn_type08"><span>more</span></a>
                        </div>
                    </div>
                    <div class="img">
                        <!--img src="/img/@img_business02.jpg" alt=""-->
                    </div>
                </div>
            </div>
        </div>
        <div class="btm cleardiv">
            <div class="box box04 motion">
                <div>
                    <div class="txt">
                        <h3 class="m_tit">????????????</h3>
                        <p class="m_stit">??????????????????Packard Korea??????????????????</p>
                        <div class="btn">
                            <a href="/contents/promote/media.php" class="btn_type02"><span class="hide">more</span></a>
                        </div>
                    </div>
                    <div class="img">
                        <!--img src="/img/@img_business04.jpg" alt=""-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sec03" class="develope num4 stg_w">
    <div class="content">
        <ul class="clear">
            <li class="develope_tit motion_stg">
                <div class="ml0">
                    <h2>????????????</h2>
                    <p>??????????????????????????????????????????????????????</p>
                </div>
            </li>
            <li class="dev01 motion_stg">
                <div>
                    <a href="/contents/develop/field.php">
                        <div class="img"></div>
                        <p class="tit">???????????????</p>
                    </a>
                </div>
            </li>
            <li class="dev02 motion_stg">
                <div>
                    <a href="/contents/develop/research.php">
                        <div class="img"></div>
                        <p class="tit">????????????</p>
                    </a>
                </div>
            </li>
            <li class="dev03 motion_stg">
                <div class="mr0">
                    <a href="/contents/develop/tools.php?pos=sec02">
                        <div class="img"></div>
                        <p class="tit">????????????</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="sec04" class="system clear num5 stg_w">
    <div class="management motion_stg">
        <h2 class="m_tit">????????????</h2>
        <p class="m_stit">???????????????????????????????????????</p>
        <div class="btn">
            <a href="/contents/management/quality.php" class="btn_type04"><span>??????????????????</span></a>
        </div>
    </div>
    <div class="process motion_stg">
        <h2 class="m_tit">????????????</h2>
        <p class="m_stit">?????????????????????????????????????????????</p>
        <div class="btn">
            <a href="/contents/business/wiring_harness.php?pos=sec02" class="btn_type04"><span>??????????????????</span></a>
        </div>
    </div>
</div>

<div id="sec05" class="recruitment num6 stg_w">
    <div class="content">
        <h2 class="con_tit">????????????</h2>
        <ul class="clear">
            <li class="fl recu01 motion_stg">
                <div class="txt">
                    <h3 class="m_tit">????????????</h3>
                    <p class="m_stit">????????????????????????</p>
                    <div class="btn">
                        <a href="/contents/recruit/talent.php" class="btn_type09"><span>more</span></a>
                    </div>
                </div>
            </li>
            <li class="fr recu02 motion_stg">
                <div class="txt">
                    <h3 class="m_tit">????????????</h3>
                    <p class="m_stit">?????????????????????</p>
                    <div class="btn">
                        <a href="/bbs/board.php?bo_table=recruit" class="btn_type09"><span>more</span></a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>

<div id="sec06" class="partner num7 motion">
    <div class="content">
        <h2 class="con_tit">??????????????????</h2>
        <ul class="grid clear">
            <li class="grid-item"><img src="/img/common/partners01.jpg" alt="GM ?????????"></li>
            <li class="grid-item"><img src="/img/common/partners02.jpg" alt="?????????????????????"></li>
            <li class="grid-item"><img src="/img/common/partners03.jpg" alt="???????????????"></li>
            <li class="grid-item"><img src="/img/common/partners04.jpg" alt="???????????????"></li>
            <li class="grid-item"><img src="/img/common/partners07.jpg" alt="??????"></li>
            <li class="grid-item"><img src="/img/common/partners05.jpg" alt="???????????????"></li>
            <li class="grid-item"><img src="/img/common/partners06.jpg" alt="?????????????????????"></li>
            <li class="grid-item"><img src="/img/common/partners11.jpg" alt="????????????"></li>
            <li class="grid-item"><img src="/img/common/partners00.jpg" alt="APTIV"></li>
            <li class="grid-item"><img src="/img/common/partners08.jpg" alt="??????"></li>
            <li class="grid-item"><img src="/img/common/partners09.jpg" alt="???????????????"></li>
            <li class="grid-item"><img src="/img/common/partners10.jpg" alt="?????? ?????????"></li>
            <li class="grid-item"><img src="/img/common/partners12.jpg" alt="?????????"></li>

        </ul>
    </div>
</div>
<!--
<div id="sec07" class="notice clear num8">
<div class="fl">
<div class="swiper-container">
<div class="swiper-wrapper">
<div class="swiper-slide">
<a href="#">
<strong>2017 ?????????????????? ????????? ????????? ??????/?????? ?????? ????????????</strong>
<span>2017-07-07</span>
</a>
</div>
<div class="swiper-slide">
<a href="#">
<strong>????????????2???</strong>
<span>2017-07-07</span>
</a>
</div>
<div class="swiper-slide">
<a href="#">
<strong>????????????3???</strong>
<span>2017-07-07</span>
</a>
</div>
</div>
<div class="prev btn"><a href="#none" class="btn_type06 prev"><span class="hide">???????????????</span></a></div>
<div class="next btn"><a href="#none" class="btn_type07 next"><span class="hide">???????????????</span></a></div>
</div>
</div>
<div class="right">
<div>
<ul class="clear">
<li><a href="/contents/promote/article.php">????????????</a></li>
<li><a href="/contents/cscenter/support.php">????????????</a></li>
<li><a href="/contents/cscenter/site.php">???????????????</a></li>
</ul>
</div>
</div>
</div>  -->

<script>
$(document).ready(function() {
  $("a").on("click touchend", function(e) {
    var el = $(this);
    var link = el.attr("href");
    window.location = link;
  });
});

var swiper = new Swiper('.swiper-container', {
    paginationClickable: true,
    nextButton: '.next',
    prevButton: '.prev',
    loop:true,
    direction:'vertical'
});
</script>
<?php include '../contents/inc/copy.php';?>

