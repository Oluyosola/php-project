<?php
$sum = 0;
$a = array(1,2,3,4,5,6);
foreach($a as $array_values){
    $sum = $sum + $array_values;

$array_values++;
}
echo "Sum of array" . " = " . $sum;	
?>

<?php
$sum = 0;
$b = array('tech' => 4, 'admin' =>5, 'hr' =>3, 'finance' =>4);
foreach($b as $array_values){
    $sum = $sum + $array_values;

$array_values++;
}
echo "Sum of array" . " = " . $sum;	
echo count(array_keys($b));
?>