<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    cú pháp lệnh switch_case
    n là giá trị của biến hoặc là biến
    switch(n){
         case label1:
               //code chạy khi mà n ==lable1
          break;
         case lable2:
              //code chạy khi mà n ==lable2
          break;
    ...............
    default:
      //code chạy khi mà n khác tất cả các trường hợp trên
    }
</pre>
<?php
$d = date('D');
echo "<br> thứ hiện tại là : " .$d;
switch ($d){
    case "Sun":
        echo "<br> Hôm nay là chủ nhật ";
        break;
    case "Mon":
        echo "<br> Hôm nay là thứ 2 ";
        break;
    case "Tue":
        echo "<br> Hôm nay là thứ 3 ";
        break;
    case "Wed":
        echo "<br> Hôm nay là thứ 4 ";
        break;
    case "Thu":
        echo "<br> Hôm nay là thứ 5 ";
        break;
    case "Fri":
        echo "<br> Hôm nay là thứ 6 ";
        break;
    case "Sat":
        echo "<br> Hôm nay là thứ 7 ";
        break;
    default:
        echo "không xác định được ngày trong tuần";
}

?>
</body>
</html>
