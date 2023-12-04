<!DOCTYPE html>
<html lang="en">
<body>
<h3>Login</h3>
<form method="post" action="../search/login.php">
    <label for="txtUser"></label>
    <input type="text" name="txtUser" id="txtUser" value='' />
    <label for="txtPass"></label>
    <input type="password" name="txtPass" id="txtPass" />
    <input type="submit" name="subLogin" value="submit" />
</form>
<?php
if (isset($_SESSION['error'])) {
    echo "<br />" . $_SESSION["error"];
}
?>
</body>
</html>
