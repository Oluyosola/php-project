<?php
//different departments in TechAdvance//
$departments_in_TA = array("project" => 5, "finace" => 8, "human_resources" => 4, "integrations" => 10, "system_engineering" => 6);
echo count($departments_in_TA);
sort($departments_in_TA);
//prints departments according to number of employees//
print_r($departments_in_TA);
$array = array(1,2,3,4,5);
//prints index zero//
echo $array[0];

?>