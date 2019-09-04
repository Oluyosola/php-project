<?php
// calculates simple interest
function simpleInterest(float $principal, float $rate,  float $time) {
    
    static $rate = 3.5;
 $simple_interest = (($principal* $rate *$time)/100);
    return  $simple_interest;
    
echo  "simple interest is $principal. $rate. $time";

}

echo  "simple interest is" . simpleInterest(2000.00, 3.5, 60.00);

// prints the product of two variables

function calculate(int $x, int $y){
$z = $x * $y;
return $z;

} 
echo calculate (5,8);
?>