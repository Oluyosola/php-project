<?php
session_start ();
function register($name, $file_id, $department){
    switch($department){
        case "ward1":
        $_SESSION[$department] = array($name, $file_id);
        braek;
        case "ward2":
        $_SESSION[$department] = array($name, $file_id);
        braek;
        case "ward3":
        $_SESSION[$department] = array($name, $file_id);
        braek;
        case "ward4":
        $_SESSION[$department] = array($name, $file_id);
        braek;
        case "ward5":
        $_SESSION[$department] = array($name, $file_id);
        braek;
        default:
        $_SESSION['visitor] = array($name, $file_id);
        braek;
    }
      
}
?>