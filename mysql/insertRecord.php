<?php
global $connection;
include 'connection.php';

$firstName = $_POST["txtFirst"];
$lastName = $_POST["txtLast"];
$email = $_POST["txtEmail"];
$password = $_POST["txtPass"];
$gender = $_POST["selectGender"];
$age = $_POST["txtAge"];

if ($gender == "Female") {
    $gender = "F";
} elseif ($gender == "Male") {
    $gender = "M";
}

$query = "INSERT INTO `customer` (`FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Age`) 
    VALUES ('$firstName', '$lastName', '$email', '$password', '$gender', '$age')";

if (mysqli_query($connection, $query)) {
    echo "Record inserted successfully.";
}

