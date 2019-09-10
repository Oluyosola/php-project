<?php
// this code prints the sum of the first ten numbers 
$first_number = 1;
$last_number = 10;
$sum=0;
    while($first_number <= $last_number){
$sum= $sum + $first_number;
$first_number++;
}
echo "Sum of the first ten numbers" . " = " . $sum;	
?>

