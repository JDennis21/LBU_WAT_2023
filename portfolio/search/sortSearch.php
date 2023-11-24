<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <link type="text/css" rel="stylesheet" href="../../style/main.css" />
</head>
<header>
    <h1>Josh Dennis c3641149</h1>
</header>
<body>
<?php
include 'connection.php';
global $connection;

if (isset($_SESSION['user'])) {
    header('location: ../search/displayProduct.php');
} else if (isset($_SESSION['error'])) {
    include "loginForm.php";
    echo "<br />" . $_SESSION["error"];
} else {
    include "loginForm.php";
}

$_SESSION = array();
?>
</body>
</html>