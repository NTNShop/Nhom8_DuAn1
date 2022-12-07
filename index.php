<?php
require 'global.php';
require 'pdo.php';
if (exist_param("san-pham")) {
    $VIEW_NAME = "site/san-pham.php";
}else if (exist_param("chitiet-sanpham")) {
    $VIEW_NAME = "site/chitiet-sanpham.php";
}else if (exist_param("gio-hang")) {
    $VIEW_NAME = "site/gio-hang.php";
}else if (exist_param("thanh-toan")) {
    $VIEW_NAME = "site/thanh-toan.php";
}else if (exist_param("lich-su")) {
    $VIEW_NAME = "site/lich-su.php";
}else if (exist_param("success")) {
    $VIEW_NAME = "site/success.php";
}else if (exist_param("post")) {
    $VIEW_NAME = "site/post.php"; 
}else if (exist_param("contact")) {
    $VIEW_NAME = "site/contact.php"; 
}else if (exist_param("register")) {
    $VIEW_NAME = "site/register.php"; 
}else if (exist_param("thong-tin")) {
    $VIEW_NAME = "site/thong-tin.php"; 
} else {
    // require_once 'dao/hang-hoa.php';
    // $items_all = hang_hoa_select_all();
    // $dac_biet_list = hang_hoa_select_dac_biet();
    $VIEW_NAME = "site/trang-chu.php";
}


require "layout.php";
