<?php
require "../dao/loai.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduBook edit-product</title>

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
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li><a href="">Quản lý sản phẩm</a></li>
                <li class="active">Sản phẩm số 1</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm: <?= $ten_hh ?></h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-6">
                            <form role="form" action="?san-pham&btn_update" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" name="ten_hh" required class="form-control" value="<?= $ten_hh ?>" placeholder="">
                                </div>

                                <div class="form-group">
                                    <label>Giá sản phẩm</label>
                                    <input type="number" name="don_gia" required value="<?= $don_gia ?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Khuyến mãi</label>
                                    <input type="number" name="giam_gia" required value="<?= $giam_gia ?>" class="form-control">
                                </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" name="up_hinh" required>
                                <br>
                                <div>
                                    <img src="../content/images/products/<?= $hinh ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="loai_hang" class="form-control">
                                    <?php
                                    $danhmuc = loai_select_all();
                                    foreach ($danhmuc as $dm) :
                                    ?>
                                        <option <?php echo ($ma_loai == $dm['ma_loai']) ? "selected" : "" ?> value="<?= $dm['ma_loai'] ?>"><?= $dm['ten_loai'] ?></option>
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
                                <textarea name="mo_ta" required class="form-control" rows="3"><?= $mo_ta ?></textarea>
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->

    </div>
    <!--/.main-->
</body>

</html>