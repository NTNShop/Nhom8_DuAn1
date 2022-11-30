<?php
// require '../../global.php';
// require '../../pdo.php';
require 'dao/hang-hoa.php';
//-------------------------------//
extract($_REQUEST);
if (exist_param("ma_loai")) {
    $items = hang_hoa_select_by_loai($ma_loai);
} else if (exist_param("keywords")) {
    $items = hang_hoa_select_keyword($keywords);
} else {
    $items = hang_hoa_select_all();
}
// $VIEW_NAME = "hang-hoa/liet-ke-ui.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section id='sach-tieng-viet' class="product__love">
        <div class="container">
            <div class="row bg-white">
                <div class="col-lg-12 col-md-12 col-sm-12 product__love-title">
                    <h2 class="product__love-heading upper">
                        Sách Tiếng Việt
                    </h2>
                </div>
            </div>
            <div class="row bg-white prod-wrap">
                <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <div class="product__panel-item col-lg-2 col-md-3 col-sm-6">
                        <div class="product__panel-img-wrap">
                            <img src="content/images/products/<?= $hinh ?>" alt="" class="product__panel-img">
                        </div>
                        <h3 class="product__panel-heading">
                            <a href="?chitiet-sanpham&ma_hh=<?= $ma_hh ?>" class="product__panel-link"><?= $ten_hh ?></a>
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
                                80.000đ
                            </span>
                            <span class="product__panel-price-current">
                                <?= number_format($don_gia, 0) ?>đ
                            </span>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <script>
        const searchForm = document.querySelector('.search-form')
        searchForm.onsubmit = (e) => {
            e.preventDefault();
        }
        searchForm.querySelector('input').oninput = () => {
            const xhr = new XMLHttpRequest(); // create new XML Object
            xhr.open("POST", "layout/liet-ke.php", true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        let data = xhr.response;
                        document.querySelector('.prod-wrap').innerHTML = data;
                    }
                }
            };
            let formData = new FormData(searchForm);
            xhr.send(formData); //send formData to PHP
        }
    </script>
</body>

</html>