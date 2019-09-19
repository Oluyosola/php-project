<?php
//it does simple calculation using form 
if(isset($_GET['calculator'])):
    $a_numeric = $_GET['a'];
    $b_numeric = $_GET['b'];
    $operation = $_GET['operations'];
    if(is_numeric($a_numeric) && is_numeric($b_numeric )){
        // echo "it is numeric";
        if ($operation == "add"){
            $calculate = $a_numeric +  $b_numeric;
        }elseif ($operation == "subtract"){
            $calculate = $a_numeric - $b_numeric;
        }
        elseif($operation == "multiply"){
            $calculate = $a_numeric *  $b_numeric;
        }elseif($operation == "divide"){
            $calculate = $a_numeric / $b_numeric;
      }
      else{
     $calculate = "please select an operation";
        }
        echo $calculate;
    }else{
        echo "either A or B is not numeric";
    }
endif;