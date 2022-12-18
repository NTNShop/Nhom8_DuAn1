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
                            if (isset($_SESSION['user']) ? $_SESSION['user'] : '') {
                            ?>
                                <div class="userinfo">
                                    <a href="?thong-tin">Thông Tin</a>
                                    <p class=""><?php echo $_SESSION['user']['ho_ten'] ?> </p>
                                    <?php
                                    if ($_SESSION['user']['vai_tro'] == 1) echo '<a href="admin/">Vào Admin</a>' ?>
                                </div>
                            <?php
                            } else {
                                echo '<a href="?register" class="header__top-link">Đăng nhập</a>';
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
                    <form action="" class="w-100 search-form d-flex">
                        <select name="" id="" class="header__search-select">
                            <option value="0">All</option>
                            <option value="1">Sách tiếng việt</option>
                            <option value="2">Sách sách nước ngoài</option>
                            <option value="3">Manga-Comic</option>
                        </select>
                        <input type="text" name="keywords" class="header__search-input" placeholder="Tìm kiếm tại đây...">
                        <button class="btn header__search-btn">
                            <span class="header__search-icon-wrap">
                                <i class="fas fa-search header__search-icon"></i>
                            </span>
                        </button>
                    </form>
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

                <a href="?gio-hang" class="col-lg-1 col-md-1 col-sm-0 header__cart">
                    <div class="header__cart-icon-wrap">
                        <!-- <span class="header__notice"></span> -->
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
                        <li class="header__nav-item cate-wrap">
                            <a href="?san-pham" class="header__nav-link ">Danh mục sản phẩm</a>
                            <div class="submenu">
                                <ul>
                                    <?php
                                    require 'dao/loai.php';
                                    $loai_array = loai_select_all();
                                    foreach ($loai_array as $loai) {
                                        $href = "?san-pham&ma_loai=$loai[ma_loai]";
                                        echo "<li><a href='$href'>$loai[ten_loai]</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </li>
                        <li class="header__nav-item">
                            <a href="?post" class="header__nav-link">Bài viết</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="?contact" class="header__nav-link">Liên hệ</a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</header>