<?php
//hàm isset() check xem giá trị có tồn tại hay ko
if(isset($_GET) && isset($_GET["email"]) && isset($_GET["password"])){
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo '<br> $email'.$email;
    echo "<br>$password".$password;
}
?>
