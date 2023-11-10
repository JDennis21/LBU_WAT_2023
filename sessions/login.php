<?php
//include init.php
include 'init.php';
global $connection;

$userName = $_POST["txtUser"];
$userPass = $_POST["txtPass"];

$query = "SELECT * FROM users WHERE userName = '$userName' and userPass = '$userPass';";
$result = mysqli_query($connection, $query);

if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION['user'] = $userName;
} else {
    $_SESSION['error'] = 'User not recognised';
}
header("location: {$_SERVER['HTTP_REFERER']}");