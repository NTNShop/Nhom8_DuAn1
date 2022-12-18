

 <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="activity">
    <div class="title">
        <i class="uil uil-clock-three"></i>
        <span class="text">Thống kê</span>
    </div>

    <div class="activity-data">
        <div class="data names">
            <span class="data-title">Loại</span>
        </div>
        <div class="data email">
            <span class="data-title">Tổng số sản phẩm</span>
        </div>
        <div class="data joined">
            <span class="data-title">Giá cao nhất</span>
        </div>
        <div class="data type">
            <span class="data-title">Giá thấp nhất</span>
        </div>
        <div class="data status">
            <span class="data-title">Giá trung bình</span>
        </div>
    </div>
    <?php
    $items = statistical();
    foreach ($items as $item) {
    ?>
        <div class="activity-data">
            <div class="data names">
                <span class="data-list">
                    <?php echo $item['ten_loai'] ?>
                </span>
            </div>
            <div class="data email">
                <span class="data-list"><?php echo total_prod_of_cate($item['ma_loai']) ?></span>
            </div>
            <div class="data joined">
                <span class="data-list"><?php print_r(priceCompare($item['ma_loai'])[0][0])  ?></span>
            </div>
            <div class="data type">
                <span class="data-list"><?php print_r(priceMin($item['ma_loai'])[0][0])  ?></span>
            </div>
            <div class="data status">
                <span style="text-transform: capitalize;" class="data-list">
                    <?php echo averagePrice($item['ma_loai'])  ?>
                </span>
            </div>
        </div>
    <?php } ?>
</div></div>