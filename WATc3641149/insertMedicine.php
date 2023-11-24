<?php
include 'connection.php';
global $connection;

$Name = $_POST['txtName'];
$Dose = $_POST['txtDose'];
$Frequency = $_POST['txtFrequency'];

$query = "INSERT INTO `medicines`
          (`mediName`, `mediDose`, `mediFrequency`) 
          VALUES 
          ('$Name', '$Dose', '$Frequency')";

try {
    mysqli_query($connection, $query);
    echo "Record inserted successfully.";
} catch (mysqli_sql_exception $e) {
    exit("ERROR: Could not execute '$query'. ". mysqli_error($connection));
}

header("location: ../WATc3641149/WATjoshDennis.php");