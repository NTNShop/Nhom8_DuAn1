<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Font  google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js" type="text/javascript"></script>

    <title>Admin Dashboard Panel</title>

    <style>
        main.dashboard {
            /* margin-left: 300px; */
            height: 100vh;
        }

        nav {
            z-index: 9999;
        }
    </style>
</head>

<body>
    <div class="message">
        <?php echo "" . $MESSAGE ?>
    </div>
    <main class="dashboard">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php"><span>Edu</span>Book</a>
                </div>

            </div><!-- /.container-fluid -->
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <ul class="nav menu">
                <li><a href="?danh-muc"><svg class="glyph stroked open folder">
                            <use xlink:href="#stroked-open-folder" />
                        </svg>Quản lý danh mục</a></li>
                <li class=""><a href="?san-pham"><svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>Quản lý sản phẩm</a></li>
                <li class=""><a href="?khach-hang"><svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>Quản lý khách hàng</a></li>
                <li class=""><a href="?binh-luan"><svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>Quản lý bình luận</a></li>
                <li class=""><a href="?san-pham"><svg class="glyph stroked bag">
                            <use xlink:href="#stroked-bag"></use>
                        </svg>Quản lý đơn hàng</a></li>
                <li><a href="../index.php"><svg class="glyph stroked open folder">
                            <use xlink:href="#stroked-open-folder" />
                        </svg>Về EduBook</a></li>
            </ul>
        </div>
        <div class="">
            <?php require $VIEW_NAME ?>
        </div>
    </main>

</body>

</html>