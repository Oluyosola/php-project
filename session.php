<?php
session_start();
function attendance($department, $staff_name, $staff_id){
    switch($department ){
    case "system_engineering":
    $_SESSION [$department] = array($staff_name, $staff_id);
    break;
    case "integration":
    $_SESSION [$department] = array($staff_name, $staff_id);
    break;
    case "hr":
    $_SESSION [$department] = array($staff_name, $staff_id);
    break;
    case "finance":
    $_SESSION [$department] = array($staff_name, $staff_id);
    break;
    case "admin":
    $_SESSION [$department] = array($staff_name, $staff_id);
    break;
    default:$_SESSION["visitor"] =   $_SESSION [$department] = array($staff_name, $staff_id);
    }
    //return $_SESSION[$department];
}
?>