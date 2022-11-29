<?php
require_once '../global.php';
require '../pdo.php';
if (exist_param("san-pham")) {
    $VIEW_NAME = "san-pham/index.php";
} else if (exist_param("danh-muc")) {
    $VIEW_NAME = "danh-muc/index.php";
} else if (exist_param("khach-hang")) {
    $VIEW_NAME = "khach-hang/index.php";
} else if (exist_param("binh-luan")) {
    $VIEW_NAME = "binh-luan/index.php";
} else if (exist_param("thong-ke")) {
    $VIEW_NAME = "thong-ke/index.php";
} else {
    $VIEW_NAME = "home.php";
}
require './layout.php';