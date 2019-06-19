<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    vòng lặp trong php
    vòng lặp thực hiện chu trình theo 1 số lần nhất định
    VD: vòng lặp các thứ trong tuần
    chạy từ chủ nhật đến t7 sau đó sẽ lặp lại
    vòng lặp for :
    1-điểm bắt đầu vòng lặp
    2-điều kiện chạy vòng lặp
    3-sự thay đổi của biến đếm sau mỗi lần chạy

    cú pháp lệnh for()
    for(điểm bắt đầu vòng lặp, điều kiện chạy vòng lặp, sự thay đổi của biến đếm sau mỗi lần chạy){
    //code thực thi vòng lặp for
    }
</pre>
<?php
echo "in ra các số từ 0-20";
for($i=0; $i<20;$i++){
  echo "<br>".$i;
}
echo "<br>in ra các số từ 0-19 nhưng chỉ in ra số chẵn";
for($i=0;$i<20;$i+=2){
    echo "<br>".$i;
}
echo "<br> In ra các số từ 0 đến 19 nhưng chỉ in số chẵn";
for($i = 0; $i < 20; $i++) {
    if (($i % 2) == 0) {
        echo "<br> " . $i;
    }
}
?>
</body>
</html>