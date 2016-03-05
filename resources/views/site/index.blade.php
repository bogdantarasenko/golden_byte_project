<?

//dd($user_data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>4places</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="site/css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="site/css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="site/css/lib/awe-booking-font.css">
    <link rel="stylesheet" type="text/css" href="site/css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="site/css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="site/css/lib/jquery-ui.css">
    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="site/revslider-demo/css/settings.css">


    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="site/css/style.css">
    <link rel="stylesheet" type="text/css" href="site/css/demo.css">
    
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="site/css/colors/blue.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


    <!-- PAGE WRAP -->
    <div id="page-wrap">
        <!-- PRELOADER -->
        <div class="preloader"></div>
        <!-- END / PRELOADER -->

        <!-- HEADER PAGE -->
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                    <!-- LOGO -->
                    <div class="logo">
                        <a href="<?=url('/');?>"><img src="http://6.firepic.org/6/images/2016-01/29/gw3v97vxyosy.png" alt=""></a>
                    </div>
                    <!-- END / LOGO -->
                    
                    <!-- NAVIGATION -->
                    <nav class="navigation awe-navigation" data-responsive="1200">
                        <ul class="menu-list">
                            <li class="menu-item-has-children current-menu-parent">
                                <a href="<?=url('/');?>">Главная</a>
                              
                            </li>
                            
                            <li class="menu-item-has-children">
                                <a href="<?=url('/placelist');?>">список заведений</a>
                                
                            </li>
                          
                        </ul>
                    </nav>
                    <!-- END / NAVIGATION -->
                    
                    <!-- SEARCH BOX -->
                    <div class="search-box">
                        <span class="searchtoggle"><i class="awe-icon awe-icon-search"></i></span>
                        <form class="form-search">
                            <div class="form-item">
                                <input type="text" value="Search &amp; hit enter">
                            </div>
                        </form>
                    </div>
                    <!-- END / SEARCH BOX -->


                    <!-- TOGGLE MENU RESPONSIVE -->
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                    <!-- END / TOGGLE MENU RESPONSIVE -->

                </div>
            </div>
        </header>
        <!-- END / HEADER PAGE -->
        
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                        <img src="<?='/public/img/'.$user_data[0]->img_path;?>" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          <?//=$user_data[9]->type;?>
                        </div>

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000"><?=$user_data[0]->name;?></div>
                        
                        <a href="<?=url('/place',[$user_data[0]->id],$secure = null);?>" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Подробнее</a>
                    </li> 

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 2">
                        <img src="<?='/public/img/'.$user_data[1]->img_path;?>" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption  sft fadeout slider-caption-sub slider-caption-sub-2" data-x="center" data-y="220" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          <?//=$user_data[9]->type;?>
                        </div>

                        <div class="tp-caption sft fadeout slider-caption slider-caption-2" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="2000">
                           <?=$user_data[1]->name;?>
                        </div>
                        
                        <a href="<?=url('/place',[$user_data[1]->id],$secure = null);?>" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Подробнее</a>
                    </li>

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                        <img src="<?='/public/img/'.$user_data[2]->img_path;?>" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                          <?=$user_data[2]->name;?>
                        </div>
                        
                        <a href="<?=url('/place',[$user_data[2]->id],$secure = null);?>" class="tp-caption sft fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="370" data-easing="easeOutBack" data-speed="700" data-start="2200">Подробнее</a>
                    </li> 

                </ul>
            </div>
        </section>
        <!-- END / HERO SECTION -->


        <!-- SEARCH TABS -->
        <section>
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>

			<li>
                            <a href="#awe-search-tabs-4">
                                <!-- <i class="awe-icon awe-icon-train"></i>-->
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/bhvdi5o1cjvn.png"></i>
                            </a>
                        </li>			

                        <li>
                            <a href="#awe-search-tabs-1">
                                <!--<i class="awe-icon awe-icon-briefcase"></i>-->
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/9g7wyqe7zokv.png"></i>
                            </a>
                        </li>
                       
                        <li>
                            <a href="#awe-search-tabs-5">
                                <!-- <i class="awe-icon awe-icon-car"></i>-->
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/6py3uq7i87q7.png"></i>
                            </a>
                        </li>

<li>
                            <a href="#awe-search-tabs-3">
                                <!-- <i class="awe-icon awe-icon-plane"></i>-->
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/f5csj2giptg9.png"></i>
                            </a>
                        </li>

			<li>
                            <a href="#awe-search-tabs-6">
                               
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/spdrzoqk9p50.png" width="32" height="32"></i>
                            </a>
                        </li>

 			<li>
                            <a href="#awe-search-tabs-2">
                                <!-- <i class="awe-icon awe-icon-hotel"></i>-->
				<i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/e12thv32r2e1.png"></i>
                        </li>
                        
                    </ul>
             
                </div>
            </div>
        </section>
        <!-- END / SEARCH TABS -->

        <!-- MASONRY -->
        <section class="masonry-section-demo">
            <div class="container">
                <div class="destination-grid-content">
                    <div class="section-title">
                        <h3>Более <a href="destinations-grid.html"><?=count($user_data);?></a> заведений вас ждут</h3>
                    </div>
                    <div class="row">
                        <div class="awe-masonry">
                            <!-- GALLERY ITEM -->
                        
                            <!-- END / GALLERY ITEM -->
                            
                            <?for($i=0;$i<count($user_data);$i++){?>
                                <div class="awe-masonry__item">
                                <a href="<?=url('/place',[$user_data[$i]->id],$secure = null);?>">
                                    <div class="image-wrap image-cover">
                                        <img src="<?='/public/img/'.$user_data[$i]->img_path;?>" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#"><?=$user_data[$i]->name;?></a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#"><?=$user_data[$i]->adress;?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    <span class="count"><?=$user_data[$i]->adress;?></span>
                                    время работы: <?=$user_data[$i]->work_time;?>
                                </div>
                            </div>
                            <?}?>
                            
                        </div>
                    </div>
                    <div class="more-destination">
                        <a href="<?=url('/placelist');?>">Показать все заведения</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / MASONRY -->


        <section class="sale-flights-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sale-flights-tabs tabs">
                            <ul>
                                <li><a href="#sale-flights-tabs-1">Заведение в которое мы советуем вам пойти</a></li>
                                <!--<li><a href="#sale-flights-tabs-2">Recent items</a></li>-->
                            </ul>
                            <div class="sale-flights-tabs__content tabs__content">
                                <div id="sale-flights-tabs-1">
                                    
                                    <!-- ITEM -->
                                <div class="trip-item">
                                    <div class="item-media">
                                        <div class="image-cover">
                                            <img src="<?='/public/img/'.$user_data[0]->img_path;?>" alt="">
                                        </div>
                                        <div class="trip-icon">
                                            <img src="<?='/public/img/'.$user_data[0]->img_path;?>" alt="">
                                        </div>
                                    </div>
                                    <div class="item-body">
                                        <div class="item-title">
                                            <h2>
                                                <a href="#"><?=$user_data[0]->name;?></a>
                                            </h2>
                                        </div>
                                        <div class="item-list">
                                            <ul>
                                                <li>4 Attractions</li>
                                                <li>2 days, 1 night</li>
                                            </ul>
                                        </div>
                                        <div class="item-footer">
                                            <div class="item-rate">
                                                <span>7.5 Good</span>
                                            </div>
                                            <div class="item-icon">
                                                <i class="awe-icon awe-icon-gym"></i>
                                                <i class="awe-icon awe-icon-car"></i>
                                                <i class="awe-icon awe-icon-food"></i>
                                                <i class="awe-icon awe-icon-level"></i>
                                                <i class="awe-icon awe-icon-wifi"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-price-more">
                                       <!-- <div class="price">
                                            Adult ticket
                                            <ins>
                                                <span class="amount">$200</span>
                                            </ins>
                                            <del>
                                                <span class="amount">$200</span>
                                            </del>
                                    
                                        </div>-->
                                        <a href="#" class="awe-btn">Подробнее</a>
                                    </div>
                                </div>
                                <!-- END / ITEM -->
                                <!-- ITEM -->
                           
                                <!-- END / ITEM -->
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="awe-services">
                            <h2>Почему вашим друзьям нравиться наш сервис?</h2>
                            <ul class="awe-services__list">
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Все заведения вашего города
                                        <!--<span>No booking fees . No fake</span>-->
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Текущие цены в заведениях 
                                        <!--<span>We verify them in person</span>-->
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Будьте в курсе вех событий
                                        <!--<span>anytime and any where</span>-->
                                    </a>
                                </li>
                                <!--
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        24/7 global support
                                        <span>anytime and any where</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="awe-icon awe-icon-check"></i>
                                        <i class="awe-icon awe-icon-arrow-right"></i>
                                        Manage your bookings online
                                        <span>anytime and any where</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="video-wrapper embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/50880604"></iframe>
                            </div>
                            -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER PAGE -->
        <footer id="footer-page">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_contact_info">
                            <div class="widget_background">
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                                <div class="widget_background__half">
                                    <div class="bg"></div>
                                </div>
                            </div>
                           <!-- <div class="logo">
                                <img src="http://6.firepic.org/6/images/2016-01/18/ry5gygewz619.jpg" alt="">
                            </div>-->
                            <div class="widget_content">
                                <p>Запорожье, Украина</p>
                                <p>JHL Team</p>
                                <!--<a href="#">contact@gofar.com</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-2">
                        <div class="widget widget_about_us">
                            <h3>О нас</h3>
                            <div class="widget_content">
                                <p>Наш сервис поможет вам быть в курсе всех событий которые происходят в развлекательных заведениях вашего города а, также знать обо всех ценах в их меню</p>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    
                    <div class="col-md-2">
                        <div class="widget widget_categories">
                            <h3>Categiries</h3>
                            <ul>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Regions</a></li>
                                <li><a href="#">Cities</a></li>
                                <li><a href="#">Districts</a></li>
                                <li><a href="#">Countries</a></li>
                                <li><a href="#">Airports</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Places of interest</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    
                    <!-- END / WIDGET -->

                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="widget widget_follow_us">
                            <div class="widget_content">
                                <!--<p>For Special booking request, please call</p>
                                <span class="phone">099-099-000</span>-->
                                <div class="awe-social">
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END / WIDGET -->
                </div>
                <div class="copyright">
                    <p>©2016 JHL Team</p>
                </div>
            </div>
        </footer>
        <!-- END / FOOTER PAGE -->

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="site/js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="site/js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="site/js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="site/js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="site/js/lib/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="site/js/lib/jquery.magnific-popup.min.js"></script>
    <script type='text/javascript' src="site/js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="site/js/scripts.js"></script>

    <!-- REVOLUTION DEMO -->
    <script type="text/javascript" src="site/revslider-demo/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="site/revslider-demo/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript">
        if($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay:"none",
                delay:10000,
                startwidth:1600,
                startheight:650,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                                        
                simplifyAll:"off",

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",
                nextSlideOnWindowFocus:"off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,
                
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                                        
                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner2",
                                        
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",
                
                
                
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        }
    </script>

</body>
</html>
