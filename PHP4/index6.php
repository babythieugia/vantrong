<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hàm trong PHP</h1>
<pre>
    - hàm là tập hợp các dòng code để thực hiện 1 chức năng
    vd như hàm tính chu vi hình tròn , diện tích hình chữ nhật , hàm xuất file PDF
    - thay vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng nhiều lần người ta sẽ sử dụng hàm .
    để khi nào cần dùng chỉ cần gọi tên hàm và sử dụng bằng từ khóa function

    function ten_ham(tham_so_1, tham_so_2,....){
    //code chạy trong hàm
    //return có thể có hoặc ko
    //và sẽ kết thúc hàm tại câu lệnh return

    return gia_tri;
    }
</pre>

<?php
//khai báo hàm với $r là tham số cần truyền vào

function tinhchuvihinhtron($r){
    $chuvi = 3.14*$r*2;
    return $chuvi;
}
// gọi hàm
$ketqua = tinhchuvihinhtron(5);
echo "<br> Chu vi hinh tron là : " . $ketqua;

function tinhdientichhinhtron($a){
    $dientich = 3.14*$a*$a;
    return $dientich;
}
$ketqua = tinhdientichhinhtron(5);
echo "<br> dien tich hinh tron la : ". $ketqua;
?>


</body>
</html>