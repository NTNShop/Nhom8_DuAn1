<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - EduBook</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/category.css">
</head>

<body>
    <div class="app">
        <header id="header">
            <!-- header top -->
            <div class="header__top">
                <div class="container">
                    <section class="row flex">
                        <div class="col-lg-5 col-md-0 col-sm-0 heade__top-left">
                            <span>EduBook - Cội nguồn của tri thức</span>
                        </div>

                        <nav class="col-lg-7 col-md-0 col-sm-0 header__top-right">
                            <ul class="header__top-list">
                                <li class="header__top-item">
                                    <?php
                                    if(isset($_SESSION['user'])?$_SESSION['user']:''){
                                ?>
                                    <div class="userinfo">
                                        <p class=""><?php echo $_SESSION['user']['ho_ten'] ?> </p>
                                        <?php 
                                        if($_SESSION['user']['vai_tro']==1) echo '<a href="admin/">Vào Admin</a>' ?>
                                        <a href="xuly_login.php?btn_logoff">Đăng Xuất</a>
                                        
                                    </div>
                                    <?php
                                    }else{
                                        echo '<a href="register.php" class="header__top-link">Đăng nhập</a>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </nav>
                    </section>
                </div>
            </div>
            <!--end header top -->

            <!-- header bottom -->
            <div class="header__bottom">
                <div class="container">
                    <section class="row">
                        <div class="col-lg-3 col-md-4 col-sm-12 header__logo">
                            <h1 class="header__heading">
                                <a href="index.php" class="header__logo-link">
                                    <img src="images1/logo1.png" alt="Logo" class="header__logo-img">
                                </a>
                            </h1>
                        </div>

                        <div class="col-lg-6 col-md-7 col-sm-0 header__search">
                            <select name="" id="" class="header__search-select">
                                <option value="0">All</option>
                                <option value="1">Sách tiếng việt</option>
                                <option value="2">Sách sách nước ngoài</option>
                                <option value="3">Manga-Comic</option>

                            </select>
                            <input type="text" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                            <button class="header__search-btn">
                                <div class="header__search-icon-wrap">
                                    <i class="fas fa-search header__search-icon"></i>
                                </div>
                            </button>
                        </div>

                        <div class="col-lg-2 col-md-0 col-sm-0 header__call">
                            <div class="header__call-icon-wrap">
                                <i class="fas fa-phone-alt header__call-icon"></i>
                            </div>
                            <div class="header__call-info">
                                <div class="header__call-text">
                                    <a href="contact.php">Gọi điện tư vấn</a> 
                                </div>
                                <div class="header__call-number">
                                0942 785 922
                                </div>
                            </div>
                        </div>

                        <a href="cart.php" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                            <div class="header__cart-icon-wrap">
                                <span class="header__notice">4</span>
                                <i class="fas fa-shopping-cart header__nav-cart-icon"></i>
                            </div>
                        </a>
                    </section>
                </div>
            </div>
            <!--end header bottom -->

            <!-- header nav -->
            <div class="header__nav">
                <div class="container">
                    <section class="row">
                        <div class="header__nav-menu-wrap col-lg-3 col-md-0 col-sm-0">
                            <i class="fas fa-bars header__nav-menu-icon"></i>
                            <div class="header__nav-menu-title">Danh mục sản phẩm</div>
                        </div>

                        <div class="header__nav col-lg-9 col-md-0 col-sm-0">
                            <ul class="header__nav-list">
                                <li class="header__nav-item">
                                    <a href="index.php" class="header__nav-link">Trang chủ</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="category.php" class="header__nav-link">Danh mục sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="product.php" class="header__nav-link">Sản phẩm</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="post.php" class="header__nav-link">Bài viết</a>
                                </li>
                                <li class="header__nav-item">
                                    <a href="contact.php" class="header__nav-link">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </header>
        <!--end header nav -->

        <!-- slide - menu list -->
        <section class="menu-slide">
            <div class="container">
                <div class="row">
                    <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                        <ul class="menu__list">
                            <li class="menu__item menu__item--active">
                                <a href="category.php" class="menu__link">
                                    <img src="images1/item/baby-boy.png" alt="" class="menu__item-icon" id="Capa_1"
                                        enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                        width="512"> Sách Tiếng Việt</a>
                            </li>
                            <li class="menu__item">
                                <a href="category.php #sach-tieng-anh" class="menu__link">
                                    <img src="images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1"
                                        enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512"
                                        width="512"> Sách nước ngoài</a>
                            </li>

                            <li class="menu__item">
                                <a href="#manga" class="menu__link">
                                    <img src="images1/item/1380754_batman_comic_hero_superhero_icon.png" alt=""
                                        class="menu__item-icon" viewBox="0 0 512 512" width="1012" height="512"> Manga -
                                    Comic</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="slider col-lg-9 col-md-12 col-sm-0">
                        <div class="row">
                            <div class="slide__left col-lg-8 col-md-0 col-sm-0">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
                                    data-interval="3000">
                                    <!-- <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol> -->
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="images1/banner/363488_final1511.jpg" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images1/banner/Gold_DongA_600X350.jpg" class="d-block w-100"
                                                alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="images1/banner/megabook-glod600X350.png" class="d-block w-100"
                                                alt="...">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <div class="slide__left-bottom">
                                    <div class="slide__left-botom-one">
                                        <img src="images1/banner/363107_05.jpg" class="slide__left-bottom-one-img">
                                    </div>
                                    <div class="slide__left-bottom-two">
                                        <img src="images1/banner/363104_06.jpg" class="slide__left-bottom-tow-img">
                                    </div>
                                </div>
                            </div>

                            <div class="slide__right col-lg-4 col-md-0 col-sm-0">
                                <img src="images1/banner/slider-right.png" class="slide__right-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end slide menu list -->
        <!-- score-top-->

        <button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i
                class="fas fa-chevron-up"></i></i></button>
        <!-- bestselling product -->
        <?php require 'layout/topbanchay.php' ?>
        <!-- end bestselling product -->

        <!-- product -->
        <?php require 'layout/manga-comic.php' ?>
        
        <!--end product -->

        <!-- product love -->
        <?php require 'layout/spyeuthich.php' ?>

        <!--end product love -->

        <!-- post -->
        <?php require 'layout/post.php' ?>

        <!-- end post -->


        <!-- footer -->
        <footer>
            <section class="footer__top">
                <div class="container">
                    <div class="row">
                        <article class="footer__top-intro col-lg-5 col-md-4 col-sm-6">
                            <h4 class="footer__top-intro-heading">
                                Về chúng tôi
                            </h4>
                            <div class="footer__top-intro-content">
                                Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê đọc sách trên
                                khắp cả nước.Chúng tôi sẽ liên tục cập nhật những cuốn sách hay nhất, mới nhất, chất
                                lượng nhất giúp người đọc có những cuốn sách hay nhất để đọc! <br> <br> Điện thoại: 0942 785 922 
                                 <br> Email: nhanntpc03225@gmail.com <br> Zalo: 0942 785 922 <br>
                            </div>
                        </article>

                        <article class="footer__top-policy col-lg-3 col-md-4 col-sm-6">
                            <h4 class="footer__top-policy-heading">
                                Chính sách mua hàng
                            </h4>

                            <ul class="footer__top-policy-list">
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức đặt hàng</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hình thức thanh toán</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Phương thức vận chuyển</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Chính sách đổi trả</a>
                                </li>
                                <li class="footer__top-policy-item">
                                    <a href="#" class="footer__top-policy-link">Hướng dẫn sử dụng</a>
                                </li>
                            </ul>
                        </article>

                        <article class="footer__top-contact-wrap col-lg-4 col-md-4 col-sm-6">
                            <h4 class="footer__top-contact-heading">
                                Hotline liên hệ
                            </h4>

                            <div class="footer__top-contact">
                                <div class="footer__top-contact-icon">
                                    <img src="images/phone_top.png" class="footer__top-contact-img">
                                </div>

                                <div class="footer__top-contact-phone-wrap">
                                    <div class="footer__top-contact-phone">
                                    0942 785 922
                                    </div>
                                    <div class="footer__top-contact-des">
                                        (Giải đáp thắc mắc 24/24)
                                    </div>
                                </div>
                            </div>

                            <h4 class="footer__top-contact-heading">
                                Kết nối với chúng tôi
                            </h4>

                            <div class="footer__top-contact-social">
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/facebook.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/youtube.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/tiktok.png">
                                </a>
                                <a href="#" class="footer__top-contact-social-link">
                                    <img src="images/zalo.png">
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <section class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <span class="footer__bottom-content">Thiết kế bởi nhóm 8 Nhân - Phát - Huy </span>
                    </div>
                </div>
            </section>
        </footer>
        <!-- end footer -->

      
    </div>
    <script src="js/jq.js"></script>
    <script src="js/index.js"></script>
</body>

</html>