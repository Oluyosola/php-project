<?php
// $i = 1;
// $y = 5;

// while ($i <= 10)
// {
    
    
//     $r = $i * $y;
//     echo $r. " ";
//     $i++;
// }
// function sum($y, $z){
//     echo $y +$z;
// }
// sum(4,5);

$isFemale = false;
if(!$isFemale){
    echo "not a female";
}
else{
    echo "she is a female";
}
echo "hello";
$isFemale = false;
$isBeautiful = false;
if ($isFemale && $isBeautiful){
    echo "passed";
}
elseif ($isFemale && !$isBeautiful){
    echo "average";
}
elseif (!$isFemale && $isBeautiful){
    echo "average";
}
else {
    echo "failed <br>";
}


function ighestNum($x, $y){
if( $x > $y){
   echo "great";
}else{
    echo "less";
    }

}
ighestNum(1,2);

function highestNum($x, $y, $z){
    if( $x >= $y && $x>= $z){
       return $x;
    }elseif( $y >= $x && $y>= $z){
        return $y;
    }
    else{
        return $z;
    }
    }
   echo highestNum(5,300,4000);
?>