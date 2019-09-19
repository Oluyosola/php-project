
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CALCULATOR</title>
    </head>
    <body>
<h2>CALCULATOR</h2>
<form action="cal.php" method="GET"> A:
<input type="text" name="a"> <br> B:
<input type="text" name="b"> <br>
Operations:
<select name="operations"> 
    <option value="">please select</option>
    <option value ="add">Add</option>
    <option value ="subtract">Subtract</option>
    <option value ="multiply">Multiply</option>
    <option value ="division">Division</option>
 </select>
    <!-- <input type="hidden" name="calculator" value="1" /> -->
    <p><input type="submit" value="Calculate" name="calculator"></p>
</form>
</body>
</html>