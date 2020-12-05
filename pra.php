<?php
$var = 0;
while($var < 10){
    echo "$var <br>";
    $var++;
}
// in while loopwe check the condition first then execute the instruction but vice versa in do while
$var = 50;
do{
      echo "$var <br>";
    $var++;
}while($var < 10);

for($i = 2;$i<=10; $i++){
    echo $i ."<br>";  
}
$numbers = array(1,2,6,5,4,8,9,8);
for($i = 0; $i < count($numbers); $i++){
    echo"$numbers[$i] <br>";
}

// including a file in php
include "foreach.php";
echo "Sum of associative array" . " = " . $sum;	
echo "the total number of keys in b is" . $count;