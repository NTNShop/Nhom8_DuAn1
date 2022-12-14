<style>
    .user-change-password{
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
if (exist_param("btn_change")) {
    $ma_kh = $_POST['ma_kh'];
    $mat_khau = $_POST['mat_khau'];
    $mat_khau2 = $_POST['mat_khau2'];
    $mat_khau3 = $_POST['mat_khau3'];
    if(!empty($ma_kh) && !empty($mat_khau) && !empty($mat_khau2)  && !empty($mat_khau3)){
        if ($mat_khau2 != $mat_khau3) {
            $MESSAGE = "Xác nhận mật khẩu mới không đúng!";
            echo "Confirm new password is not true";
        } else {
            $user = khach_hang_select_by_id($ma_kh);
            if ($user) {
                if ($user['mat_khau'] == $mat_khau) {
                    try {
                        $ho_ten = $user['ho_ten'];
                        $kich_hoat = $user['kich_hoat'];
                        $hinh = $user['hinh'];
                        $email = $user['email'];
                        $vai_tro = $user['vai_tro'];
                        khach_hang_change_password($ma_kh, $mat_khau2, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
                        $MESSAGE = "Đổi mật khẩu thành công!";
                        echo "Change password successfully";
                    } catch (Exception $exc) {
                        $MESSAGE = "Đổi mật khẩu thất bại !";
                        echo "Change password fail";
                    }
                } else {
                    $MESSAGE = "Sai mật khẩu!";
                    echo "Password is not true";
                }
            } else {
                $MESSAGE = "Sai mã đăng nhập!";
                echo "Username is not true";
            }
        }

    }else{
        echo "All fields are required";
    }
}
// $VIEW_NAME = "tai-khoan/doi-mk-form.php";
// require '../layout.php';
?>
<div class="user-change-password">
    <div class="change-close-icon">
        <i class="fa-solid fa-close"></i>
    </div>
    <form class="change-password-form" action="" method="post">
        <div class="form-group">
            <label for="">Username:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <input name="ma_kh">
        </div>
        <div class="form-group">
            <label for="">Password:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <input name="mat_khau" type="password">
        </div>
        <div class="form-group">
            <label for="">New Password:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
            <input name="mat_khau2" type="password">
        </div>
        <div class="form-group">
            <label for="">Confirm New Password:</label>
            <input name="mat_khau3" type="password">
        </div>
        <div class="form-group">
            <button name="btn_change">Change</button>
        </div>
    </form>
</div>

    