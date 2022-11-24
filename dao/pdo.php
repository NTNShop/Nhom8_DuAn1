<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "du_an1";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
  
}else{
  echo ("kết nối thành công");
}
?>


<!-- // function pdo_execute($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = pdo_get_connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         return $conn->lastInsertId();
//     } catch (PDOException $e) {
//         throw $e;
//     } finally {
//         unset($conn);
//     }
// }


// function pdo_query($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = pdo_get_connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//         return $rows;
//     } catch (PDOException $e) {
//         throw $e;
//     } finally {
//         unset($conn);
//     }
// }

// function pdo_query_one($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = pdo_get_connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
//         return $row;
//     } catch (PDOException $e) {
//         throw $e;
//     } finally {
//         unset($conn);
//     }
// }

// function pdo_query_value($sql)
// {
//     $sql_args = array_slice(func_get_args(), 1);
//     try {
//         $conn = pdo_get_connection();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
//         return array_values($row)[0];
//     } catch (PDOException $e) {
//         throw $e;
//     } finally {
//         unset($conn);
//     }
// } -->
