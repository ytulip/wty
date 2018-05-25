<?php
require_once  "core/PdoMysql.php";
require_once  "core/DB.php";

$bannerList = DB::select('select * from onethink_channel order by sort asc,id asc');
$bannerList1 = DB::select('select * from onethink_channel1 order by sort asc,id asc');
$infoArray = DB::select('select * from onethink_channel2');


?>
<!DOCTYPE html>
<html>

<head>
    <title>kingpou</title>

    <!--/tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//tags -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
    <link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!-- //for bootstrap working -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <link href="css/amazeui.css" rel="stylesheet"/>
    <style>
<?php
        foreach ($bannerList as $key=>$val)
        {
            echo ' .carousel .item'.(($key==0)?'':('.item' . ($key+1))).'{
            background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url('.$val->cover_image.') no-repeat;
            background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url('.$val->cover_image.') no-repeat;
            background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url('.$val->cover_image.') no-repeat;
            background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url('.$val->cover_image.') no-repeat;
            background-size: cover;
        }';
        }
        ?>

#send_btn {
    outline: none;
    padding: 23px 0;
    font-size: 14px;
    color: #fff;
    background: #344754;
    width: 49.75%;
    border: none;
    letter-spacing: 2px;
    text-transform: uppercase;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
    font-weight: 700;
    background-color: #ff3c41;
}
    </style>
</head>

<body>
<div class="top_header" id="home">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="nav_top_fx_w3layouts_agileits">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
<!--                    <h1> <a class="navbar-brand" href="index.html"><i class="fas fa-camera" aria-hidden="true"></i> Photocall <span class="desc">4 Digital Shots</span></a></h1>-->

                    <h1 style="overflow: hidden;"> <a class="navbar-brand" href="<?php echo $infoArray[7]->url;?>"  <?php echo $infoArray[7]->target?'target="_blank"':'' ?> ><img src="<?php echo $infoArray[7]->cover_image;?>" style="width: 210px;height: 50px;"/></a></h1>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="nav_right_top_agile_w3ls">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://www.freeswimmingbaby.com/">首页</a></li>
                        <li><a class="scroll" href="#about">关于我们</a></li>
                        <li><a href="#services" class="scroll">服务</a></li>


                        <li><a class="scroll" href="#contact">联系我们</a></li>

                    </ul>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="clearfix"></div>
</div>

<!--banner new-->
<div class="banner-top" style="margin-top: 114px;">
    <div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 3000,slideshow:true,  controlNav: true;slideshowSpeed: 3000}" id="demo-slider-0">
        <ul class="am-slides">
            <?php
            foreach ($bannerList as $key=>$val)
            {
            echo '<li onclick="goHerf(\''.$val->url.'\','.$val->target.')" class="item '.($key == 0?'active':('item' . ($key + 1))).'"><img src="'.$val->cover_image.'"/></li>';
            }
            ?>
        </ul>
    </div>
</div>
<!-- banner -->
<!--//banner -->
<!--/ab-->
<div class="banner_bottom" id="about" style="padding-bottom: 0;">
    <div class="container">
        <h3 class="tittle_w3ls">关于我们</h3>
        <?php
        foreach($bannerList1 as $key=>$val)
        {
            echo '
                        <div style="width: 80%;text-align: center;margin: 0 auto;margin-bottom: 38px;">
                        <div>
                            <img style="width: 100%;" src="'.$val->cover_image.'" alt="PhotoCall">
                        </div>
                        
                        <div class="">
                            <h4 style="margin-top:38px;font-size: 1.5em;
    color: #3c3c3c;
    letter-spacing: 1px;
    position: relative;
    font-weight: 600;
    line-height: 1.6em;
    margin-bottom: 1em;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">'.$val->title.'</h4>

                            <p>'.$val->content.'</p>
                        </div>
                        </div>
                 ';
        }
        ?>
    </div>
    <!--//ab-->
    <!--/what-->
    <div class="works" id="services">
        <div class="container">
            <h3 class="tittle_w3ls cen">更好服务</h3>
            <div class="inner_sec_info_agile_w3_info">
                <div class="ser-first">
                    <div class="col-md-3 ser-first-grid text-center">
                        <div class="dodecagon">
                            <div class="dodecagon-in">
                                <div class="dodecagon-bg">
                                    <span class="far fa-edit" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo $infoArray[0]->title; ?></h3>
                        <p><?php echo $infoArray[0]->content; ?></p>
                    </div>
                    <div class="col-md-3 ser-first-grid text-center">
                        <div class="dodecagon">
                            <div class="dodecagon-in">
                                <div class="dodecagon-bg">
                                    <span class="far fa-paper-plane" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo $infoArray[1]->title; ?></h3>
                        <p><?php echo $infoArray[1]->content; ?></p>
                    </div>
                    <div class="col-md-3 ser-first-grid text-center">
                        <div class="dodecagon">
                            <div class="dodecagon-in">
                                <div class="dodecagon-bg">
                                    <span class="far fa-star" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo $infoArray[2]->title; ?></h3>
                        <p><?php echo $infoArray[2]->content; ?></p>
                    </div>
                    <div class="col-md-3 ser-first-grid text-center">
                        <div class="dodecagon">
                            <div class="dodecagon-in">
                                <div class="dodecagon-bg">
                                    <span class="far fa-user" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo $infoArray[3]->title; ?></h3>
                        <p><?php echo $infoArray[3]->content; ?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

        </div>
    </div>
    <!--//what-->
    <!--/photographers-->
    <!--//photographers-->


    <!--//gallery-->
    <!--/last-->
    <!--//last-->
    <!--/price-->
    <!--//price-->
    <!-- Modal1 -->

    <!-- //Modal1 -->
    <!--/testimonials-->
    <!--//testimonials-->

    <!-- /newsletter-->
    <!-- //newsletter-->

    <!-- footer -->
    <div class="footer" id="contact">
        <div class="footer_inner_info">
            <!--/tabs-->
            <div class="responsive_tabs">
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>联系方式</li>
                        <li>在线留言</li>
                        <li>查看地址</li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <div class="tab1">
                            <div class="tab-info">

                                <div class="address">
                                    <div class="col-md-4 address-grid-w3ls-agile">
                                        <div class="address-left">
                                            <div class="dodecagon f1">
                                                <div class="dodecagon-in f1">
                                                    <div class="dodecagon-bg f1">
                                                        <span class="fas fa-phone-volume" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-right">
                                            <h6><?php echo $infoArray[4]->title; ?></h6>
                                            <p><?php echo $infoArray[4]->content; ?></p>

                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="col-md-4 address-grid-w3ls-agile">
                                        <div class="address-left">
                                            <div class="dodecagon f1">
                                                <div class="dodecagon-in f1">
                                                    <div class="dodecagon-bg f1">
                                                        <span class="far fa-envelope" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-right">
                                            <h6><?php echo $infoArray[5]->title; ?></h6>
                                            <p><?php echo $infoArray[5]->content; ?></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="col-md-4 address-grid-w3ls-agile">
                                        <div class="address-left">
                                            <div class="dodecagon f1">
                                                <div class="dodecagon-in f1">
                                                    <div class="dodecagon-bg f1">
                                                        <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="address-right">
                                            <h6><?php echo $infoArray[6]->title; ?></h6>
                                            <p><?php echo $infoArray[6]->content; ?></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <div class="tab2">

                            <div class="tab-info">
                                <div class="contact_grid_right">
                                    <h6>请填写您的联系方式，我们将尽快联系您</h6>
                                    <form action="#" method="post">
                                        <div class="contact_left_grid">
                                            <input type="text" name="Name" placeholder="Name" required="">
                                            <input type="email" name="Email" placeholder="Email" required="">

                                            <input type="text" name="Telephone" placeholder="Telephone" required="">
                                            <input type="text" name="Subject" placeholder="Subject" required="">
                                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                            <button id="send_btn" type="button" style="text-align: center;">提交</button>
                                            <input type="reset" value="清空">
                                            <div class="clearfix"> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--//tab_two-->
                        <style>
                            #allmap{ display:inline-block;width:70%;}
                            .address-wrapper{display: inline-block;width:30%;padding:0 20px;box-sizing: border-box;color:#ffffff;font-size: 16px;vertical-align: top;direction: ltr; }
                            .tab3{font-size: 0;direction: rtl;}
                            @media only screen and (max-width: 540px) {
                                #allmap{ width:100%;}
                                .address-wrapper{width:100%;padding:0;}
                            }

                            .tab3{font-size: 0;}

                        </style>
                        <div class="tab3" >

                            <div class="address-wrapper">
                                <p><?php echo $infoArray[8]->content;?></p>
                            </div>
                            <div class="tab-info" style="height: 400px;" id="allmap">


                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--//tabs-->
            <div class="clearfix"> </div>
            <p class="copy-right">Copyright &copy; 2018.中山市远信商贸有限公司 All rights reserved.<a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备17028412号-2</a></p>
        </div>
    </div>
    <!-- //footer -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="layer/layer.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=uD92DuzK9m4bBlMDQs4dsbHU"></script>
    <script>
        // 百度地图API功能
        var map = new BMap.Map("allmap");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(<?php echo $infoArray[9]->title;?>,<?php echo $infoArray[9]->content;?>),6);  // 初始化地图,设置中心点坐标和地图级别
        map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
        map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
        </script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });

        $('#send_btn').click(function(){
//            alert('123');
            if(!$('input[name="Name"]').val()){
                layer.msg('姓名不能为空');
                return;
            }
            if(!$('input[name="Email"]').val()){
                layer.msg('邮箱不能为空');
                return;
            }
            if(!$('input[name="Telephone"]').val()){
                layer.msg('电话不能为空');
                return;
            }
            if(!$('input[name="Subject"]').val()){
                layer.msg('主题不能为空');
                return;
            }
            if(!$('textarea[name="Message"]').val()){
                layer.msg('信息不能为空');
                return;
            }



            $.ajax(
                {
                    url:'/wwwroot/Home/Index/saveMessage',
                    data:{Name:$('input[name="Name"]').val(),Email:$('input[name="Email"]').val(),Telephone:$('input[name="Telephone"]').val(),Subject:$('input[name="Subject"]').val(),Message:$('textarea[name="Message"]').val()},
                    dataType:'json',
                    success:function(data)
                    {
                        if(data.status){
                            layer.msg('提交成功');
                        } else {
                            layer.msg('提交失败');
                        }
                    }

                }
            );
        });
    </script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script type="text/javascript" src="js/all.js"></script>
    <script>
        $('ul.dropdown-menu li').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    </script>

    <!-- js -->
    <!--/tooltip -->
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip({
                trigger: 'manual'
            }).tooltip('show');
        });

        // $( window ).scroll(function() {
        // if($( window ).scrollTop() > 10){  // scroll down abit and get the action
        $(".progress-bar").each(function () {
            each_bar_width = $(this).attr('aria-valuenow');
            $(this).width(each_bar_width + '%');
        });

        //  }
        // });
    </script>
    <!--//tooltip -->
    <!-- script for responsive tabs -->
    <script src="js/easy-responsive-tabs.js"></script>
    <script>
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!--// script for responsive tabs -->

    <!--gallery -->
    <script src="js/jquery.chocolat.js"></script>
    <!--light-box-files -->
    <script type="text/javascript">
        $(function () {
            $('.gallery-grid1 a').Chocolat();
        });
    </script>
    <!-- //gallery -->
    <!-- Smooth-Scrolling-JavaScript -->
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script src="js/amazeui.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll, .navbar li a, .footer li a").click(function (event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //Smooth-Scrolling-JavaScript -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear'
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <script>
        function goHerf(url,target)
        {
            if(target)
            {
                window.open(url);
            } else {
                location.href = url;
            }
        }
    </script>


    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>

</html>