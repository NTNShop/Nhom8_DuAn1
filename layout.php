<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ - EduBook</title>
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/category.css">
    <link rel="stylesheet" href="css/cart.css">
    <style>
        .message {
            font-size: 20px;
            width: 100%;
            text-align: center;
        }
        
    </style>
</head>

<body>
    <div class="app">
        <div class="message">
            <?php echo "" . $MESSAGE ?>
        </div>
        <!--end header nav -->
        <?php require 'layout/header.php' ?>
        <!-- slide - menu list -->
        <!-- end slide menu list -->
        <!-- score-top-->

        <button onclick="topFunction()" id="myBtn-scroll" title="Go to top"><i class="fas fa-chevron-up"></i></i></button>
        <!-- bestselling product -->

        <?php require $VIEW_NAME ?>
        <!-- end post -->


        <!-- footer -->
        <?php require 'layout/footer.php' ?>
        <!-- end footer -->

    </div>
    <script src="js/jq.js"></script>
    <script src="js/index.js"></script>
</body>

</html>