<?php
//$superhero = array ("name" => "peter parker", "email" => "peterparker@email.com", "age" => 18);
// foreach($superhero as $key => $array_values){
//     echo $array_values;
// }
 //$superhero = array ("name" => "peter parker", "email" => "peterparker@email.com", "age" => 18);
 //echo $superhero["name" ]
//  $name = "peter parker";
//  $email = "peterparker@email.com";
//  $age = 18;
//  echo $name, $email, $age;
//  function details ($name, $email, $age){
//     echo details ('peterparker', 'peterparker@email.com', 18);
//  }
 function details ($plate, $driver, $type){
     $_SESSION [$plate] = array($driver, $type);
}
 function retrieveDetails ($plate){
     return $_SESSION [$plate];
 }
 details(456, 'tunde', 'corrolla');
print_r (retrieveDetails (456)) ;
print_r ($_SESSION);

?>
<?php
function attendance($department, $staff_name, $staff_id){
    $_SESSION [$department] = array($staff_name, $staff_id);
    $_SESSION [$department];
    switch ($_SESSION [$department]){
    case $_SESSION ['system_engineering']:
    echo $staff_name, $staff_id;
    break;
    case $_SESSION ['integration']:
    echo $staff_name, $staff_id;
    break;
    case $_SESSION ['hr']:
    echo $staff_name, $staff_id;
    break;
    case $_SESSION ['finance']:
    echo $staff_name, $staff_id;
    break;
    case $_SESSION ['admin']:
    echo $staff_name, $staff_id;
    break;
    default:
    echo "check visitors book";
    break;
    }
}   
function retrieveDepartment($department){
    return $_SESSION [$department];
}
    attendance('integration', 'tunde', 2345);
print_r (retrieveDepartment ('integration')) ;
print_r ($_SESSION);
?>