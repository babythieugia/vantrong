<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Gán giá trị mặc định cho tham số</h1>
<pre>
    -Nếu không truyền biến hoặc giá trị cho tham số của hàm thì sẽ bị lỗi
    -để tránh điều này, trong 1 số trường hợp người ta sẽ gán giá trị mặc định cho tham số
</pre>

<?php
//khai báo hàm với $r là tham số cần truyền vào

function tinhchuvihinhtron($r=10){
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
// gọi hàm
$ketqua = tinhchuvihinhtron(15);
echo "<br> Chu vi hinh tron là : " . $ketqua;

function tinhdientichhinhtron($a=5){
    $dientich = 3.14*$a*$a;
    return $dientich;
}
$ketqua = tinhdientichhinhtron(10);
echo "<br> dien tich hinh tron la : ". $ketqua;
?>


</body>
</html>

