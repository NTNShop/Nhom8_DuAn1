<style>
    .user-update-account{
        width: 500px;
            position: relative;
            left: 200px;
            top: 20px;
            padding-bottom: 30px;
    }
    .form-group input{
        width: 250px;
    }
    .form-group button{
        width: 100px;
        height: 50px;
        background-color: orangered;
        color: white;
        border-radius: 4px;
        border: 1px solid white;
    }
</style>
<?php 
// require '../../pdo.php';
// require '../../global.php';
require 'dao/khach-hang.php';
if (exist_param("btn_update")) {
    $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
    $hinh = $_POST['current-image'];
    $hinh1 = isset($file_name) ? $file_name : $hinh;
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $ho_ten = $_POST['ho_ten'];
    $email = $_POST['email'];
    $kich_hoat = $_POST['kich_hoat'];
    $vai_tro = $_POST['vai_tro'];
    if (!empty($ma_kh) && !empty($ho_ten) && !empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            try {
                khach_hang_update($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh1, $email, $vai_tro);
                $MESSAGE = "Cập nhật thông tin thành viên thành công!";
                echo "Successfully";
                $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
            } catch (Exception $exc) {
                $MESSAGE = "Cập nhật thông tin thành viên thất bại!";
                echo "Update fail";
            }
        } else {
            echo "Email: $email is not valid";
        }
    } else {
        echo "All field are require!";
    }
} else {
    extract($_SESSION['user']);
}
$VIEW_NAME = "tai-khoan/cap-nhat-tk-form.php";
// require '../layout.php';


extract($_SESSION['user']) ?>
<div class="user-update-account">
    <div class="update-close-icon">
        <i class="fa-solid fa-close"></i>
    </div>
    <form class="update-user-form" action="" method="post" enctype="multipart/form-data">
        <div class="form-group avatar">
            <img src="<?= $IMAGE_DIR ?>/users/<?= $hinh ?>">
        </div>
        <div class="form-group">
            <label for="">Username:</label>
            <input name="ma_kh" value="<?= $ma_kh ?>" readonly>
        </div>
        <div class="form-group">
            <label for="">Name:</label> &ensp;&ensp;
            <input name="ho_ten" value="<?= $ho_ten ?>">
        </div>
        <div class="form-group">
            <label for="">Email:</label>&ensp;&ensp;&ensp;
            <input type="email" name="email" value="<?= $email ?>">
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input name="up_hinh" type="file">
        </div>
        <div class="form-group">
            <button name="btn_update">Cập nhật</button>
        </div>

        <input name="current-image" value="<?= $hinh ?>" type="hidden">
        <input name="vai_tro" value="<?= $vai_tro ?>" type="hidden">
        <input name="kich_hoat" value="<?= $kich_hoat ?>" type="hidden">
        <input name="mat_khau" value="<?= $mat_khau ?>" type="hidden">

    </form>
</div>

