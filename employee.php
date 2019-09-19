<?php
//a program that stores the attendance of employee
session_start();
$employee = array('omousi', 'nurudeen', 'emma' , 'lanre');
if(isset($_POST['attendance_submitted'])):
     //echo $_POST['firstname']; 
   $firstname = $_POST['firstname'];
    if(in_array($firstname, $employee)){
             $_SESSION['attendance'] = array($_POST['firstname'], $_POST['Department']);
            echo "attendance has been recorded";
             }else{
             echo "employee does not exist";
         }
endif;
// a program that helps confirm if an employee still works in the company
if(isset($_GET['attendance_submitted'])):
    $search = $_GET['search'];
    if(in_array($search, $employee)){
        echo"employee Still works in this company";
    }else{
        echo "employee has been sacked";
    }
endif;
?>