<?php
require 'dao/hang-hoa.php';
$hh = hang_hoa_select_by_id($_GET['ma_hh']);
extract($hh);
?>
<section class="product">
    <div class="container">
        <div class="row bg-white pt-4 pb-4 border-bt pc">
            <nav class="menu__nav col-lg-3 col-md-12 col-sm-0">
                <ul class="menu__list">
                    <li class="menu__item menu__item--active">
                        <a href="#" class="menu__link">
                            <img src="images1/item/baby-boy.png" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách Tiếng Việt</a>
                    </li>
                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <img src="images1/item/translation.png" alt="" class="menu__item-icon" id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512">
                            Sách nước ngoài</a>
                    </li>

                    <li class="menu__item">
                        <a href="#" class="menu__link">
                            <img src="images1/item/1380754_batman_comic_hero_superhero_icon.png" alt="" class="menu__item-icon" viewBox="0 0 512 512" width="1012" height="512"> Manga -
                            Comic</a>
                    </li>

                </ul>
            </nav>

            <article class="product__main col-lg-9 col-md-12 col-sm-12">
                <form action="site/giohang-xuly.php" method="POST" class="row">
                    <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                    <div class="product__main-img col-lg-4 col-md-4 col-sm-12">
                        <div class="product__main-img-primary">
                            <img src="content/images/products/<?= $hinh ?>">
                        </div>
                    </div>

                    <div class="product__main-info col-lg-8 col-md-8 col-sm-12">
                        <div class="product__main-info-breadcrumb">
                            Trang chủ / Sản phẩm
                        </div>

                        <a href="#" class="product__main-info-title">
                            <h2 class="product__main-info-heading">
                                <?= $ten_hh ?>
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
                                <?= number_format($don_gia, 0,'.', '.') ?>đ
                            </span>
                        </div>

                        <div class="product__main-info-description">
                            <?= $mo_ta ?>
                        </div>

                        <div class="product__main-info-cart">
                            <!--<div class="product__main-info-cart-quantity">
                                    <input type="button" value="-"  class="product__main-info-cart-quantity-minus">
                                    <input type="number" step="1" min="1" max="999" value="1" class="product__main-info-cart-quantity-total">
                                    <input type="button" value="+" class="product__main-info-cart-quantity-plus">
                                </div>-->

                            <div class="product__main-info-cart-btn-wrap">
                                <button type="submit" name="addcart" class="product__main-info-cart-btn">
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
                </form>
                <div class="binhluan">
                    <?php require "layout/binh-luan.php"; ?>
                </div>
            </article>

            <aside class="product__aside col-lg-3 col-md-0 col-sm-0">
                <div class="product__aside-top">
                    <div class="product__aside-top-item">
                        <img src="images1/shipper.png">
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
                        <img src="images1/less.png">
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

                        

                        
                    </div>
                </div>
            </aside>

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
                        <img src="images1/product/camnangppsupham.u84.d20161125.t123417.884704.jpg" alt="" class="product__panel-img">
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
                        <img src="images1/product/image_195509_1_21191.jpg" alt="" class="product__panel-img" width="110">
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