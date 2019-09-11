<?php
//prints the sum of a given array
$sum = 0;
$a = array(1,2,3,4,5,6);
foreach($a as $array_values){
    $sum += $array_values;
}
echo "Sum of numeric array" . " = " . $sum;	
//prints the sum of the associative array
$sum = 0;
$count = 0;
$b = array('tech' => 4, 'admin' =>5, 'hr' =>3, 'finance' =>4);
foreach($b as $array_values){
    $sum += $array_values;
    $count++;
}
//gets the total number of keys in $b
echo "Sum of associative array" . " = " . $sum;	
echo "the total number of keys in b is" . $count;
?>