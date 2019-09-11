<?php
//performs simple calculation
function calculator($action, $a ,$b){
    $convert = strtolower($action);
    if ($convert == "add"){
        $calculate = $a + $b;
    }elseif ($convert == "subtract"){
        $calculate = $a - $b;
    }elseif($convert == "multiply"){
        $calculate = $a * $b;
    }elseif($convert == "divide"){
        $calculate = $a / $b;
    }else{
        $calculate = "invalid action";
    }
    return $calculate;
}
//echo calculator ('DiVIde', 4, 5);
?>