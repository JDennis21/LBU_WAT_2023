<?php
include '../connection.php';
if (isset($_SESSION['user'])) {
    header("location: protected.php");
    exit();
}
?>
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
include "loginForm.php";
?>
</body>
</html>