<?php

// require '../global.php';
// require '../pdo.php';
require '../dao/thanh-toan.php';
require '../dao/hang-hoa.php';

extract($_REQUEST);
if (exist_param("btn_delete")) {
    try {
        $ma_hd = $_POST['ma_hd'];
        hoa_don_delete($ma_hd);
        echo 'Successfully';
    } catch (Exception $exc) {
        echo 'Something went wrong!';
    }
}else if (exist_param('update_status')) {
    extract($_REQUEST);
    $ngay_hoan_thanh = null;
    hoa_don_update($trang_thai,$ma_hd);
    echo 'Successfully';
}
$VIEW_NAME = "hoa-don/list.php";
require 'layout.php';

