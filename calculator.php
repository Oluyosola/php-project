<?php
//performs simple calculation
function calculator($action, $a ,$b){
    if ($action == "add"){
        $calculate = $a + $b;
    }elseif ($action == "subtract"){
        $calculate = $a - $b;
    }elseif($action == "multiply"){
        $calculate = $a * $b;
    }elseif($action == "divide"){
        $calculate = $a / $b;
    }else{
        $calculate = "invalid action";
    }
    echo "$calculate";
}
?>