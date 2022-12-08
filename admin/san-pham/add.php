<?php
require "../dao/loai.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduBook add-product</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
                <li class="active">Thêm sản phẩm</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" action="?san-pham&btn_insert" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input required name="ten_hh" class="form-control" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input required name="don_gia" type="number" min="0" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Khuyến mãi</label>
                                    <input required name="giam_gia" type="number" min="0" class="form-control">
                                </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input name="up_hinh" type="file" accept="image/*" onchange="loadFile(event)">
                                <img width="100" id="output" />
                                <br>
                                <div class="input-image">
                                    <img style="filter: drop-shadow(0 0 5px rgb(119, 119, 145));" width="80px" src="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="loai_hang" class="form-control">
                                    <?php
                                    $danhmuc = loai_select_all();
                                    foreach ($danhmuc as $dm) :
                                        extract($dm);
                                    ?>
                                        <option value="<?= $ma_loai ?>"><?= $ten_loai ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Sản phẩm nổi bật</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="dac_biet" type="checkbox" value=1>Nổi bật
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Mô tả sản phẩm</label>
                                <textarea required name="mo_ta" class="form-control" rows="3"></textarea>
                            </div>
                            <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row -->
        <a href="?san-pham&btn_list">Tất Cả Sản Phẩm</a>
    </div>
    <!--/.main-->

    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
</body>

</html>