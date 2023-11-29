<?php
include '../connection.php';
global $connection;

$username = $_POST["txtUser"];
$userPass = $_POST["txtPass"];

$query = "SELECT * FROM register WHERE regUser = '$username' and regPass = '" . md5($userPass) . "';";

$result = mysqli_query($connection, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user'] = $username;
} else {
    $_SESSION['error'] = 'Username or password is incorrect';
}
header("location: {$_SERVER['HTTP_REFERER']}");
