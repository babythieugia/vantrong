<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1> Câu lệnh điều kiện trong PHP</h1>
<?php
$age =19;
if($age < 18 ){
    echo "<br> Trẻ em" ;
}else if ($age <30){
    echo "<br> Thanh niên " ;
}else if ($age <50 ){
    echo "<br> Trung niên" ;
}else {
    echo "<br> Người già" ;
}
?>
</body>
</html>