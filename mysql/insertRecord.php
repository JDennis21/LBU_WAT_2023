<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL</title>
</head>
<body>
<?php
global $connection;
include 'connection.php';

$firstName = $_POST["txtFirst"];
$lastName = $_POST["txtLast"];
$email = $_POST["txtEmail"];
$password = $_POST["txtPass"];
$gender = $_POST["selectGender"];
$age = $_POST["txtAge"];

if ($gender != "Please Select") {
    if ($gender == "Female") {
        $gender = "F";
    } elseif ($gender == "Male") {
        $gender = "M";
    }

    $query = "INSERT INTO `customer`
          (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) 
          VALUES 
          ('$firstName', '$lastName', '$email', '$password', '$gender', '$age')";

    try {
        mysqli_query($connection, $query);
        echo "Record inserted successfully.";
    } catch (mysqli_sql_exception $e) {
        exit("ERROR: Could not execute '$query'. ". mysqli_error($connection));
    }

} else {
    echo "Error: Must Select a gender<br />";
    echo '<small><a href="../mysql/mysql.php">Return</a></small>';
}
?>
</body>
</html>

