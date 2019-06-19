<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    vòng lặp do-while
    cú pháp :
    do{
    //các câu lệnh thực thi trong vòng lặp

    biến đếm
    }while(điều kiện chạy vòng lặp)
</pre>

<?php
echo "<br> in ra các số từ 0-19";
$i=0;
do{
    echo "<br>".$i;
    $i++;

}while($i<20);

echo "<br> in ra các số chẵn từ 0-19";

$i=0;
do{
    echo "<br>".$i;
    $i += 2;
}while($i<20);

echo "<br> in ra các số chẵn từ 0-19";
$i=0;
do{
    if(($i%2)==0) {
        echo "<br>" . $i;
    }
    $i++;
}while($i<20);
?>

</body>
</html>
