<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
Áp dụng kiến thức $_post và $_get xây dựng 1 from nhập vào
chiều cao theo m và cân nặng theo kg để tính chỉ số BMI và tính toán các chỉ số gầy béo bệnh tật theo link sau:
https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html

đọc lại bài nếu cần thiết theo link sau::
https://toidicode.com/phuong-thuc-get-va-post-trong-php-64.html
<div class="container">
    <form action="post.php" method="POST" role="form">
        <legend>Get files</legend>

        <div class="form-group">
            <label for="">Chiều Cao</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào chiều cao m :" name="chieucao">
        </div>

        <div class="form-group">
            <label for="">Cân Nặng</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào cân nặng" name="cannang">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>


</body>
</html>
