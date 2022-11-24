<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/login.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h4 style="margin: 30px 0px;"> ĐĂNG NHẬP</h4>

                <form action="" method="" name="register" onsubmit="return FormValidate();">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="name">Họ tên <span style="color: red;" id="errorName">(*)</span></label>
                            <input type="text" name="name" class="form-control" id="name" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="phone">Phone <span style="color: red;" id="erorPhone">(*)</span></label>
                            <input type="text" name="phone" class="form-control" id="phone" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="email">Email <span style="color: red;" id="erorEmail">(*)</span></label>
                            <input type="text" name="email" class="form-control" id="email" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="pass">Mật khẩu <span style="color: red;" id="errorPass">(*)</span></label>
                            <input type="password" name="passw" class="form-control" id="pass" />
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="passw">Nhập lại mật khẩu <span style="color: red;" id="errorConPass">(*)</span></label>
                            <input type="password" name="con_passw" class="form-control" id="passw" />
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Đăng Ký</button>
                    <button type="reset" class="btn btn-danger">Đăng Nhập</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>