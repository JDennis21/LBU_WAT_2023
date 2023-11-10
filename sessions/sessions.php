<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
include 'init.php';
if (isset($_SESSION['user'])) {
    echo "Welcome, Please click the following link <br />";
    echo "<a href='../sessions/protected.php'>Next</a>";
} else if (isset($_SESSION['error'])) {
    include "loginForm.php";
    echo "<br />" . $_SESSION["error"];
} else {
    include "loginForm.php";
}
?>
</body>
</html>