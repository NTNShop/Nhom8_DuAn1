<?php
require_once "../global.php";
require_once "../dao/thong-ke.php";
//--------------------------------//
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>
    <link href="css/admin.css" rel="stylesheet">
</head>

<body>
    <div class="dash-content">
        <div class="overview">
            <div class="title">
                <i class="uil uil-tachometer-fast-alt"></i>
                <span class="text">Bảng điều khiển</span>
            </div>

            <div class="boxes">
                <div class="box box1">
                    <span class="text">Sản phẩm</span>
                    <span class="number">
                        <?php echo thong_ke_hang_hoa() ?>
                    </span>
                </div>
                <div class="box box2">
                    <span class="text">Loại</span>
                    <span class="number"><?php echo thong_ke_loai() ?></span>
                </div>
                <div class="box box3">
                    <span class="text">Bình luận</span>
                    <span class="number"><?php echo thong_ke_binh_luan() ?></span>
                </div>
                <div class="box box4">
                    <span class="text">Người dùng</span>
                    <span class="number"><?php echo thong_ke_khach_hang() ?></span>
                </div>
                <div class="box box5">
                    <span class="text">Biên lai</span>
                    <span class="number"><?php echo thong_ke_don_hang() ?></span>
                </div>
            </div>
        </div>

        <?php
        require 'thong-ke/chart.php';
        require 'thong-ke/list.php';

        // if (exist_param("chart")) {
        //     $VIEW_NAME = "thong-ke/chart.php";
        // } else {
        //     $VIEW_NAME = "thong-ke/list.php";
        // }
        // $items = thong_ke_hang_hoa();
        // require "../layout.php";

        ?>
    </div>
</body>

</html>