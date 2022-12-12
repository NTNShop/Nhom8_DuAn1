<?php
require 'dao/binh-luan.php';
if (exist_param("noi_dung")) {
    $ma_kh = $_SESSION['user']['ma_kh'];
    $noi_dung = $_POST['noi_dung'];
    $ma_hh = $_GET['ma_hh'];
    $ngay_binh_luan = date_format(date_create(), 'Y-m-d');
    binh_luan_insert($ma_kh, $ma_hh, $noi_dung,  $ngay_binh_luan);
}
$binh_luan_list = binh_luan_select_by_hang_hoa($ma_hh);
foreach ($binh_luan_list as $bl) {
    extract($bl)
?>
    <li>
        <span class="comment-content"><?= $noi_dung ?> </span>
        <span class="comment-info"><i><b><?= $ma_kh ?></b><?= $ngay_binh_luan ?></i></span>
    </li>
<?php }
if (!isset($_SESSION['user'])) {
    echo "<b>Đăng nhập để bình luận về sản phẩm này</b>";
} else {
?>
    <form class="binh_luan" action="index.php?chitiet-sanpham&ma_hh=<?= $ma_hh ?>" method="post">
        <input class="gui" name="noi_dung" placeholder="    write a comment" /><button class="send">Gửi</button>
    </form>
<?php } ?>
<style>
.send{
    width: 50px;
    padding-left: 5px;
    background-color: orangered;
    color: white;
}
.gui{
    width: 50%;
    border: 2px solid black;
    
}
</style>