<?php
//different departments in TechAdvance//
$departments_in_TA = array("project" => 5, "finace" => 8, "human_resources" => 4, "integrations" => 10, "system_engineering" => 6);
echo count($departments_in_TA);
sort($departments_in_TA);
//prints departments according to number of employees//
print_r($departments_in_TA);

$animals[0] = "bird";
$animals[1] = "cat";
$animals[2] = "dog";
$animals[3] = "goat";
$animals[4] = "wolve";
echo $animals[0];
print_r(array_keys($animals, "wolve"));
?>