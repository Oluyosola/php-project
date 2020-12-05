<?php
$time = date("g:i:s a");
$day = date("M:j:Y");
echo $time . $day;


$test = 5;
$test = $test + 1;
$test += 1;
$test++;
echo "test is" .$test ."<br>";

$first_variable = 10;
$second_variable = 5;

echo $first_variable == $second_variable ."<br/>";
echo $first_variable > $second_variable ."<br/>";
echo $first_variable <= $second_variable ."<br/>";
echo $first_variable !== $second_variable ."<br/>";