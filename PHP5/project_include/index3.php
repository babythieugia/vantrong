<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<pre>
    Điểm chung của các hàm include , require, include_once, require_once
    là cả 4 hàm này đều được sử dụng để nạp file từ file php này sang file khác
    Khác Nhau:
    1; include (nạp file nếu gawoj lỗi trong quá trinhd nạp thì nó vẫn chạy tiếp)
    2; require (nạp file nếu gặp lỗi trong quá trình nạp file thì nó dừng lại)
    3; require (nạp file nếu gặp lỗi trong quá trình nạp file thì nó dừng lại nhưng chỉ nạp 1 lần duy nhất)
    4; include_once (nạp file nếu gawoj lỗi trong quá trinhd nạp thì nó vẫn chạy tiếp nhưng nếu gọi include 2 lần thì nó sẽ chạy 2 lần)
</pre>
</body>
</html>
