<?php
//hàm isset() check xem giá trị có tồn tại hay ko
if(isset($_POST) && isset($_POST["email"]) && isset($_POST["password"])){
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
