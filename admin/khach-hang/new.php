<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            display: flex;
            flex-wrap: wrap;
            max-width: 640px;
        }

        .form-group {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .vai-tro-form {
            display: flex;
            justify-content: center;
            gap: 28px;
        }

        .btn {
            border-radius: 4px;
            border: 1px solid red;
            padding: 12px 24px;
            background-color: #000;
            color: white;
            text-decoration: none;

        }
        .row{
            width: 500px;
            position: relative;
            left: 350px;
            top: 20px;
        }
        input{
            width: 200px;
        }
        .add{
            border-radius: 4px; 
            width: 70px;
            height: 50px;
            background-color: orangered;
            color: white;
            border: 1px solid white;
        }
        .kichthuoc{
        position: absolute;
        left: 120px;
        
    }
    .kichthuoc2{
        position: absolute;
        left: 120px;
        top: 180px;
    }
    .vaitro{
        position: relative;
        left: 70px;
    }
    </style>
</head>

<body>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <form action="?khach-hang&btn_insert" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên đăng nhập:</label>
                    <input class="kichthuoc" type="text" name="ma_kh">
                </div>
                <div class="form-group">
                    <label for="">Tên:</label> 
                    <input class="kichthuoc" type="text" name="ho_ten">
                </div>
                <div class="form-group">
                    <label for="">Mật khẩu:</label> 
                      <input class="kichthuoc" type="text" name="mat_khau">
                </div>

                <div class="form-group">
                    <label for="">Avatar:</label>
                    <input class="kichthuoc" type="file" name="hinh"> 
                </div>
                <br><br><br>
                <div class="form-group">
                    <label for="">Email:</label> 
                    <input class="kichthuoc2" type="email" name="email" />
                </div>

                <div class="form-group">
                    <label for="">Vai trò:</label>
                    <div class="vai-tro-form">
                        <div>
                            <input type="radio" name="vai_tro" value="1">
                            <label class="vaitro" for="">Admin</label>
                        </div>
                        <div>
                            <input type="radio" name="vai_tro" value="0">
                            <label class="vaitro" for="">Người dùng</label>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <label for="">Hoạt động</label>
                    <select name="kich_hoat" id="">
                        <option value="1" selected>Hoạt động</option>
                        <option value="0">không hoạt động</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="add" name="btn_insert">Thêm</button>
                </div>
            </form>
        </div>
        <div class="row">
        <a href="?khach-hang&btn_list">Tất Cả Tài Khoản</a>
        </div>
    </div>
</body>

</html>