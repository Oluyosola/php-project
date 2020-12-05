<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="grade.php" method ="GET">
<input type="text" name ="grade"> 
<input type="submit" >
</form>
<?php
// if (isset($_GET['statement'])):
// $grades =$_GET['grade'];
// $grade =strtoupper($grades);
// if ($grade == "A"){
//     echo "excellent";
// }elseif($grade == "B"){
//     echo "you tried";
// }else{
//     echo "you did nothing";
// }

// endif;
$grade = strtoupper($_GET['grade']);
switch ($grade){
    case "A":
        echo "you did graet";
    break;
    case "B":
        echo "you tried";
    break;
    default:
    echo "no grade";
break;
}
?>
</body>
</html>