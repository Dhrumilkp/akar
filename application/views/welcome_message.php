<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aakar Publications - Sculpturing life</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="theme/css/plugins.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="theme/css/main.css" />
	<link rel="shortcut icon" type="image/x-icon" href="theme/image/favicon.png">
	<meta name="description" content="Aakar Publications - Sculpturing life">
</head>

<body>
    <div class="site-wrapper" id="top">
        <div class="site-header d-none d-lg-block">
            <div class="header-middle pt--10 pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ">
                            <a href="index.html" class="site-brand">
                                <img src="theme/image/logo.jpg" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3">
                            <div class="header-phone ">
                                <div class="icon">
                                    <i class="fas fa-headphones-alt"></i>
                                </div>
                                <div class="text">
                                    <p>Reach us on</p>
                                    <p class="font-weight-bold number" class="contact_number_pub_nav">+(079)-26860726</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="main-navigation flex-lg-right">
                                <ul class="main-menu menu-right ">
                                    <li class="menu-item has-children">
                                        <a href="#">Home</a>
                                    </li>
                                    <!-- Shop -->
                                    <li class="menu-item has-children mega-menu">
                                        <a href="#">About Publication</a>
                                    </li>
                                    <!-- Pages -->
                                    <li class="menu-item has-children">
                                        <a href="#">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom pb--10">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <nav class="category-nav">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <?php 
                                            if(!empty($category_data))
                                            {
                                                foreach($category_data as $row)
                                                {
                                                    ?>
                                                        <li class="cat-item">
                                                            <a href="<?php echo base_url(); ?>shop/cat/<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></a>
                                                        </li>   
                                                    <?
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-mobile-menu">
            <header class="mobile-header d-block d-lg-none pt--10 pb-md--10">
                <div class="container">
                    <div class="row align-items-sm-end align-items-center">
                        <div class="col-md-4 col-7">
                            <a href="index.html" class="site-brand">
                                <img src="theme/image/logo.jpg" alt="" style="max-width: 70%;">
                            </a>
                        </div>
                        <div class="col-md-5 order-3 order-md-2">
                            <nav class="category-nav   ">
                                <div>
                                    <a href="javascript:void(0)" class="category-trigger"><i
                                            class="fa fa-bars"></i>Browse
                                        categories</a>
                                    <ul class="category-menu">
                                        <?php 
                                            if(!empty($category_data))
                                            {
                                                foreach($category_data as $row)
                                                {
                                                    ?>
                                                        <li class="cat-item">
                                                            <a href="<?php echo base_url(); ?>shop/cat/<?php echo $row['id']; ?>"><?php echo $row['cat_name']; ?></a>
                                                        </li>   
                                                    <?
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="col-md-3 col-5  order-md-3 text-right">
                            <div class="mobile-header-btns header-top-widget">
                                <ul class="header-links">
                                    <li class="sin-link">
                                        <a href="javascript:" class="link-icon hamburgur-icon off-canvas-btn"><i
                                                class="ion-navicon"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!--Off Canvas Navigation Start-->
            <aside class="off-canvas-wrapper">
                <div class="btn-close-off-canvas">
                    <i class="ion-android-close"></i>
                </div>
                <div class="off-canvas-inner">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav class="off-canvas-nav">
                            <ul class="mobile-menu main-mobile-menu">
                                <li class="menu-item has-children">
                                    <a href="#">Home</a>
                                </li>
                                <!-- Shop -->
                                <li class="menu-item has-children mega-menu">
                                    <a href="#">About Publication</a>
                                </li>
                                <!-- Pages -->
                                <li class="menu-item has-children">
                                    <a href="#">Shop</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                    <div class="off-canvas-bottom">
                        <div class="contact-list mb--10">
                            <a href="#" class="sin-contact"><i class="fas fa-mobile-alt"></i>(12345) 78790220</a>
                            <a href="#" class="sin-contact"><i class="fas fa-envelope"></i>examle@handart.com</a>
                        </div>
                        <div class="off-canvas-social">
                            <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="single-icon"><i class="fas fa-rss"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="single-icon"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
            <!--Off Canvas Navigation End-->
        </div>
        <!--=================================
        Hero Area
        ===================================== -->
        <section class="hero-area hero-slider-1">
            <div class="sb-slick-slider" data-slick-setting='{
                            "autoplay": true,
                            "fade": true,
                            "autoplaySpeed": 3000,
                            "speed": 3000,
                            "slidesToShow": 1,
                            "dots":true
                            }'>
                <div class="single-slide bg-shade-whisper  ">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-right">
                                <img src="theme/image/bg-images/home-slider-2-ai.png" alt="">
                            </div>
                            <div class="row no-gutters ">
                                <div class="col-xl-6 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-left-side">
                                        <h1>H.G. Wells<br>
                                            De Vengeance</h1>
                                        <h2>Cover Up Front Of Books and Leave Summary</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide bg-ghost-white">
                    <div class="container">
                        <div class="home-content text-center text-sm-left position-relative">
                            <div class="hero-partial-image image-left">
                                <img src="theme/image/bg-images/home-slider-1-ai.png" alt="">
                            </div>
                            <div class="row align-items-center justify-content-start justify-content-md-end">
                                <div class="col-lg-6 col-xl-7 col-md-6 col-sm-7">
                                    <div class="home-content-inner content-right-side">
                                        <h1>J.D. Kurtness <br>
                                            De Vengeance</h1>
                                        <h2>Cover Up Front Of Books and Leave Summary</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Features Section
        ===================================== -->
        <section class="mb--30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div class="text">
                                <h5>Free Shipping Item</h5>
                                <p> Orders over $500</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-redo-alt"></i>
                            </div>
                            <div class="text">
                                <h5>Money Back Guarantee</h5>
                                <p>100% money back</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-piggy-bank"></i>
                            </div>
                            <div class="text">
                                <h5>Cash On Delivery</h5>
                                <p>Lorem ipsum dolor amet</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mt--30">
                        <div class="feature-box h-100">
                            <div class="icon">
                                <i class="fas fa-life-ring"></i>
                            </div>
                            <div class="text">
                                <h5>Help & Support</h5>
                                <p>Call us : + 0123.4567.89</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Home Slider Tab
        ===================================== -->
        <section class="section-padding">
            <h2 class="sr-only">Home Tab Slider Section</h2>
            <div class="container">
                <div class="sb-custom-tab">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane show active" id="shop" role="tabpanel" aria-labelledby="shop-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                            "autoplay": true,
                            "autoplaySpeed": 8000,
                            "slidesToShow": 5,
                            "rows":2,
                            "dots":true
                        }' data-slick-responsive='[
                            {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                            {"breakpoint":768, "settings": {"slidesToShow": 2} },
                            {"breakpoint":480, "settings": {"slidesToShow": 1} },
                            {"breakpoint":320, "settings": {"slidesToShow": 1} }
                        ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                jpple
                                            </a>
                                            <h3><a href="product-details.html">Rpple iPad with Retina Display
                                                    MD510LL/A</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="product-details.html">Koss KPH7 Lightweight Portable
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-2.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="product-details.html">Beats EP Wired On-Ear Headphone-Black</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2 Wired On-Ear
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-4.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo3 Wireless On-Ear Headphones
                                                    2</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">3 Ways To Have (A) More Appealing
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="product-details.html">In 10 Minutes, I'll Give You The Truth
                                                    About</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-7.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">5 Ways To Get Through To Your BOOK</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">What Can You Do To Save Your BOOK</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="product-details.html">From Destruction By Social Media?</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">Find Out More About BOOK By Social
                                                    Media?</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-11.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Vpple
                                            </a>
                                            <h3><a href="product-details.html">Read This Controversial BOOK By
                                                    Social Media?</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-12.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="men" role="tabpanel" aria-labelledby="men-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                jpple
                                            </a>
                                                <h3><a href="product-details.html">Bpple iPad with Retina Display
                                                        MD510LL/A</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="product-details.html">Koss KPH7 Lightweight Portable
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-2.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="product-details.html">Beats EP Wired On-Ear
                                                    Headphone-Black</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2 Wired On-Ear
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-4.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo3 Wireless On-Ear
                                                    Headphones 2</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-7.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">3 Ways To Have (A) More Appealing
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-6.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="product-details.html">In 10 Minutes, I'll Give You The
                                                    Truth About</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">5 Ways To Get Through To Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">What Can You Do To Save Your BOOK</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="product-details.html">From Destruction By Social Media?</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">Find Out More About BOOK By Social
                                                    Media?</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Apple
                                            </a>
                                            <h3><a href="product-details.html">Read This Controversial BOOK By
                                                    Social Media?</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="woman" role="tabpanel" aria-labelledby="woman-tab">
                            <div class="product-slider multiple-row  slider-border-multiple-row  sb-slick-slider"
                                data-slick-setting='{
                                        "autoplay": true,
                                        "autoplaySpeed": 8000,
                                        "slidesToShow": 5,
                                        "rows":2,
                                        "dots":true
                                    }' data-slick-responsive='[
                                        {"breakpoint":1200, "settings": {"slidesToShow": 3} },
                                        {"breakpoint":768, "settings": {"slidesToShow": 2} },
                                        {"breakpoint":480, "settings": {"slidesToShow": 1} },
                                        {"breakpoint":320, "settings": {"slidesToShow": 1} }
                                    ]'>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                jpple
                                                </a>
                                                <h3><a href="product-details.html">Zpple fPad with Retina Display
                                                        MD510LL/A</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-1.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Bpple
                                            </a>
                                            <h3><a href="product-details.html">Koss KPH7 Lightweight Portable
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-4.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-3.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Cpple
                                            </a>
                                            <h3><a href="product-details.html">Beats EP Wired On-Ear
                                                    Headphone-Black</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-2.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Dpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo2 Solo 2 Wired On-Ear
                                                    Headphone</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-1.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-5.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Lpple
                                            </a>
                                            <h3><a href="product-details.html">Beats Solo3 Wireless On-Ear
                                                    Headphones 2</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-11.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-4.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">3 Ways To Have (A) More Appealing
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-10.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-7.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Epple
                                            </a>
                                            <h3><a href="product-details.html">In 10 Minutes, I'll Give You The
                                                    Truth About</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-9.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-6.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Fpple
                                            </a>
                                            <h3><a href="product-details.html">5 Ways To Get Through To Your
                                                    BOOK</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-8.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-9.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">What Can You Do To Save Your BOOK</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-5.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-8.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Hpple
                                            </a>
                                            <h3><a href="product-details.html">From Destruction By Social Media?</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-3.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Gpple
                                            </a>
                                            <h3><a href="product-details.html">Find Out More About BOOK By Social
                                                    Media?</a></h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-11.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-10.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-slide">
                                    <div class="product-card">
                                        <div class="product-header">
                                            <a href="#" class="author">
                                                Apple
                                            </a>
                                            <h3><a href="product-details.html">Read This Controversial BOOK By
                                                    Social Media? Out More</a>
                                            </h3>
                                        </div>
                                        <div class="product-card--body">
                                            <div class="card-image">
                                                <img src="theme/image/products/product-12.jpg" alt="">
                                                <div class="hover-contents">
                                                    <a href="product-details.html" class="hover-image">
                                                        <img src="theme/image/products/product-11.jpg" alt="">
                                                    </a>
                                                    <div class="hover-btns">
                                                        <a href="cart.html" class="single-btn">
                                                            <i class="fas fa-shopping-basket"></i>
                                                        </a>
                                                        <a href="wishlist.html" class="single-btn">
                                                            <i class="fas fa-heart"></i>
                                                        </a>
                                                        <a href="compare.html" class="single-btn">
                                                            <i class="fas fa-random"></i>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#quickModal"
                                                            class="single-btn">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price-block">
                                                <span class="price">£51.20</span>
                                                <del class="price-old">£51.20</del>
                                                <span class="price-discount">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=================================
        Footer
        ===================================== -->
        <!-- Modal -->
        <div class="modal fade modal-quick-view" id="quickModal" tabindex="-1" role="dialog"
            aria-labelledby="quickModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close modal-close-btn ml-auto" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="product-details-modal">
                        <div class="row">
                            <div class="col-lg-5">
                                <!-- Product Details Slider Big Image-->
                                <div class="product-details-slider sb-slick-slider arrow-type-two" data-slick-setting='{
              "slidesToShow": 1,
              "arrows": false,
              "fade": true,
              "draggable": false,
              "swipe": false,
              "asNavFor": ".product-slider-nav"
              }'>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Product Details Slider Nav -->
                                <div class="mt--30 product-slider-nav sb-slick-slider arrow-type-two"
                                    data-slick-setting='{
            "infinite":true,
              "autoplay": true,
              "autoplaySpeed": 8000,
              "slidesToShow": 4,
              "arrows": true,
              "prevArrow":{"buttonClass": "slick-prev","iconClass":"fa fa-chevron-left"},
              "nextArrow":{"buttonClass": "slick-next","iconClass":"fa fa-chevron-right"},
              "asNavFor": ".product-details-slider",
              "focusOnSelect": true
              }'>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-1.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-2.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-3.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-4.jpg" alt="">
                                    </div>
                                    <div class="single-slide">
                                        <img src="theme/image/products/product-details-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 mt--30 mt-lg--30">
                                <div class="product-details-info pl-lg--30 ">
                                    <p class="tag-block">Tags: <a href="#">Movado</a>, <a href="#">Omega</a></p>
                                    <h3 class="product-title">Beats EP Wired On-Ear Headphone-Black</h3>
                                    <ul class="list-unstyled">
                                        <li>Ex Tax: <span class="list-value"> £60.24</span></li>
                                        <li>Brands: <a href="#" class="list-value font-weight-bold"> Canon</a></li>
                                        <li>Product Code: <span class="list-value"> model1</span></li>
                                        <li>Reward Points: <span class="list-value"> 200</span></li>
                                        <li>Availability: <span class="list-value"> In Stock</span></li>
                                    </ul>
                                    <div class="price-block">
                                        <span class="price-new">£73.79</span>
                                        <del class="price-old">£91.86</del>
                                    </div>
                                    <div class="rating-widget">
                                        <div class="rating-block">
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star star_on"></span>
                                            <span class="fas fa-star "></span>
                                        </div>
                                        <div class="review-widget">
                                            <a href="#">(1 Reviews)</a> <span>|</span>
                                            <a href="#">Write a review</a>
                                        </div>
                                    </div>
                                    <article class="product-details-article">
                                        <h4 class="sr-only">Product Summery</h4>
                                        <p>Long printed dress with thin adjustable straps. V-neckline and wiring under
                                            the Dust with ruffles
                                            at the bottom
                                            of the
                                            dress.</p>
                                    </article>
                                    <div class="add-to-cart-row">
                                        <div class="count-input-block">
                                            <span class="widget-label">Qty</span>
                                            <input type="number" class="form-control text-center" value="1">
                                        </div>
                                        <div class="add-cart-btn">
                                            <a href="#" class="btn btn-outlined--primary"><span
                                                    class="plus-icon">+</span>Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="compare-wishlist-row">
                                        <a href="#" class="add-link"><i class="fas fa-heart"></i>Add to Wish List</a>
                                        <a href="#" class="add-link"><i class="fas fa-random"></i>Add to Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="widget-social-share">
                            <span class="widget-label">Share:</span>
                            <div class="modal-social-share">
                                <a href="#" class="single-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-youtube"></i></a>
                                <a href="#" class="single-icon"><i class="fab fa-google-plus-g"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
    Brands Slider
    ===================================== -->
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="theme/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-2.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-3.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-4.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-5.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-6.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-1.jpg" alt="">
                </div>
                <div class="single-slide">
                    <img src="theme/image/others/brand-2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    Footer Area
    ===================================== -->
    <footer class="site-footer">
        <div class="container">
            <div class="row text-center section-padding">
                <div class="col-xl-12 col-lg-12 col-sm-12">
                    <div class="single-footer pb--40">
                        <div class="brand-footer footer-title">
                            <img src="theme/image/logo.jpg" alt="">
                        </div>
                        <div class="footer-contact">
                            <p><span class="text text-center w-100">B-304, Akshat Avenue, Opp Revti tower, Ramdevnagar, Satellite, Ahmedabad, Gujarat – 380015</span></p>
                            <p><span class="text text-center w-100">+18088 234 5678</span></p>
                            <p><span class="text text-center w-100">suport@hastech.com</span></p>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-12 col-lg-12 col-sm-12">
                    <div class="social-block">
                        <h3 class="title">STAY CONNECTED</h3>
                        <ul class="social-list list-inline">
                            <li class="single-social facebook"><a href="#"><i class="ion ion-social-facebook"></i></a>
                            </li>
                            <li class="single-social twitter"><a href="#"><i class="ion ion-social-twitter"></i></a></li>
                            <li class="single-social google"><a href="#"><i
                                        class="ion ion-social-googleplus-outline"></i></a></li>
                            <li class="single-social youtube"><a href="#"><i class="ion ion-social-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-heading">કોપીરાઇટ 2019 આકર પબ્લિકેશન. બધા રાઇટ આરક્ષિત.
					<a href="https://www.workoscope.com" style="color:#62ab00;">વર્કસ્કોપ ઇન્ક એસએમઇ ઇનિશિયેટિવ આઇએન</a> હેઠળ ડિઝાઇન અને વિકસિત</p>
                <a href="#" class="payment-block">
                    <img src="theme/image/icon/payment.png" alt="">
                </a>
                <p class="copyright-text">Copyright © 2019 <a href="#" class="author">Aakar Publication</a>. All Right Reserved.
                    <br>
                    Designed and Developed Under <a href="https://www.workoscope.com">Workoscope Inc SME Initiative IN</a></p>
            </div>
        </div>
    </footer>
    <!-- Use Minified Plugins Version For Fast Page Load -->
    <script src="theme/js/plugins.js"></script>
    <script src="theme/js/ajax-mail.js"></script>
    <script src="theme/js/custom.js"></script>
</body>
</html>