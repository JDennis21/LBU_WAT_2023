<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
session_start();
session_destroy();
header("location: /Web_App/sessions/sessions.php");
?>
</body>
</html>
