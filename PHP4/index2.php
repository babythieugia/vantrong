<?php

for($i = 1; $i<10; $i++){
    if($i==5){
        //lệnh continue sẽ bỏ qua các câu lệnh bên dưới của vòng lặp
        //và tiếp tục chạy sang lần lặp tiếp theo
        continue;
    }
    echo "<br>" .$i;
}
?>