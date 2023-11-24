<?php
//Set up the database access credentials
$hostname = 'localhost'; //host name
$username = 'root'; //your standard uni id
$password = ''; // the password found on the W: drive
$databaseName = 'wat2023'; //the name of the db you are using on phpMyAdmin

try {
    $connection = mysqli_connect($hostname, $username, $password, $databaseName);
} catch (mysqli_sql_exception $e) {
    $connection = exit("unable to connect to database!");
}

session_start();