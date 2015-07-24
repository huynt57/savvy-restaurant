
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from themeforces.com/demo/food-up-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jul 2015 07:07:58 GMT -->
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FoodUp — Multi-Purpose Food &amp; Restaurant Theme</title>
        <meta name="description" content="FoodUp – Multi Page Oriented Template with pretty clean and simple design perfect for and Food &amp; Restaurant Business. Created, specially for food services. Has many functional blocks, shortcodes, including modal windows, dropdowns and many other cool items.">
        <meta name="keywords" content="bar, coffee shop, food, multi-purpose, bootstrap, html, responsive, business, restaurant">
        <meta name="author" content="JLP Media">

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

        <!-- Bootstrap 
        ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jasny-bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-slider.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome-4.3.0/css/font-awesome.css')}}">

        <!-- Plugins CSS
    ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}"><!-- animation -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bgndGallery.css')}}"><!-- bgndGallery -->
        <link rel="stylesheet" type="text/css" href="{{ asset('js/fancybox/jquery.fancybox8cbb.css')}}?v=2.1.5"><!-- Fancybox  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/calendar/fullcalendar.min.css')}}"><!-- Calendar -->
        <link rel="stylesheet" type="text/css" href="{{ asset('js/bxslider/jquery.bxslider.css')}}"><!-- BxSlider -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.rs.selectbox.css')}}"><!-- Selectbox -->	
        <link rel="stylesheet" type="text/css" href="{{ asset('js/owlcarousel/owl.carousel.css')}}"><!-- owl carousel -->

        <!-- Custom Css 
        ================================================== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/rs-wp-v1.2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}">

        <!-- Fonts 
        ================================================== -->
        <link href='{{ asset('fonts/stylesheet.css')}}' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script type="text/javascript" src="{{ asset('js/jquery.1.11.1.js')}}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') }}"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->
        <style>
            .remove-item {
                display: none;
            }
            
        </style>

    </head>
    <body>

        <!-- Preloader -->
        <div id="pageLoading">
            <div class="bouncing">
                <em class="icon-food"></em>
            </div>
        </div>

        <!--- Wrapper -->
        <div id="wrapper" class="home-page" ng-app="" ng-controller="CartController">
            <header id="header">
                <div class="container">
                    <div class="rst-table">
                        <div class="rst-table-row">
                            <a href="<?php echo url('main') ?>" class="rst-logo rst-table-cell"><img src="{{ asset('img/logo-home.png')}}" alt="" /></a>
                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="rst-nav-menu collapse navbar-collapse bs-navbar-collapse rst-table-cell">
                                <form class="rst-search-mobie" action="http://themeforces.com/">
                                    <button class="rst-submit"><i class="fa fa-search"></i></button>
                                    <input type="text" value="" />
                                </form>
                                <ul class="rst-main-menu">
                                    <li class="current-menu-item"><a href="<?php echo url('main') ?>">Home</a></li>                                   
                                    <li><a href="<?php echo url('menu') ?>">Menu</a></li>
                                    <li><a href="<?php echo url('reservation') ?>">Reservation</a></li>
                                    <li><a href="<?php echo url('contact') ?>">Contact</a></li>
                                    <li><a href="<?php echo url('about') ?>">About Us</a></li>
                                </ul>
                                <a href="#" class="rst-search-bottom"><i class="fa fa-search"></i></a>
                            </div>
                            
                            <div class="rst-account rst-table-cell">
                                <?php $cart = Session::all(); $total = 0;?>
                                <div class="rst-cart">
                                    <a href="#" class="rst-cart-icon"><span><?php if(count($cart) >= 3) echo count($cart) - 3 ?></span></a>
                                    <div class="rst-form-login rst-cart-info">
                                        <div class="rst-list-product">
                                            <?php if(count($cart) > 3):?>
                                            <?php foreach ($cart as $key => $value): ?>
                                                <?php if ($key != '_token' && $key != '_previous' && $key != 'flash'): ?>
                                                    <div class="rst-product-item">
                                                        <?php $item = DB::table('dish')->where('dish_id', $key)->first(); ?>
                                                        <a href="#"><?php echo $item->dish_name  ?><span class="count"><?php if (!is_array($value)) {echo $value;} ?></span> <span class="price">$<?php {echo $value*$item->dish_price;}?></span></a>
                                                    </div>
                                                <?php $total+=$value*$item->dish_price?>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                            <?php endif;?>
                                        </div>
                                        <div class="rst-checkout">
                                            <a href="<?php echo url('checkout') ?>" class="btn btn-success btn-sm">Check out</a>
                                            <span class="price">$<?php echo $total?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                          
                        </div>
                    </div><!-- End Top Header -->
                    <div class="rst-search rst-table">
                        <div class="rst-table-row">
                            <div class="rst-table-cell">
                                <form action="<?php echo url('search') ?>" method="GET">
                                    <input type="text" placeholder="type and hit enter" value="" name="query"/>
                                </form>
                                <a href="#" class="rst-hide-form"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                    </div><!-- End Top Header -->
                </div>
            </header>	
            @yield('content')
            <!--- Footer -->
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="rst-table">
                            <div class="rst-table-row">
                                <div class="rst-copyright rst-table-cell">
                                    <a href="#" class="rst-logo-footer"><img src="img/logo-footer.png" alt="" /></a>&copy; 2014 FoodUp. All right reserved.
                                </div>
                                <div class="rst-menu-footer rst-table-cell">
                                    <ul>
                                        <li class="current-menu-item"><a href="<?php echo url('main') ?>">Home</a></li>                                   
                                        <li><a href="<?php echo url('menu') ?>">Menu</a></li>
                                        <li><a href="<?php echo url('reservation') ?>">Reservation</a></li>
                                        <li><a href="<?php echo url('contact') ?>">Contact</a></li>
                                        <li><a href="<?php echo url('about') ?>">About Us</a></li>
                                    </ul>
                                </div>
                                <div class="rst-note rst-table-cell">
                                    <p>Thanks for watching. Go to start.</p>
                                </div>
                            </div>
                        </div>
                        <a class="rst-backtop" href="#"><i class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </footer>
        </div><!--- End Wrapper -->

        <script type="text/javascript">

            function CartController($scope, $http) {
                $scope.addCart = function(dish_id) {
                    $http({
                        method: 'POST',
                        url: 'addCart',
                        data: $.param({dish_id: dish_id}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                    }).success(function(response) {

                    }).error(function(response) {

                    });
                };
                
                $scope.removeItemCart = function(dish_id) {
                    //$scope.class = "remove-item";
                    $http({
                        method: 'POST',
                        url: 'removeItemCart',
                        data: $.param({dish_id: dish_id}),
                        headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'},
                    }).success(function(response) {
                        
                    }).error(function(response) {

                    });
                };
                               
            }
                function removeItem()
                {
                 // var attr = $(this).attr('test');
                //  alert(attr);
                   $(this).parent().parent().parent().remove();
                   
                }</script>


        <!-- Bootstrap Js Compiled Plugins -->
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>

        <!-- Backstretch Plugins -->
        <script type="text/javascript" src="{{ asset('js/jquery.backstretch.js')}}"></script>

        <!-- Form Js -->
        <script type="text/javascript" src="{{ asset('js/jquery.rs.form.js')}}"></script>

        <!-- BxSlider -->
        <script type="text/javascript" src="{{ asset('js/bxslider/jquery.easing.1.3.js')}}"></script>
        <script type="text/javascript" src="{{ asset('js/bxslider/jquery.bxslider.min.js')}}"></script>

        <!-- Fancybox -->
        <script type="text/javascript" src="{{ asset('js/fancybox/jquery.fancybox8cbb.js?v=2.1.5')}}"></script>

        <!-- Selectbox Js -->
        <script type="text/javascript" src="{{ asset('js/jquery.rs.selectbox.js')}}"></script>

        <!-- Google Map -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;libraries=places"></script>

        <!-- WoW Plugins -->
        <script src="{{ asset('js/wow.min.js')}}"></script>

        <script type='text/javascript' src='{{ asset('js/woocommerce.js')}}'></script>
        <script type='text/javascript'>
                    /* <![CDATA[ */
                    var wc_single_product_params = {"i18n_required_rating_text": "Please select a rating", "review_rating_required": "yes"};
            var wc_single_product_params = {"i18n_required_rating_text": "Please select a rating", "review_rating_required": "yes"};
            /* ]]> */
        </script>
        <script type='text/javascript' src='{{ asset('js/single-product.min.js')}}'></script>

        <script type='text/javascript' src="{{ asset('js/bootstrap-slider.js')}}"></script>

        <script type='text/javascript' src="{{ asset('js/owlcarousel/owl.carousel.min.js')}}"></script>

        <script src='{{ asset('js/calendar/moment.min.js')}}'></script>
        <script src='{{ asset('js/calendar/fullcalendar.min.js')}}'></script>

        <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>



    </body>


</html>