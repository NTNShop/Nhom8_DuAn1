<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài viết</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/post.css">
</head>

<body>
    <!-- header -->
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
                                <a href="#" class="header__top-link">Đăng nhập</a>
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
                                Gọi điện tư vấn
                            </div>
                            <div class="header__call-number">
                                039.882.3232
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

    <!-- posts -->
    <section class="posts">
        <div class="container">
            <div class="row pc">
                <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                    <ul class="menu__list">
                        <li class="menu__item menu__item--active">
                            <a href="#" class="menu__link">
                                <img src="images1/item/baby-boy.png" alt="" class="menu__item-icon" id="Capa_1"
                                    enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                Sách Tiếng Việt</a>
                        </li>
                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                <img src="images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1"
                                    enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                                Sách nước ngoài</a>
                        </li>

                        <li class="menu__item">
                            <a href="#" class="menu__link">
                                <img src="images1/item/1380754_batman_comic_hero_superhero_icon.png" alt=""
                                    class="menu__item-icon" viewBox="0 0 512 512" width="1012" height="512"> Manga -
                                Comic</a>
                        </li>

                    </ul>
                </nav>
                <!-- score-top-->

                <button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i
                        class="fas fa-chevron-up"></i></button>
                <div class="breadcrumbs col-lg-12 col-md-12 col-sm-12">
                    Trang chủ &raquo <span class="breadcrumbs__active">Bài viết</span>
                </div>
            </div>

            <div class="row">
                <article class="post__list col-lg-9 col-md-9 col-sm-12">
                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/got-it-e-voucher.png" class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Mẹo săn mã voucher giảm giá tại Edu Book
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Nguyễn Nhung
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Nếu bạn đang gặp phải những vấn đề về săn, lấy, sử dụng mã voucher của EduBook. Xin hãy
                                yên tâm, bài viết này dành cho bạn! Trong bài viết này mình sẽ chia sẻ đến bạn những
                                mẹo, những kinh nghiệm giúp bạn săn được nhiều mã giảm giá EduBook nhất có thể.....
                            </div>
                        </div>
                    </div>
                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/hinh-ghep-15986994500641611959184.jpg" class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Cách phân biệt sách thật, giả chính xác
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Trung Trần
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Để các độc giả, phụ huynh, học sinh và các thầy cô giáo… không mua phải các loại sách
                                tham khảo giả, sách in lậu, mình sẽ hướng dẫn cách phân biệt sách thật, giả nhanh chóng
                                và chính xác. Nếu bạn chú ý quan sát một xíu là có thể phân biệt được sách giả
                                ngay. Với sách giả khi cầm trên tay sẽ có cảm giác mềm hơn, không cứng và chắc tay như
                                sách thật...
                            </div>
                        </div>
                    </div>
                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/cach-su-dung-ma-giam-gia-hieu-qua-tai-vnreviews.png"
                                class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Sử dụng mã giảm giá Edu Book như thế nào
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Tùng Lương
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Sau khi lấy được mã rồi thì tất nhiên bạn phải biết cách sử dụng nó rồi. Về cơ bản thì
                                EduBook cho phép bạn sử dụng cùng lúc 3 loại mã giảm giá mà mình đã kể trên trong cùng 1
                                đơn hàng. Bao gồm: Mã FreeShip, Mã giảm giá của Shop, Và Ưu đãi từ đối tác
                                thanh toán,....
                            </div>
                        </div>
                    </div>

                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/images.jfif" class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Hướng dẫn đổi trả sách, hoàn tiền Edu Book
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Nguyễn Nhung
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Mua hàng trên Edu Book nhưng sản phẩm bạn nhận được không giống hình, sản phẩm bị lỗi.
                                Bạn nghĩ mình bị lừa, bạn bối rối không biết làm thế nào và quyết định search google:
                                “Phải làm gì khi muốn hoàn trả hàng hoàn tiền trên Edu Book”. Bài viết này sẽ
                                hướng dẫn bạn đổi trả sách EduBook đúng quy trình...
                            </div>
                        </div>
                    </div>

                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/62255041_667523643676350_795766940692905984_n.jpg"
                                class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Chương trình đổi sách cũ lấy cây xanh
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Nguyễn Nhung
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Dự án “Đổi sách cũ – Lấy cây xanh” nhận được sự hưởng ứng rất đông đảo của mọi người.
                                Mọi người nhanh chân đến tham gia chương trình “Ngày hội Sống xanh 2021” đồng thời ghé
                                thăm gian hàng D6 (Trung tâm ứng phó sự cố an toàn môi trường) để cùng nhau trao
                                đổi tri thức và có được cho mình những chậu cây xanh thật dễ thương nhé...
                            </div>
                        </div>
                    </div>

                    <div class="post__item">
                        <div class="post__item-img-wrap">
                            <img src="images1/post/e2.jpg" class="post__item-img">
                        </div>

                        <div class="post__item-content">
                            <div class="post__item-title">
                                <a href="#" class="post__item-link">
                                    <h2 class="post__item-heading">
                                        Góp sách cũ, tặng niềm vui mới cho trẻ em nghèo
                                    </h2>
                                </a>
                            </div>

                            <div class="posts__item-cate-wrap">
                                <div class="posts__item-cate">
                                    <i class="fa fa-folder posts__item-cate-icon"></i>
                                    <div class="posts__item-cate-name">
                                        Tin tức
                                    </div>
                                </div>
                                <div class="posts__item-cate-ad">
                                    <i class="fa fa-user posts__item-cate-ad-icon"></i>
                                    <div class="posts__item-cate-ad-name">
                                        Tùng Lương
                                    </div>
                                </div>
                            </div>
                            <div class="posts__item-description">
                                Hôm nay ngồi xếp đống sách vừa đi nhận ở trường Định Thiện Lý về do các em quyên góp,
                                ủng hộ ác bạn nhỏ vùng xa, thấy vui ghê nơi. Rồi bỗng nhiên ngồi nhớ ra nhiều chuyện.
                                Hồi nhỏ nhà không có điều kiện, thèm đọc sách gì đâu. Mà chỗ mình lại ở vùng sâu
                                nên đã thiếu lại càng thêm thiếu...
                            </div>
                        </div>
                    </div>

                    <nav class="post__pagination">
                        <ul class="post__pagination-list">
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#" aria-label="Previous">
                                    <span class="post__pagination-link-prev">&laquo;</span>
                                </a>
                            </li>
                            <li class="post__pagination-item post__pagination-item--active">
                                <a class="post__pagination-link" href="#">1</a>
                            </li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#">2</a>
                            </li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#">3</a>
                            </li>
                            <li class="post__pagination-item post__pagination-item--center">...</li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#">9</a>
                            </li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#">10</a>
                            </li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#">11</a>
                            </li>
                            <li class="post__pagination-item">
                                <a class="post__pagination-link" href="#" aria-label="Next">
                                    <span class="post__pagination-link-next">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </article>

                <aside class="post__aside col-lg-3 col-md-3 col-sm-0">
                    <div class="post__aside-top">
                        <div class="post__aside-title">
                            <h3 class="post__aside-heading">
                                Bài viết liên quan
                            </h3>

                            <div class="post__aside-list">
                                <div class="post__aside-item post__aside-item--no-border">
                                    <div class="post__aside-img-wrap">
                                        <img src="images1/post/62255041_667523643676350_795766940692905984_n.jpg"
                                            class="post__aside-img">
                                    </div>
                                    <div class="post__aside-title">
                                        <a href="#" class="post__aside-link">
                                            <h4 class="post__aside-link-heading">Chương trình đổi sách cũ lấy cây xanh
                                            </h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="post__aside-item post__aside-item--no-border">
                                    <div class="post__aside-img-wrap">
                                        <img src="images1/post/e2.jpg" class="post__aside-img">
                                    </div>
                                    <div class="post__aside-title">
                                        <a href="#" class="post__aside-link">
                                            <h4 class="post__aside-link-heading">Góp sách cũ ,tặng niềm vui mới cho trẻ
                                                em nghèo</h4>
                                        </a>
                                    </div>
                                </div>

                                <div class="post__aside-item post__aside-item--no-border">
                                    <div class="post__aside-img-wrap">
                                        <img src="images1/post/hinh-ghep-15986994500641611959184.jpg"
                                            class="post__aside-img">
                                    </div>
                                    <div class="post__aside-title">
                                        <a href="#" class="post__aside-link">
                                            <h4 class="post__aside-link-heading"> Cách phân biệt sách thật giả chính xác
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="post__aside-bottom">
                        <h3 class="post__aside-heading">
                            Có thể bạn thích
                        </h3>

                        <div class="post__aside-list">
                            <div class="post__aside-item post__aside-item--border">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/image_195509_1_36793.jpg" class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading"> Nhà Giả Kim (Tái Bản 2020)</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            79.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/image_180164_2_287.jpg" class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">Tuổi Trẻ Đáng Giá Bao Nhiêu</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            80.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/ttdc01.jpg" class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">Thám Tử Đã Chết -Tập 1 Tặng Kèm Bookmark
                                        </h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            119.00đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/tr_-tue-do-thai_outline_15.9.2017-02.jpg"
                                        class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">Trí Tuệ Do Thái (Tái Bản 2018)</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            169.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/cau-ma-nha-xi-hanako---tap-1.jpg" class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">"Cậu" Ma Nhà Xí Hanako- Tập 1</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            22.400đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/one-22.jpg" class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">One-Punch Man Tập 22: Ánh Sáng</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            21.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/600my-hero-academia-hoc-vien-sieu-anh-hung.jpg"
                                        class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">My Hero Academia- Tập 27: One's Justice
                                        </h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            19.580đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="post__aside-item">
                                <div class="post__aside-img-wrap">
                                    <img src="images1/product/one-piece-tap-95_chuyen-chu-du-cua-oden_1.jpg"
                                        class="post__aside-img">
                                </div>
                                <div class="post__aside-title">
                                    <a href="#" class="post__aside-link">
                                        <h4 class="post__aside-link-heading">One Piece - Tập 95( Bản Bìa Rời)</h4>
                                    </a>

                                    <div class="post__aside-rate-wrap">
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                        <i class="fas fa-star post__aside-rate"></i>
                                    </div>

                                    <div class="post__aside-price">
                                        <span class="post__aside-price-current">
                                            16.575đ
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!--end posts -->

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
                            Edubook là cửa hàng luôn cung cấp cho các bạn tìm tòi tri thức, đam mê đọc sách trên khắp cả
                            nước.Chúng tôi sẽ liên tục cập nhật những cuốn sách hay nhất, mới nhất, chất lượng nhất giúp
                            người đọc có những cuốn sách hay nhất để đọc! <br> <br> Điện thoại: 0352 860 701 <br> Email:
                            teamed2@gmail.com <br> Zalo: 039.882.3232 <br>
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
                                    039.882.3232
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
    <script src="js/jq.js"></script>
</body>

</html>