<?php
include 'init.php';
if (!isset($_SESSION['user'])) {
    header("../sessions/sessions.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Protected Page</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<p>Any page content that you want to protect can be placed here</p>
<a href="logout.php">Logout Page</a>
</body>
</html>
