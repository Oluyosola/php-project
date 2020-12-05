<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fullcal.php" method ="GET">
   enter a number: <input type="number" name = "a"><br>
    enter a number: <input type="number" name = "b"><br>
   <select name="operations">
   <option value="">please select</option><br>
   <option value="add">add</option><br>
   <option value="sub">subtract</option><br>
   <option value="divide">divide</option><br>
   <option value="multiply">multiply</option>
   </select><br>
   <input type="submit" value = "calculate"name = "cal" ><br>
   </form>
   <?php
//    echo "ghhh";
//    tiply = $_GET['multiply'];
   if (isset($_GET['cal'])):
   $a = $_GET['a'];
   $b = $_GET['b'];
   $action = $_GET['operations'];

   if($action == "add"){
      echo $a+$b;
   }
      elseif($action == "sub"){
        echo $a-$b;
      }elseif($action == "divide"){
    echo $a/$b;
   }elseif($action == "multiply"){
    echo $a*$b;
   }else
{
   echo "hmmm";
   }
endif;
   
   ?>
</body>
</html>