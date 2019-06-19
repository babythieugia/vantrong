<?php
if(isset($_POST)){
    $chieuccao = $_POST ['chieucao'];
    $cannang = $_POST['cannang'];

    $bmi = $cannang / ($chieuccao * $chieuccao);

    echo "<br> chỉ số BMI là : " .$bmi;
    if($bmi < 18.5){
        echo "<br> gầy";
    }
    else if($bmi < 25){
        echo "<br> bình thường";
    }
    else if($bmi <30){
        echo "<br> Béo phì cấp 1";
    }
    else if($bmi <35){
        echo "<br> Béo phì cấp 2";
    }
    else {
        echo "<br> Béo phì cấp 3";
    }

}
?>
