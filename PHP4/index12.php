<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<h1>$_POST trong PHP sẽ lấy giá trị post đi từ from có method="post"</h1>
<?php
//hàm isset() check xem giá trị có tồn tại hay ko
if(isset($_POST) && isset($_POST["email"]) && isset($_POST["password"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<div class = "container">
    <div class="row">
        <div class="col-md-12">
            <form name="login" action="" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>