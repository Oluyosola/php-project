<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tech_advance_database";

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
// $sql = "CREATE DATABASE tech_advance_database";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
//sql to create table
// $sql = "CREATE TABLE Employees (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(50) NOT NULL,
//     email VARCHAR(50),
//     staff_id INT(6) UNSIGNED,
//     age INT(6),
//     home_adress VARCHAR(50) NOT NULL,
//     state_ VARCHAR(10) NOT NULL,
//     phone_no VARCHAR(30)
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table Employess created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
//sql to create table
// $sql = "CREATE TABLE Grade_table (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     gradename VARCHAR(30) NOT NULL
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table Grade_table created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
//sql to create table department
// $sql = "CREATE TABLE departments (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     department_name VARCHAR(30) NOT NULL
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table departments created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
// $sql = "CREATE TABLE visitors_log (
//     vistor_name VARCHAR(50) NOT NULL,
//     time_clocked_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//    )";
//     if ($conn->query($sql) === TRUE) {
//         echo "Table departments created successfully";
//     } else {
//         echo "Error creating table: " . $conn->error;
//     }
// $sql = "INSERT INTO Employees (fullname, email, staff_id, age, home_adress, state_, phone_no)
// VALUES ('Omousi Ayobami', 'omousi@techadvance.com', '456', '30', 'N0 35 ireke estate', 'edo', '08156589654');";
// $sql .= "INSERT INTO Employees (fullname, email, staff_id, age, home_adress, state_, phone_no)
// VALUES ('Uche Obiaho', 'uche@techadvance.com', '457', '32', 'N0 21 Akin ogunlewe', 'Anambra', '09024514678');";
// $sql .= "INSERT INTO Employees (fullname, email, staff_id, age, home_adress, state_, phone_no)
// VALUES ('Adeyemo Adetola', 'adetola@techadvance.com', '458', '25', 'N0 60 ligali ayorinde', 'Oyo', '07098356221');";
// $sql .= "INSERT INTO Employees (fullname, email, staff_id, age, home_adress, state_, phone_no)
// VALUES ('Tosin adeyefa', 'tosin@techadvance.com', '459', '35', 'N0 10 Abule-egba', 'Lagos', '08056552781');";
// $sql .= "INSERT INTO Employees (fullname, email, staff_id, age, home_adress, state_, phone_no)
// VALUES ('Akin john', 'john@techadvance.com', '460', '29', 'N0 21 ewkoro street', 'Osun', '08035426771')";
// if ($conn->multi_query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }
// $sql = "INSERT INTO departments (department_name)
//  VALUES ('finance');";
// $sql .= "INSERT INTO departments (department_name)
//  VALUES ('human resources');";
// $sql .= "INSERT INTO departments (department_name)
// VALUES ('System Engineering');";
// $sql .= "INSERT INTO departments (department_name)
// VALUES ('Integration');";
// $sql .= "INSERT INTO departments (department_name)
// VALUES ('products')";
// if ($conn->multi_query($sql) === TRUE) {
//         echo "New record created successfully";
//      } else {
//      echo "Error: " . $sql . "<br>" . $conn->error;
//     }
    // $sql = "INSERT INTO grade_table (gradename)
    // VALUES ('senior');";
    // $sql .= "INSERT INTO grade_table (gradename)
    // VALUES ('junior');";
    // $sql .= "INSERT INTO grade_table (gradename)
    // VALUES ('intermediate');";
    // $sql .= "INSERT INTO grade_table (gradename)
    // VALUES ('intern');";
    // $sql .= "INSERT INTO grade_table (gradename)
    // VALUES ('C level')";
    // if ($conn->multi_query($sql) === TRUE) {
    //     echo "New record created successfully";
    //  } else {
    //  echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // $sql = "INSERT INTO visitors_log (vistor_name)
    // VALUES ('Temitope');";
    // $sql .= "INSERT INTO visitors_log (vistor_name)
    // VALUES ('Mr. Ojodu');";
    // $sql .= "INSERT INTO visitors_log (vistor_name)
    // VALUES ('olamilekan');";
    // $sql .= "INSERT INTO visitors_log (vistor_name)
    // VALUES ('Zainab');";
    // $sql .= "INSERT INTO visitors_log (vistor_name)
    // VALUES ('Folarin')";
    // if ($conn->multi_query($sql) === TRUE) {
    //     echo "New record created successfully";
    //  } else {
    //  echo "Error: " . $sql . "<br>" . $conn->error;
    // }
//     function update  ($fullname, $email, $id, $conn){
//         $sql = "UPDATE Employees SET fullname = '$fullname', email = '$email' WHERE id= '$id'";
// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully";
// }else {
//     echo "Error updating record: " . $conn->error;
// }

//  }
//  echo update('oluyosola', 'oluyosola@yahoo.com', 2, $conn);
 function delete($id, $conn){
     $sql = "DELETE FROM Employees WHERE id= '$id'";
if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
}else {
echo "Error deleting record: " . $conn->error;
}
}
echo delete(2, $conn);
 $conn->close();



    
