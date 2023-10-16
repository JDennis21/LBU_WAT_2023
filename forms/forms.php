<!DOCTYPE html>
<html lang="en">
<head>
    <title>Forms</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css"/>
</head>
<body>
<header>
    <h1>Josh Dennis C3641149</h1>
</header>
<section id="container">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using GET</h2>

    <form method="get" action="forms.php">
        <fieldset>
            <legend>
                Login
            </legend>
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" id="email"/><br/>
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" id="passwd"/><br/>
            <input type="submit" value="Submit" name="loginSubmit"/>
            <input type="reset" value="Clear"/>
        </fieldset>
    </form>
    <?php
    if (isset($_GET["loginSubmit"])) {
        echo "Email: " . $_GET["txtEmail"] . " Password: " . $_GET["txtPass"];
    }
    ?>
    <form method="post" action="forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="email1">Email: </label>
            <input type="text" name="txtEmail1" id="email1" value="<?php
            if (isset($_POST["txtEmail1"])) {
                echo trim($_POST["txtEmail1"]);
            }
            ?>"/><br/>
            <label for="comment"></label>
            <textarea rows="4" cols="50" name="txtComment" id="comment"><?php
                if (isset($_POST["txtComment"])) {
                    echo trim($_POST["txtComment"]);
                }
                ?></textarea><br/>
            <label for="checkbox">Click to Confirm: </label>
            <input type="checkbox" name="checkbox" id="checkbox" value="agree"/><br/>
            <input type="submit" value="Submit" name="loginSubmit1"/>
            <input type="reset" value="Clear"/>
        </fieldset>
    </form>
    <?php
    if (isset($_POST["loginSubmit1"])) {
        $email = trim(filter_var($_POST["txtEmail1"], FILTER_SANITIZE_EMAIL));
        $comment = $_POST["txtComment"];
        if (!empty($email && filter_var($email, FILTER_VALIDATE_EMAIL))) {
            if (isset($_POST["checkbox"])) {
                $confirm = 'Agreed<br />';
            } else {
                $confirm = 'Not Agreed<br />';
            }
            echo "Email: " . $email . "<br/>";
            echo "Comments: " . $comment . "<br/>";
            echo "Confirm: " . $confirm . "<br/>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
            echo "Email is not valid";
        } else {
            echo "Email must not be empty";
        }
    }
    ?>
</section>
<footer>
    <br/>
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>