<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<h3>Login</h3>
<form method="post" action="../sessions/login.php">
    <label for="txtUser"></label>
    <input type="text" name="txtUser" id="txtUser" value='' />
    <label for="txtPass"></label>
    <input type="password" name="txtPass" id="txtPass" />
    <input type="submit" name="subLogin" value="submit" />
</form>
</body>
</html>
