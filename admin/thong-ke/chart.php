<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<div class="title">
    <i class="uil uil-chart-bar"></i>
    <span class="text">Đồ thị</span>
</div>
<div class="chart-wrap h-40vh">
    <div class="prod-chart" style="height: <?php echo (thong_ke_hang_hoa() / total_all()) * 100 ?>%;">
    </div>
    <div class="cus-chart" style="height: <?php echo (thong_ke_khach_hang() / total_all()) * 100 ?>%;">
    </div>
    <div class="cate-chart" style="height: <?php echo (thong_ke_loai() / total_all()) * 100 ?>%;">
    </div>
    <div class="comm-chart" style="height: <?php echo (thong_ke_binh_luan() / total_all()) * 100 ?>%;">
    </div>
    <div class="rep-chart" style="height: <?php echo (thong_ke_don_hang() / total_all()) * 100 ?>%;">
    </div>
</div>
<div class="chart-wrap">
    <div class="chart-name">Sản phẩm</div>
    <div class="chart-name">Người dùng</div>
    <div class="chart-name">Loại</div>
    <div class="chart-name">Bình luận</div>
    <div class="chart-name">Biên lai</div>
</div></div>