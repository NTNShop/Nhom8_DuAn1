<?php
require './global.php';
require './pdo.php';
require 'dao/khach-hang.php';
if (exist_param("btn_register")) {
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $mat_khau2 = $_POST['mat_khau2'];
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $vai_tro = $_POST['vai_tro'];
    $kich_hoat = $_POST['kich_hoat'];
    if (khach_hang_exist($ma_kh)) {
        $MESSAGE = "Mã này đã được sử dụng!";
        echo "Username is already exist";
        header("location: ?register");
    
    } else {
        $file_name = save_file("up_hinh", "content/images/users/");
        $hinh = $file_name ? $file_name : "user.webp";
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
            echo "Register successfull";
            header("location: index.php?register");
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
            echo "Register fail";
        }
    }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}

// Bạn phải đăng ký tài khoản trước
