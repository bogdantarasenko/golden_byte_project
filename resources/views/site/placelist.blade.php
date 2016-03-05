
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
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/bootstrap.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/font-awesome.min.css')}}" >
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/awe-booking-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/lib/jquery-ui.css')}}">
    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/revslider-demo/css/settings.css')}}">


    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('site/css/demo.css')}}">
    
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="{{asset('site/css/colors/blue.css')}}">
    
    
</head>


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
        
        
        <!--"<?//=url('/place',[$user_data[$i]->id],$secure = null);?>"//PLACE URL--> 
        
        
        <section class="travelling-block-section-demo awe-parallax">
            <div class="container">
                <div class="travelling-block text-center">
                    <div class="title">
                        <h2>Я ищу ...</h2>
                    </div>
                    <div class="travelling-tabs tabs">
                       <!-- <ul>
                            <li><a href="#tabs-1">Purpose</a></li>
                            <li><a href="#tabs-2">Region</a></li>
                            <li><a href="#tabs-3">Price</a></li>
                            <li><a href="#tabs-4">Time</a></li>
                            <li><a href="#tabs-5">Advance Filter</a></li>
                        </ul>-->
                        <div class="travelling-tabs__content">
                            <div id="tabs-1">
                                <div class="purpose-slider">
                                    <div class="item">
                                        <a href="<?=url('/placelist/Суши бар');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/bhvdi5o1cjvn.png"></i>
                                            <span>Суши</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="<?=url('/placelist/Кофейня');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/9g7wyqe7zokv.png"></i>
                                            <span>Кофе</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="<?=url('/placelist/Фаст фуд');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/6py3uq7i87q7.png"></i>
                                            <span>Фаст-фуд</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="<?=url('/placelist/Ночной клуб');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/f5csj2giptg9.png"></i>
                                            <span>Ночной клуб</span>
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="<?=url('/placelist/Развлечения');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/e12thv32r2e1.png"></i>
                                            <span>Развлечения</span>
                                        </a>
                                    </div>
                                   <div class="item">
                                        <a href="<?=url('/placelist/Ресторан');?>">
                                            <i class="awe-icon"><img src="http://firepic.org/images/2016-01/29/spdrzoqk9p50.png" width="32" height="32"></i>
                                            <span>Ресторан</span>
                                        </a>
                                    </div>
 
                                </div>
                            </div>

                          

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="your-destinations-section-demo">
            <div class="container">
                <div class="your-destinations">
                    <div class="your-destionations__top">
                        <div class="title">
                            <h2>Заведения</h2>
                        </div>
                        
                    </div>

                    <div class="destination-list__content">
                        <!-- ITEM -->
			<?for($i=0;$i<count($data);$i++){?>
                        <div class="destinations-item">
                            <div class="item-media">
                                <div class="image-cover">
                                    <img src="<?='/public/img/'.$data[$i]->img_path;?>" alt="">
                                </div>
                                <div class="item-cat">
                                    <ul>
                                        <li><a href="#"><?=$data[$i]->type;?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-body">
                                <div class="item-title">
                                    <h2>
                                        <a href="<?=url('/place',[$data[$i]->id],$secure = null);?>"><?=$data[$i]->name;?></a>
                                    </h2>
                                </div>
                                <div class="item-description">
                                    <p><?=$data[$i]->adress;?></p>
                                </div>
				
                            </div>
                            <div class="item-price-more">
                                <div class="price">
                                    
                                    <span class="amount"><?=$data[$i]->work_time;?></span>
                                </div>
                                <a href="<?=url('/place',[$data[$i]->id],$secure = null);?>" class="awe-btn">подробнее</a>
                            </div>
                        </div>
<?}?>
                        <!-- END / ITEM -->
                        
                    </div>


                    <!-- PAGINATION -->
                    <div class="page__pagination text-center">
                        <span class="pagination-prev"><i class="fa fa-caret-left"></i></span>
                        <span class="current">1</span>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#" class="pagination-next"><i class="fa fa-caret-right"></i></a>
                    </div>
                    <!-- END / PAGINATION -->
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



    </div>
    
    <script type="text/javascript" src="{{asset('site/js/lib/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/jquery.owl.carousel.js')}}"></script>
   
    <script type='text/javascript' src="{{asset('site/js/lib/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/scripts.js')}}"></script>
</body>
</html>
