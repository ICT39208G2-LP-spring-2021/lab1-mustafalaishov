<!DOCTYPE html>
<html>
<head>
<title>List of Students | Created By: Beka Narushvili</title>
<style>
table {border-style: outset;}
th {border: 1px solid black;}
td {border: 1px dotted black;}
</style>
</head>
<body>
<?php

//=== lab1-ის მე-3 და მე-4 დავალებები, მოთხოვნისამებრ phpmyadmin-გამოყენებით შევასრულე. ===\\

/*5) დაწერეთ სკრიპტი list-students.php რომლის გამოყენებითაც
ცხრილის სახით გამოიტანთ სტუდენტების სიას.
ცხრილში უნდა იყოს სვეტები: სახელი, გვარი, პირადი ნომერი*/

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'gtu_lms';

// connect
$connect = mysqli_connect($server, $user, $password, $database);
// check connection
if ($connect->connect_error)
{
    die("<p style='color:red; text-align:center; font-weight: bold;'>".'შეცდომა მონაცემთა ბაზასთან კავშირისას: '.$connect->connect_error."</p>");
}

// if (!$connect)
// {
//     die("<p style='color:red; text-align:center; font-weight: bold;'>".'შეცდომა მონაცემთა ბაზასთან კავშირისას: '.mysqli_connect_error()."</p>");
// }

// records
$records = 'SELECT FirstName, LastName, PersonalNumber FROM students';
$result = $connect->query($records);

//talbe
if ($result->num_rows > 0)
{
    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Personal Number</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["PersonalNumber"]. "</td></tr>";
    }
    echo "</table>";
}

$connect->close();
?>

</body>
</html>