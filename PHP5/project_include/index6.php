<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Nạp 1 hay nhiều file PHP vào file khác</h1>
<pre>
Để nạp file vào 1 file khác thì sử dụng :
cách 1 : include "đường dẫn của file.php"
cách 2 : include_once "đường dẫn của file.php"
cách 3 : require "đường dẫn của file.php"
cách 4 : require_once "đường dẫn của file.php"
Hàm var_dump($bien) trả về kiểu dữ liệu của biến và giá trị của biến
hàm này được sử dụng đẻ debug
</pre>
</body>
<?php
include_once "function.php";
include_once "function.php";
$r=5;
$ketqua = tinhchuvihinhtron($r);
echo "tính chu vi hình tròn";
echo "<br>";
var_dump($ketqua);
?>
</html>