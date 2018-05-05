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
    <title>Home</title>

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
        /*.carousel .item {*/
            /*background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;*/
            /*background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;*/
            /*background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;*/
            /*background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;*/
            /*background-size: cover;*/
        /*}*/

        /*.carousel .item.item2 {*/
            /*background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;*/
            /*background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;*/
            /*background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;*/
            /*background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner2.jpg) no-repeat;*/
            /*background-size: cover;*/
        /*}*/

        /*.carousel .item.item3 {*/
            /*background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;*/
            /*background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;*/
            /*background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;*/
            /*background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner3.jpg) no-repeat;*/
            /*background-size: cover;*/
        /*}*/

        /*.carousel .item.item4 {*/
            /*background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;*/
            /*background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;*/
            /*background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;*/
            /*background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner4.jpg) no-repeat;*/
            /*background-size: cover;*/
        /*}*/

        /*.carousel .item.item5 {*/
            /*background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner5.jpg) no-repeat;*/
            /*background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner5.jpg) no-repeat;*/
            /*background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner5.jpg) no-repeat;*/
            /*background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner5.jpg) no-repeat;*/
            /*background-size: cover;*/
        /*}*/


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

                    <h1> <a class="navbar-brand" href="<?php echo $infoArray[7]->url;?>"  <?php echo $infoArray[7]->target?'target="_blank"':'' ?> ><img src="<?php echo $infoArray[7]->cover_image;?>" style="width: 210px;height: 65px;"/></a></h1>
                </div>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="nav_right_top_agile_w3ls">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a class="scroll" href="#about">About</a></li>
                        <li><a href="#services" class="scroll">Services</a></li>


                        <li><a class="scroll" href="#contact">Contact</a></li>

                    </ul>
                </div>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="banner_top">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
              foreach ($bannerList as $key=>$val)
              {
                  echo '<li data-target="#myCarousel" data-slide-to="'.$key.'" class="'.($key == 0?'active':'').'"></li>';
              }
            ?>
<!--            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="1" class=""></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="2" class=""></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="3" class=""></li>-->
<!--            <li data-target="#myCarousel" data-slide-to="4" class=""></li>-->
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php
                foreach ($bannerList as $key=>$val)
                {
                    echo ' <div onclick="goHerf(\''.$val->url.'\','.$val->target.')" class="item '.($key == 0?'active':('item' . ($key + 1))).'">
                <div class="container">
                    <div class="carousel-caption">
                      

                    </div>
                </div>
            </div>';
                }
            ?>
<!--            <div class="item active">-->
<!--                <div class="container">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h3>Photo Gallery</h3>-->
<!--                        <p>Professional Photographer</p>-->
<!---->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item item2">-->
<!--                <div class="container">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h3>Landscape Photography</h3>-->
<!--                        <p>Your image is our focus</p>-->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item item3">-->
<!--                <div class="container">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h3>Wedding Photography</h3>-->
<!--                        <p>Professional Photographer</p>-->
<!---->
<!---->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item item4">-->
<!--                <div class="container">-->
<!--                    <div class="carousel-caption">-->
<!---->
<!--                        <h3>Nature Photography</h3>-->
<!--                        <p>Your image is our focus</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item item5">-->
<!--                <div class="container">-->
<!--                    <div class="carousel-caption">-->
<!--                        <h3>Landscape Photography</h3>-->
<!--                        <p>Professional Photographers</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="fa fa-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="fa fa-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- The Modal -->
    </div>
</div>
<!--//banner -->
<!--/ab-->
<div class="banner_bottom" id="about" style="padding-bottom: 0;">
    <div class="container">
        <h3 class="tittle_w3ls">About Us</h3>
        <div class="inner_sec_info_agile_w3_info">
            <div class="help_full">
                <ul class="rslides" id="slider4">
                    <?php
                        foreach($bannerList1 as $key=>$val)
                        {
                            echo ' <li onclick="goHerf(\''.$val->url.'\','.$val->target.')">
                        <div class="respon_info_img">
                            <img src="'.$val->cover_image.'" class="img-responsive" alt="PhotoCall">
                        </div>
                        <div class="banner_bottom_left">
                            <h4>'.$val->title.'</h4>

                            <p>'.$val->content.'</p>
                        </div>
                    </li>';
                        }
                    ?>
<!--                    <li>-->
<!--                        <div class="respon_info_img">-->
<!--                            <img src="images/banner3.jpg" class="img-responsive" alt="PhotoCall">-->
<!--                        </div>-->
<!--                        <div class="banner_bottom_left">-->
<!--                            <h4>Wedding Photography</h4>-->
<!---->
<!--                            <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque-->
<!--                                convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar-->
<!--                                neque pharetra ac.</p>-->
<!--                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget-->
<!--                                pulvinar neque pharetra ac.</p>-->
<!---->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="respon_info_img">-->
<!--                            <img src="images/banner2.jpg" class="img-responsive" alt="PhotoCall">-->
<!--                        </div>-->
<!--                        <div class="banner_bottom_left">-->
<!--                            <h4>Personal Photography</h4>-->
<!---->
<!--                            <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque-->
<!--                                convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar-->
<!--                                neque pharetra ac.</p>-->
<!--                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget-->
<!--                                pulvinar neque pharetra ac.</p>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="respon_info_img">-->
<!--                            <img src="images/banner1.jpg" class="img-responsive" alt="PhotoCall">-->
<!--                        </div>-->
<!--                        <div class="banner_bottom_left">-->
<!--                            <h4>Film Photography</h4>-->
<!--                            <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque-->
<!--                                convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar-->
<!--                                neque pharetra ac.</p>-->
<!--                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget-->
<!--                                pulvinar neque pharetra ac.</p>-->
<!---->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="respon_info_img">-->
<!--                            <img src="images/banner4.jpg" class="img-responsive" alt="PhotoCall">-->
<!--                        </div>-->
<!--                        <div class="banner_bottom_left">-->
<!--                            <h4>Nature Photography</h4>-->
<!--                            <p>Maecenas quis neque libero. Class aptent taciti.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Pellentesque-->
<!--                                convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar-->
<!--                                neque pharetra ac.</p>-->
<!--                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget-->
<!--                                pulvinar neque pharetra ac.</p>-->
<!---->
<!--                        </div>-->
<!--                    </li>-->
                </ul>




            </div>
        </div>
    </div>
    <!--//ab-->
    <!--/what-->
    <div class="works" id="services">
        <div class="container">
            <h3 class="tittle_w3ls cen">Why Choose Us</h3>
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
                        <li>Contact Info</li>
                        <li>Send Message</li>
                        <li>View Map</li>
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
                                    <h6>Please fill this form to contact with us.</h6>
                                    <form action="#" method="post">
                                        <div class="contact_left_grid">
                                            <input type="text" name="Name" placeholder="Name" required="">
                                            <input type="email" name="Email" placeholder="Email" required="">

                                            <input type="text" name="Telephone" placeholder="Telephone" required="">
                                            <input type="text" name="Subject" placeholder="Subject" required="">
                                            <textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                            <button id="send_btn" type="button" style="text-align: center;">Submit</button>
                                            <input type="reset" value="Clear">
                                            <div class="clearfix"> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--//tab_two-->
                        <div class="tab3">

                            <div class="tab-info" style="width: 100%;height: 400px;" id="allmap">


                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <!--//tabs-->
            <div class="clearfix"> </div>
            <p class="copy-right">Copyright &copy; 2018.中山市远信商贸有限公司 All rights reserved.<a target="_blank" href="http://www.miitbeian.gov.cn/">粤ICP备17028412号-1</a></p>
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
        map.centerAndZoom(new BMap.Point(104.979002, 29.192906),6);  // 初始化地图,设置中心点坐标和地图级别
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