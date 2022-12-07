<?php 
require '../../pdo.php';
require '../../global.php';
require '../../dao/binh-luan.php';
require '../../dao/hang-hoa.php';
extract($_REQUEST);
if (exist_param("btn_delete")) {
    try {
        binh_luan_delete($ma_bl);
        $MESSAGE = "Xóa thành công!";
        header("location: ../index.php?binh-luan");
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
}