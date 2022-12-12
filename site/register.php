<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - EduBook</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/category.css">
</head>

<body>
    <div class="app">
        <!--end header nav -->
<p><?php echo $MESSAGE ?> </p>
        <section id="form">
            <!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form">
                            <!--login form-->
                            <h2>Đăng nhập vào tài khoản của bạn</h2>
                            <form action="xuly_login.php" method="post">
                                <input name="ma_kh" placeholder="Mã Khách Hàng">
                                <input name="mat_khau" placeholder="Mật Khẩu" type="password">
                                <input name="ghi_nho" type="checkbox" checked>
                                Ghi nhớ tài khoản?
                                <button name="btn_login">Đăng nhập</button>
                            </form>
                        </div>
                        <!--/login form-->
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">Hoặc</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="signup-form">
                            <!--sign up form-->
                            <h2>Đăng ký người dùng mới!</h2>
                            <form action="xuly-register.php" method="post" enctype="multipart/form-data">
                                <input name="ho_ten" placeholder="Họ Tên">
                                <input name="email" placeholder="Email">
                                <input name="ma_kh" placeholder="Mã Khách Hàng">
                                <input name="mat_khau" type="password" placeholder="Mật Khẩu">
                                <input name="mat_khau2" type="password" placeholder="Nhập Lại Mật Khẩu">  
                                <input name="up_hinh" type="file">
                                <button name="btn_register">Đăng ký</button>
                                <input name="vai_tro" value="0" type="hidden">
                                <input name="kich_hoat" value="1" type="hidden">
                            </form>
                        </div>
                        <!--/sign up form-->
                    </div>
                </div>
            </div>
        </section>
        <!--/form-->
</body>

</html>