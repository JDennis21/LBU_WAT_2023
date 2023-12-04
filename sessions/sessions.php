<?php include 'init.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sessions</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<header>
    <h1>Josh Dennis c3641149</h1>
</header>
<body>
<?php
if (isset($_SESSION['user'])) {
    echo "Welcome, Please click the following link <br />";
    echo "<a href='../sessions/protected.php'>Next</a>";
} else if (isset($_SESSION['error'])) {
    include "loginForm.php";
    echo "<br />" . $_SESSION["error"];
    unset($_SESSION["error"]);
} else {
    include "loginForm.php";
}
?>
</body>
<footer>
    <br />
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</html>