<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Phạm vi của biến</h1>
<pre>
    - Biến cục bộ : chỉ có ảnh hưởng và có giá trị trong 1 phạm vi nhất định
    - Biến toàn cục : có ảnh hưởng và có thể sử dụng mọi nơi
    - Nếu tên biến bị trùng thì nếu sử dụng ngoài hàm thì PHP sẽ lấy giá trị của biến toàn cục
    ****
    - Tham số khi khai báo hàm là biến cục bộ chỉ sử dụng và có tác dụng trong hàm
    vd như biến $r là biến cục bộ
</pre>

<?php
//Biến toàn cục
$r=100;
//khai báo hàm với $r là tham số cần truyền vào

function tinhchuvihinhtron($r=10){
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
// gọi hàm
$ketqua = tinhchuvihinhtron(15);
echo "<br> Chu vi hinh tron là : " . $ketqua;
echo '<br> Test thử biến $r : '.$r;

?>


</body>
</html>
