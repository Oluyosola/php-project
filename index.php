<?php
//This program calculates the daily salary and salary earned in five days by two workers//
define('base_salary', 4500);
$accumulated_a = base_salary+ 1200;
$accumulated_b = base_salary+ 1500;
//outputs accumulated salary of worker a and b//
echo "accumulated salary of worker a is ".$accumulated_a;
echo "accumulated salary of worker b is " .$accumulated_b;
$work_days_a = 30;
$work_days_b = 28;
$one_day_salary_of_a =$accumulated_a/$work_days_a;
$one_day_salary_of_b =$accumulated_a/$work_days_b;
//outputSs the daily salary of worker a and b//
echo "amount earned by worker a is ". $one_day_salary_of_a;

echo "amount earned by worker b is ".$one_day_salary_of_b;
$work_days= 5;
//outputs the salary earned by worker a and worker b in five days//
echo "amount earned in five days by a ".$one_day_salary_of_a * $work_days;
echo "amount earned in five days by b ".$one_day_salary_of_b* $work_days;


?> 

