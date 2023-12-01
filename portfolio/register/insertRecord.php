<?php
include '../connection.php';
global $connection;

function trimString($string): string
{
    return htmlspecialchars(stripcslashes(trim($string)));
}

$_SESSION["username"] = trimString($_POST["txtUsername"]);
$_SESSION["email"] = trimString($_POST["txtEmail"]);
$_SESSION["age"] = trimString($_POST["selectAge"]);
if (isset($_POST["checkConditions"])) {
    $_SESSION["conditions"] = trimString($_POST["checkConditions"]);
}
function checkNotEmpty(): bool
{
    $valid = true;

    if (empty(trimString($_POST["txtUsername"]))) {
        $_SESSION["nameErr"] = "Username is required";
        $valid = false;
    }
    if (empty(filter_var(trimString($_POST["txtEmail"]), FILTER_SANITIZE_EMAIL))) {
        $_SESSION["emailErr"] = "Email is required";
        $valid = false;
    }
    if (empty(trimString($_POST["txtPass"]))) {
        $_SESSION["passErr"] = "Password is required";
        $valid = false;
    }
    if ($_POST["selectAge"] == "Please Select") {
        $_SESSION["ageErr"] = "Age is required";
        $valid = false;
    }
    if (empty($_POST["checkConditions"])) {
        $_SESSION["termsErr"] = "Terms and Conditions must be ticked";
        $valid = false;
    }
    return $valid;
}

function checkConditions(): bool
{
    $valid = true;

    $username = trimString($_POST["txtUsername"]);
    $email = trimString($_POST["txtEmail"]);
    $password = trimString($_POST["txtPass"]);

    if (strlen($username) < 6) {
        $_SESSION["nameErr"] = "Username must be greater than 6 characters";
        $valid = false;
    }
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $_SESSION["nameErr"] = "No special characters allowed";
        $valid = false;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION["emailErr"] = "Email is not valid";
        $valid = false;
    }
    if (!preg_match("/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*.{8,}$/", $password)) {
        $_SESSION["passErr"] = "Password must be greater than 8 characters and have at least 1 uppercase, lowercase
         and number ";
        $valid = false;
    }
    return $valid;
}

$check1 = checkConditions();
$check2 = checkNotEmpty();
if ($check1 && $check2) {
    $username = $connection->real_escape_string(stripcslashes(trim($_POST["txtUsername"])));
    $email = $connection->real_escape_string(stripcslashes(trim($_POST["txtEmail"])));
    $password = $connection->real_escape_string(md5(stripcslashes(trim($_POST["txtPass"]))));
    $age = $connection->real_escape_string($_POST["selectAge"]);

    $query = "INSERT INTO `register`
              (`regUser`, `regEmail`, `regPass`, `regAge`) 
              VALUES 
              ('$username', '$email', '$password', '$age')";

    if (mysqli_query($connection, $query)) {
        $_SESSION["status"] = "$username you have been registered please login";
    } else {
        $_SESSION["status"] = "ERROR: Could not execute query. " . mysqli_error($connection);
    }
    header("location: {$_SERVER['HTTP_REFERER']}");

} else {
    $_SESSION["status"] = "<span class='error'>*Could not complete registration</span>";
    header("location: {$_SERVER['HTTP_REFERER']}");
}
