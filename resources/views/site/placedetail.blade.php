<?//dd($menudata);?>
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
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>
    

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
	
        <!-- BREADCRUMB -->
        <section>
            <div class="container">
                <div class="breadcrumb">
                    <ul>
                        <li><a>"<?=$data[0]->type;?>"</a></li>
                     
                    </ul>
                </div>
            </div>
        </section>
        <!-- BREADCRUMB -->

        
        <section class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <h2></h2>
                                <div class="hotel-star">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-address">
                                <span>"<?=$data[0]->adress;?>"</span>
                            </div>
                            

                            <div class="product-descriptions">
                                <p><?=$data[0]->description;?></p>
                            </div>
                            
                            <div class="property-highlights">
                                <h3><?=$data[0]->work_time;?></h3>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="product-detail__gallery">
                            <div class="product-slider-wrapper">
                                <div class="product-slider">
                                    <div class="item">
                                        <img src="<?='/public/img/'.$data[0]->img_path;?>" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/2.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/3.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/4.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/5.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/6.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/7.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/8.jpg" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="images/img/9.jpg" alt="">
                                    </div>
                                </div>
                                <div class="product-slider-thumb-row">
                                    <div class="product-slider-thumb">
                                        <div class="item">
                                            <img src="images/img/demo-thumb-1.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-2.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-3.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-4.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-5.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-6.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-7.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-8.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img src="images/img/demo-thumb-9.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-map">
                                <div data-latlong="<?=$data[0]->lat;?>, <?=$data[0]->lng;?>"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <div class="product-tabs tabs">
                            
                            <div class="product-tabs__content">
                                <div id="tabs-1">
                                
                                    <table class="room-type-table">
                                        <thead>
                                            <tr>
                                                <th class="room-type">Название</th>
                                                <th class="room-people">Тип блюда</th>
                                                <th class="room-condition">Фото</th>
                                                <th class="room-condition">Цена</th>
                                            </tr>
                                        </thead>
                                        <tbody>
					<?for($i = 0;$i<count($menudata);$i++){
						
					?>	
						<?//=$menudata[$i]->id;?><br>
                                            <tr>
                                                <td class="room-type">
                                                    <div class="room-thumb">
                                                        
                                                    </div>
                                                    <div class="room-title">
                                                        <h4><?=$menudata[$i]->name;?></h4>
                                                    </div>
                                                    <div class="room-descriptions">
                                                        <p><?=$menudata[$i]->description;?></p>
                                                    </div>
                                                  
                                                </td>
                                               
                                                <td class="room-condition">
                                                    <ul class="list-condition">
                                                        <li><?=$menudata[$i]->typeoffood;?></li>
                                                    </ul>
                                                </td>
                                                <td class="room-price">
                                                    <div class="price">
                                                        <img src="<?="/public/img/".$menudata[$i]->imgpath;?>" alt="" width="100" height="100">
                                                    </div>
                                                </td>
						<td class="room-price">
                                                    <div class="price">
                                                        <span class="amount"><?=$menudata[$i]->price;?></span>
                                                    </div>
                                                </td>
                                            </tr>
					<?	
					}	?>
                                        </tbody>
                                    </table>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="detail-sidebar">
                            <div class="call-to-book">
                                <i class="awe-icon awe-icon-phone"></i>
                                <em>Наш номер телефона</em>
                                <span><?=$data[0]->telephone;?></span>
                            </div>
                            
                              
                                
                            
                           
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
    <script type="text/javascript" src="{{asset('site/js/lib/jquery-1.11.2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/jquery.parallax-1.1.3.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/jquery.owl.carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/theia-sticky-sidebar.js')}}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/md-map-extend.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/lib/jquery.magnific-popup.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('site/js/lib/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('site/js/scripts.js')}}"></script>
</body>
</html>
