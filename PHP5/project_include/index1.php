<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nạp 1 hay nhiều file php vào 1 file khác</h1>
<pre>
    Để nạp file vào 1 file khác thì sử dụng :
    cách 1 : include "đường dẫn của file.php"
    cách 2 : include_once "đường dẫn của file.php"
    cách 2 : require "đường dẫn của file.php"
    cách 2 : require_once "đường dẫn của file.php"
</pre>
</body>
</html>
<?php
$r = 5;
$ketqua = tinhchuvihinhtron($r);
echo "tính chu vi hình tròn";
var_dump($ketqua);
/*
 * Xuất hiện lỗi
 * Fatal error: Uncaught Error: Call to undefined function tinhchuvihinhtron() in C:\xampp\htdocs\PhpstormProjects\vantrong\PHP5\project_include\index1.php:20 Stack trace: #0 {main} thrown in C:\xampp\htdocs\PhpstormProjects\vantrong\PHP5\project_include\index1.php on line 20
 * Do không tìm thầy hàm tính chu vi hình tròn
 */
?>
