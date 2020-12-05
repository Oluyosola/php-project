<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$pro = "he is a boy";
echo str_replace ("he", "she", $pro );
echo "<br>";
echo $pro [1];
echo strLen($pro) . "<br>";
echo strToLower($pro);
echo strToUpper($pro);
$pro[2] = "f";
echo $pro;
echo substr($pro, 5, 4);
echo min(3, 10);
echo max(3,10);
echo pow(4,4);
echo sqrt(144);
echo round(3.5)."<br>";
echo ceil(3.2);
echo floor(3.9);
"<br>";
// their are varietuies of math functions 
?>
<form action="strFunc.php" method="get">
Name;<input type="text" name = "name" placeholder = "type your name" >
<input type="submit"> <br>
<input type="number" name="num1"> <br>
<input type="number" name ="num2"><br>
<input type="submit"><br>
<!-- <input type="radio">
<input type="select">
<input type="number"> -->

</form>

<?php
// echo $_GET["name"];
// echo $_GET["num1"]+ $_GET["num2"];
$array = ["tayo",4,3];
// best way to declare an array
$friends = array("tayo", "BOLA", "TOPE");
echo $array[0];
$friends[1] = 300;
$friends[3] = "tolu";
echo $friends[1];
echo $friends [3];
echo count($array);
?>
<form action="strfunc.php" method="get">
Straw Berry:<input type="checkbox" name="fruits[]" value ="strawBerry">
Water Melon:<input type="checkbox" name="fruits[]" value="waterMelon">
<input type="submit">
</form>
<form action="strfunc.php" method ="post">
<input type="text" name="student">
<input type="submit">
</form>
<?php
$fruits = $_GET["fruits"];
echo $fruits[0];
$grade = array ("tayo" => "C", "tope"=>"D");
echo $grade [$_POST["student"]];
// a normal array buses index to acess information while associateive array uses the key to acess information.

?>
</body>

</html>



