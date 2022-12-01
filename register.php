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
                                    <a href="register.php" class="header__top-link">Đăng nhập</a>
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
                                <span class="header__notice"></span>
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

        <section id="form">
            <!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form">
                            <!--login form-->
                            <h2>Đăng nhập vào tài khoản của bạn</h2>
                            <form action="xuly_login.php" method="post">
                                <input name="ma_kh" placeholder="Mã Khách Hàng">
                                <input name="mat_khau" placeholder="Mật Khẩu" type="password">
                                <input name="ghi_nho" type="checkbox" checked>
                                Ghi nhớ tài khoản?
                                <button name="btn_login">Đăng nhập</button>
                            </form>
                        </div>
                        <!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">Hoặc</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form">
                            <!--sign up form-->
                            <h2>Đăng ký người dùng mới!</h2>
                            <form action="xuly-register.php" method="post" enctype="multipart/form-data">
                                <input name="ho_ten" placeholder="Họ Tên">
                                <input name="email" placeholder="Email">
                                <input name="ma_kh" placeholder="Mã Khách Hàng">
                                <input name="mat_khau" type="password" placeholder="Mật Khẩu">
                                <input name="mat_khau2" type="password" placeholder="Nhập Lại Mật Khẩu">  
                                <input name="up_hinh" type="file">
                                <button name="btn_register">Đăng ký</button>
                                <input name="vai_tro" value="0" type="hidden">
                                <input name="kich_hoat" value="1" type="hidden">
                            </form>
                        </div>
                        <!--/sign up form-->
                    </div>
                </div>
            </div>
        </section>
        <!--/form-->
</body>

</html>