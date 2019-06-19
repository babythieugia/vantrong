<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    xử lý thời gian trong PHP
    cú pháp hàm date (format, time)
    date(format) lấy ra thời gian hiện tại
    thời gian thì có thể đọc được định dạng format
    d: đại diện cho ngày 1-31
    D : ngày ở dạng text Mon - Sun
    m : tháng 1-12
    M: tháng ở dạng text Jan - Dec
    Y : Năm
    h : 1-12h
    H : 0-23h
    s : giây
    i : phút

</pre>
<?php
echo "<br> date('d/m/Y') ".date("d/m/Y");
echo "<br> date('D/m/Y') ".date("D/m/Y");
echo "<br> date('D/M/Y') ".date("D/M/Y");
echo "<br> date('D/M/Y h:i:s') " . date("D/M/Y h:i:s");
echo "<br> date('D/M/Y H:i:s') " . date("D/M/Y H:i:s");
?>

<pre>
    Kiểu thời gian timestamp
    kiểu này thì ko đọc được chính xác ngày tháng năm nào nhưng có thể tính toán như cộng trừ được
    hàm time() lấy ra thời gian hiện tại nhưng ở dạng timestamp

</pre>
<?php echo "<br> time()" .time(); ?>
<pre>
    một số vấn đề : 1
    chuyển định dạng thời gian timestamp về dạng đọc được
    Giải quyết : date('format',timestamp)

</pre>
<?php
$timestamp_now = time();
$timestamp_next_month = time() + (60*60*24*30);
echo '<br> tính 30 ngày tiếp theo - date("d/m/Y", $timestamp_next_month): ' . $timestamp_next_month . " -- " . date('d/m/Y', $timestamp_next_month);
?>
<pre>
    Vấn đề 2 : Chuyển đổi định dạng thời gian date() về timestamp
    Giải quyết : strtotime()
    hàm này sẽ chuyển đổi 1 số chuỗi thành thời gian timestamp
    nhưng hàm này chỉ hỗ trợ 1 số kiểu định dạng thời gian như :
    2019-01-31 : Y - m - d;
    31-01-2019 : d-m-Y;
    Nếu ko phải định dạng nó hỗ trợ thì nó trả về false
    Quan sát kết quả của hàm var_ dump() bên dưới:
</pre>
<?php
$str_date = "31-01-2019";
// chuyển đổi thành dạng timestamp
 echo "<br>"; var_dump(strtotime($str_date));
$str_date1 = "31/01/2019";
echo "<br>"; var_dump(strtotime($str_date1));
$str_date2 = "2019-01-31";
echo "<br>"; var_dump(strtotime($str_date2));
$str_date3 = "01-31-2019";
echo "<br>"; var_dump(strtotime($str_date3));
echo '<br> strtotime($str_date)' . $str_date . " -- " . strtotime($str_date);
?>
<pre>
    Hàm mktime() trả về timestamp từ các tham số dk truyền vào
    mktime(hour, minute, second, month, day, year)
    Nếu ko có tham số được truyền vào thì nó sẽ lấy timestamp hiện tại
</pre>
<?php
echo "<br> mktime() :".mktime();
echo "<br> mktime(05, 30, 30, 12, 15, 2019) :".mktime(05, 30, 30, 12, 15, 2019);

?>
</body>
</html>