<?php
if (isset($_POST['login'])) {
    require 'dao/pdo.php';
    

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM khachhang WHERE username='$username' AND password='$password'";
    // $row = $conn->query($query)->fetch_assoc();
    // var_dump($row);
   
    $db = mysqli_query($conn, $query);
    
    if ( mysqli_num_rows($db)>0) {
        $_SESSION['client'] = $username;
        header('location: index.php');
    } else {
        echo "<h2>Tài khoản không đúng ! Hãy đăng ký trước hoặc nhập tài khoản vừa đăng ký</h2>";
    }
}

// Bạn phải đăng ký tài khoản trước
?>