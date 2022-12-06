<?php
require "../dao/loai.php";
extract($_REQUEST);


if (exist_param("btn_insert")) {
    try {
        $ten_loai = $_POST['loai_hang'];
        loai_insert($ten_loai);
        echo "<script>alert('Thêm mới thành công')</script>";
        unset($ten_loai, $ma_loai);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        echo "<script>alert('Thêm mới thất bại')</script>";
        $MESSAGE = "Thêm mới thất bại!";
    }
    $VIEW_NAME = "danh-muc/add.php";
} else if (exist_param("btn_update")) {
    try {
        $ma_loai = $_POST['ma_loai'];
        $ten_loai = $_POST['ten_loai'];
        loai_update($ma_loai, $ten_loai);
        echo "<script>alert('Cập nhật thành công')</script>";
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        echo "<script>alert('Cập nhật thất bại!')</script>";
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "danh-muc/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        loai_delete($ma_loai);
        $items = loai_select_all();
        echo "<script>alert('Xóa thành công!')</script>";
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        echo "<script>alert('Xóa thất bại!')</script>";
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "danh-muc/list.php";
} else if (exist_param("btn_edit")) {
    $item = loai_select_by_id($ma_loai);
    extract($item);
    $VIEW_NAME = "danh-muc/edit.php";
} else if (exist_param("btn_list")) {
    $items = loai_select_all();
    $VIEW_NAME = "danh-muc/list.php";
} else {
    $VIEW_NAME = "danh-muc/add.php";
}

require "./layout.php";
