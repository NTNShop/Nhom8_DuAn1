<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/category.css">
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
    <!-- score-top-->

    <button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></button>
    <!-- product -->
    <section class="product">
        <div class="container">
            <div class="row bg-white pt-4 pb-4 border-bt pc">
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

                <article class="product__main col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
                            <div class="product__main-img-primary">
                                <img src="images1/product/hoc-tap-qua-du-an-2-01-1.jpg">
                            </div>

                            <div class="product__main-img-list">
                                <img src="images1/product/hoc-tap-qua-du-an-2-01-1.jpg">
                                <img src="images1/product/hoc-tap-qua-du-an-2-01-1 1.jpg">
                                <img src="images1/product/hoc-tap-qua-du-an-2-01-1 2.jpg">
                                <img src="images1/product/23f849a0617301e63159067164aecfd2.png">
                            </div>
                        </div>

                        <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
                            <div class="product__main-info-breadcrumb">
                                Trang chủ / Sản phẩm
                            </div>

                            <a href="#" class="product__main-info-title">
                                <h2 class="product__main-info-heading">
                                    Học tập qua dự án
                                </h2>
                            </a>

                            <div class="product__main-info-rate-wrap">
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                                <i class="fas fa-star product__main-info-rate"></i>
                            </div>

                            <div class="product__main-info-price">
                                <span class="product__main-info-price-current">
                                    140.000đ
                                </span>
                            </div>

                            <div class="product__main-info-description">
                                Trong gần một thế kỷ qua, nhiều nhà giáo dục đã tiến hành nghiên cứu và ghi nhận về
                                những lợi ích của việc học tập qua trải nghiệm, thực hành, và lấy người học làm trung
                                tâm. Nhà bác học Albert Einste...
                            </div>

                            <div class="product__main-info-cart">
                                <!--<div class="product__main-info-cart-quantity">
                                    <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                                    <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                                    <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                                </div>-->

                                <div class="product__main-info-cart-btn-wrap">
                                    <button class="product__main-info-cart-btn">
                                        Thêm vào giỏ hàng
                                    </button>
                                </div>
                            </div>

                            <div class="product__main-info-contact">
                                <a href="#" class="product__main-info-contact-fb">
                                    <i class="fab fa-facebook-f"></i> Chat Facebook
                                </a>
                                <div class="product__main-info-contact-phone-wrap">
                                    <div class="product__main-info-contact-phone-icon">
                                        <i class="fas fa-phone-alt "></i>
                                    </div>

                                    <div class="product__main-info-contact-phone">
                                        <div class="product__main-info-contact-phone-title">
                                            Gọi điện tư vấn
                                        </div>
                                        <div class="product__main-info-contact-phone-number">
                                            ( 0352.860.701)
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row bg-white">
                        <div class="col-12 product__main-tab">
                            <a href="#" class="product__main-tab-link product__main-tab-link--active">
                                Mô tả
                            </a>
                            <a href="#" class="product__main-tab-link">
                                Đánh giá
                            </a>
                        </div>

                        <div class="col-12 product__main-content-wrap">
                            <h2 class="product__main-content-heading">
                                Học tập qua dự án
                            </h2>

                            <p>
                                <span>Trong gần một thế kỷ qua ,</span> nhiều nhà giáo dục đã tiến hành nghiên cứu và
                                ghi nhận về những lợi ích của việc học tập qua trải nghiệm, thực hành, và lấy người học
                                làm trung tâm. Nhà bác học Albert Einstein đã
                                từng nói: “Ví dụ không phải là một cách khác để dạy học; ví dụ là cách duy nhất để dạy
                                học”. Hầu như giáo viên nào cũng hiểu về sự hấp dẫn của việc học tập gắn liền với thực
                                tế so với lớp học thuần lý thuyết.
                            </p>

                            <p>
                                <span> Hai tác giả Hoàng Anh Đức và Tô Thụy Diễm Quyên </span> muốn đưa ra cách tiếp cận
                                nhẹ nhàng và trực quan cho cả các giáo viên lẫn học sinh đối với Học tập qua dự án; sử
                                dụng các dự án để làm những ví dụ đa dạng,
                                đa chiều và gắn liền với thực tế nhất, qua đó giúp người đọc tự xây dựng nên kho tàng
                                kiến thức và kỹ năng của chính bản thân mình.
                            </p>

                            <p>
                                <span>Học tập qua dự án (PBL)</span> là một mô hình tổ chức lớp học nhằm làm năng động
                                hoá lớp học truyền thống vốn lấy bài học làm trung tâm và giáo viên là trọng tâm. Học
                                tập qua dự án hướng tới mục tiêu lâu dài, lấy
                                người học làm trung tâm, liên nội dung và tích hợp các vấn đề thực hành thực tế. Bằng
                                việc giáo viên lùi lại, đảm nhận vai trò dẫn dắt và trao quyền cho học sinh làm chủ quá
                                trình học tập, học sinh hình thành tinh thần
                                trách nhiệm đối với việc học, từ đó tạo dựng môi trường học tập chủ động hơn
                            </p>
                            <p> <span>Sách gồm 4 phần chính:</span></p>
                            <p>
                                <span>Phần I: Giới thiệu về học tập qua dự án</span> <br> Phần này gồm 3 chương, giới
                                thiệu tổng quan về học tập qua dự án, 6 tính chất học tập của dự án học tập, và 8 bước
                                triển khai học tập qua dự án trong trường phổ
                                thông
                            </p>
                            <p>
                                <span>Phần II: Triển khai dự án </span> <br> Phần này gồm 8 chương giúp giáo viên và học
                                sinh biết cách đặt dự án vào một không gian phù hợp, biết cách triển khai dự án từ một
                                không gian có sẵn.
                            </p>
                            <p>
                                <span>Phần III: Giới thiệu về học tập qua dự án</span> <br> Phần này cung cấp kiến thức
                                cơ bản về các biện pháp khác nhau để đánh giá Dự án học tập, cũng như các cấp độ khác
                                nhau để đánh giá các hoạt động học tập.
                            </p>
                            <p>
                                <span>Phần IV: Phụ lục </span> <br> Phần này mở rộng một số vấn đề như: Tư duy STEM
                                trong học tập qua dự án, các vấn đề thường gặp và gợi ý hướng xử lí…. Cuốn sách tích hợp
                                với các mã QR code để giáo viên, học sinh có thể
                                xem minh hoạ các dự án đã được thực hiện và đạt giải ở các cuộc thi Giáo viên sáng tạo.
                            </p>
                            <p>Trân trọng giới thiệu cùng bạn đọc.</p>

                            <h2 class="thongtin"> <span>Thông tin chi tiết</span>
                            </h2>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Công ty phát hành</th>
                                            <td>NXB Giáo Dục Việt Nam</td>
                                        </tr>
                                        <tr>
                                            <th>Ngày xuất bản</th>
                                            <td>2019-03-15 11:47:36</td>
                                        </tr>
                                        <tr>
                                            <th>Kích thước</th>
                                            <td>19 x 27 cm</td>
                                        </tr>
                                        <tr>
                                            <th>Loại bìa</th>
                                            <td>Bìa gập</td>
                                        </tr>
                                        <tr>
                                            <th>Số trang</th>
                                            <td>168</td>
                                        </tr>
                                        <tr>
                                            <th>SKU</th>
                                            <td>4119626029817</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>
                </article>

                <aside class="product__aside col-lg-3 col-md-0 col-sm-0">
                    <div class="product__aside-top">
                        <div class="product__aside-top-item">
                            <img src="images/shipper.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Giao hàng nhanh chóng
                                </p>
                                <span>
                                    Chỉ trong vòng 24h
                                </span>
                            </div>
                        </div>
                        <div class="product__aside-top-item">
                            <img src="images/brand.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Sản phẩm chính hãng
                                </p>
                                <span>
                                    Sản phẩm nhập khẩu 100%
                                </span>
                            </div>
                        </div>
                        <div class="product__aside-top-item">
                            <img src="images/less.png">
                            <div class="product__aside-top-item-text">
                                <p>
                                    Mua hàng tiết kiệm
                                </p>
                                <span>
                                    Rẻ hơn từ 10% đến 30%
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="product__aside-bottom">
                        <h3 class="product__aside-heading">
                            Có thể bạn thích
                        </h3>

                        <div class="product__aside-list">
                            <div class="product__aside-item product__aside-item--border">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/image_227958.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading"> Giáo Dục Stem/Steam : Từ Trải Nghiệm
                                            Thực Hành Đến Tư Duy</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            72.250
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/untitled-1_9_25_1.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Tôi Thích Bản Thân Nỗ Lực Hơn ( Tái bản
                                            2019)</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            76.800đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/image_187163.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Tuổi Thơ Dữ Dội - Tập 2 (Tái Bản 2019)
                                        </h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            69.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/image_188285.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Chuyện Con Mèo Dạy Hải Âu Bay</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            34.300đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/8936186542176.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Tôi Thích Một Cô Gái Nhưng Không Dám Ngỏ
                                            Lời</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            70.000đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/biamem.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Con Chim Xanh Biếc Bay Về - Tặng Kèm 6
                                        </h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            112.500đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/8936049524905.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">5 Centimet Trên Giây</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            39.500đ
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="product__aside-item">
                                <div class="product__aside-img-wrap">
                                    <img src="images1/product/bia1_tobinhyen_2_1_1.jpg" class="product__aside-img">
                                </div>
                                <div class="product__aside-title">
                                    <a href="#" class="product__aside-link">
                                        <h4 class="product__aside-link-heading">Tô Bình Yên Vẽ Hạnh Phúc</h4>
                                    </a>

                                    <div class="product__aside-rate-wrap">
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                        <i class="fas fa-star product__aside-rate"></i>
                                    </div>

                                    <div class="product__aside-price">
                                        <span class="product__aside-price-current">
                                            63.960đ
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>

            <div class="customer-reviews row pb-4 pb-4  py-4 pb-4 py-4 py-4">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Bình luận sản phẩm</h3>
                    <form id="formgroupcomment" method="post">
                        <div class="form-group">
                            <label>Tên:</label>
                            <input name="comm_name" required="" type="text" id='form-name' class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input name="comm_mail" required="" type="email" class="form-control" id="pwd">
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <textarea name="comm_details" required="" rows="8" id='formcontent'
                                class="form-control"></textarea>
                        </div>
                        <button type="submit" name="sbm" id="submitcomment" class="btn btn-primary">Gửi</button>
                    </form>
                </div>
            </div>

            <div class="product-comment row pb-4 pb-4  py-4 pb-4 py-4 py-4">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="comment-item">
                        <ul class=i tem-reviewer>
                            <div class="comment-item-user">
                                <img src="images/img/1.png" alt="" class="comment-item-user-img">

                                <li><b>Nguyễn Nhung</b></li>
                            </div>

                            <br>
                            <li>2021-08-17 20:40:10</li>
                            <li>
                                <h4>Sách được bọc nilong kỹ càng, sạch, mới. Giao hàng nhanh. Nội dung chưa đọc nhưng
                                    nhìn sơ có vẻ hấp dẫn và rất nhiều kiến thức bổ ích. Mình ở nước ngoài nhờ người mua
                                    rồi gửi qua nên khâu đóng gói của người bán quan trọng
                                    lắm, giúp cho sách vận chuyển đi xa cũng không bị hư tổn gì. Sẽ tiếp tục ủng hộ.
                                    Love book shop .From Hust with LOve</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul class=i tem-reviewer>
                            <div class="comment-item-user">
                                <img src="images/img/2.png" alt="" class="comment-item-user-img">
                                <li><b>Tùng Lương</b></li>
                            </div>

                            <br>
                            <li>2021-02-17 12:20:10</li>
                            <li>
                                <h4>Sách được đóng rất cẩn thận, hộp ko bị móp méo gì cả .... , giao hàng chậm cả tuần,
                                    Rõ trên app báo hàng đến kho rồi cả tuần k thấy đâu. shipper rất vui tính và thân
                                    thiện . Còn ngoài ra thì sách rất đẹp nha mọi người.
                                    Giấy sáng và thơm. Từ bìa tới màu sắc trong sách.Thấy mọi người bảo hay lắm nên mua
                                    về thử chứ mk chưa có đọc nên chưa thể review về nội dung.</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul class=i tem-reviewer>
                            <div class="comment-item-user">
                                <img src="images/img/5.png" alt="" class="comment-item-user-img">
                                <li><b>Trung Trần</b></li>
                            </div>

                            <br>

                            <li>2020-12-27 10:48:20</li>
                            <li>
                                <h4>Love it! - Sách bìa cứng, in màu, giấy dày. - Giao hàng đúng hẹn, bao bì cẩn thận.
                                    -mình đã tham gia 1 lớp nhưng chưa thông lắm nên mua về đọc lại.Giờ thì thông rồi
                                    .Giá hơi chát nhưng phù hợp, hy vọng sẽ có giá tốt hơn
                                    vào kỳ tái bản kế tiếp! - Nội dung hay, công phu, nhiều thuật ngữ nhưng viết dễ
                                    hiểu, hữu ích; có lẽ dịch cũng tốt nữa! Tò mò quá nên mình mua thêm ebook tiếng Anh
                                    để đọc thêm nâng cao từ vựng. Quyển này đọc nguyên
                                    gốc (tiếng Anh) trước chắc sẽ rất khó đọc. Bạn nào làm quản lý mua đọc cũng hữu ích!
                                    Đáng đồng tiền bát gạo!</h4>
                            </li>
                        </ul>
                    </div>
                    <div class="comment-item">
                        <ul class=i tem-reviewer>
                            <div class="comment-item-user">
                                <img src="images/img/6.png" alt="" class="comment-item-user-img">
                                <li><b>Sơn Hoàng</b></li>
                            </div>
                            <br>

                            <li>2020-08-17 20:40:18</li>
                            <li>
                                <h4>sách được đóng trong hộp và có 1 lớp màng nilon bảo vệ. Gáy sách ko bị móp méo, chất
                                    lượng giấy, màu sắc rất tuyệt. Nội dung cực kỳ hữu ích, rất dễ hiểu cho thể loại
                                    sách thuần về lý thuyết tâm lý.Nội dung sách mới, lạ.
                                    Sách sử dụng rất nhiều thuật ngữ khoa học, nên đòi hỏi người đọc kiên nhẫn và có
                                    hiểu biết nhất định. Cực kỳ hài lòng và sẽ ủng hộ tiếp</h4>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>







            <section class="product__love col-12 mt-4">
                <div class="row bg-white">
                    <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                        <h2 class="product__love-heading">
                            Sản phẩm tương tự
                        </h2>
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/image_189077.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Tâm Lý Học - Khái Lược Những Tư Tưởng Lớn</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                300.000đ
                            </span>
                            <span class="product__panel-price-current">
                                273.000đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/camnangppsupham.u84.d20161125.t123417.884704.jpg" alt=""
                                class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Cẩm Nang Phương Pháp Sư Phạm (Tái Bản 2020)</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                150.000đ
                            </span>
                            <span class="product__panel-price-current">
                                120.000đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/image_197655.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">STEM- Kỹ Thuật Siêu Đơn Giản</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide 
                        ">
                                50.000đ
                            </span>
                            <span class="product__panel-price-current">
                                47.200đ
                            </span>
                        </div>
                    </div>
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/9786045890332.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Cẩm Nang Tư Duy Học Tập Và Nghiên Cứu..</a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                30.000đ
                            </span>
                            <span class="product__panel-price-current">
                                24.000đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/image_195509_1_21191.jpg" alt="" class="product__panel-img"
                                width="110">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Phương Pháp Giáo Con Của Người Do Thái <br>

                            </a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                62.000đ
                            </span>
                            <span class="product__panel-price-current">
                                37.200đ
                            </span>
                        </div>
                    </div>

                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="images1/product/image_227958.jpg" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="#" class="product__panel-link">Giáo Dục Stem/Steam:Từ Trải Nghiệm Thực Hành..
                            </a>
                        </h3>
                        <div class="product__panel-rate-wrap">
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                            <i class="fas fa-star product__panel-rate"></i>
                        </div>

                        <div class="product__panel-price">
                            <span class="product__panel-price-old product__panel-price-old-hide">
                                85.000đ
                            </span>
                            <span class="product__panel-price-current">
                                72.250đ
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--product -->

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
                            nhanntpc03225@gmail.com <br> Zalo: 0942 785 922 <br>
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

    <script src="js/jq.js"></script>
    <script src="js/product.js"></script>

</body>

</html>