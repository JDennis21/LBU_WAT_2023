<!DOCTYPE html>
<html lang="en">
<head>
    <title>Protected Page</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
include 'init.php';
if (!isset($_SESSION['user'])) {
    header("/Web_App/sessions/sessions.php");
}
?>
<p>Any page content that you want to protect can be placed here</p>
<a href="../sessions/logout.php">Logout Page</a>
</body>
</html>
