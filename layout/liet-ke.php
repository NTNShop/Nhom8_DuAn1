<?php
require '../global.php';
require '../pdo.php';
require '../dao/hang-hoa.php';
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