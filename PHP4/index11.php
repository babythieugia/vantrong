<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>truyền tham chiếu và tham trị cho function</h1>
<pre>
    - Truyền tham trị là chỉ truyền giá trị
    - truyền tham chiếu hiểu đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ khi 1 biến thay đổi thì biến kia cũng thay đổi

</pre>
<?php
//truyền tham trị
$a = 5;

function truyenthamtri($b){
    $b = $b*2;
}

truyenthamtri($a);
echo '<br> a là :'. $a;

//truyền tham chiếu

$c=10;
function truyenthamchieu(&$d){
    $d = $d*2;
}
truyenthamchieu($c);
echo "<br> C là :".$c;

?>
</body>
</html>