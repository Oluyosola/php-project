<?php

function animalName($animals) {
if ($animals == "cat"){
    $weight = 65;
}  
elseif ($animals == "dog"){
    $weight = 72;
} elseif ($animals == "sheep"){
    $weight = 40;
}else {
    $weight = 0;
}
return $weight;
}
// function getWeight($animals){
//     return getWeight(); 
// }
$animals  = array("cat" => 65, "dog" => 72, "sheep" => 40);
//sort($animals);
$value = min($animals);
$key = array_search($value, $animals);
?>