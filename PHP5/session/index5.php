<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hủy 1 session trong PHP sử dụng hàm unset

    <?php
    //tạo ra 1 session trong PHP
$_SESSION["user_name"] = "admin";
$_SESSION["user_email"] = "admin@gmail.com";
$location = "hà nội";

$_SESSION["user_location"] = $location;
// xem tất cả các session
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// in ra từng session trong $_SESSION
echo "<br> tên của người dùng : " . $_SESSION['user_name'];
echo "<br> email của người dùng : " . $_SESSION['user_email'];
echo "<br> địa điểm của người dùng : " . $_SESSION['user_location'];

$_SESSION["user_location"] = "hồ chí minh";
    // xem tất cả các session
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    echo "<br> địa điểm của người dùng : " . $_SESSION['user_location'];
    // huy session
    unset($_SESSION['user_location']);
    // xem tất cả các session
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    ?>
</body>
</html>