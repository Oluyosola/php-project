<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>attendance form</title>
    </head>
    <body>
<h2>Attendance Form</h2>
<form action="employee.php" method="POST"> First name:
<input type="text" name="firstname"> <br>
Department:
<select name="Department">
    <option value=""></option>
    <option value ="hr">Hr</option>
    <option value ="tech">Tech</option>
    <option value ="finance">Finance</option>
 </select>
    <input type="hidden" name="attendance_submitted" value="1" />
    <p><input type="submit" value="Submit"></p>
</form>
<form action="employee.php" method="GET"> Enter Name:
    <input type="text" name="search"><br>
    <input type="hidden" name="attendance_submitted" value="1" />
    <input type="submit" value="Search">
</form>
</body>
</html>