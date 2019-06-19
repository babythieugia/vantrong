<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    vòng lặp foreach chỉ dùng để lập mảng
    cú pháp : rút gọn
    foreach ($mang as $value){
    //code thực thi
    echo "br".$value;

    }

    cú pháp đầy đủ
    foreach ($mang as $key => $value)
    {
    //code thực thi
     echo "br" . $key . " - " .$value;
    }
</pre>
<?php

?>
</body>
</html>