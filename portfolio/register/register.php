<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link type="text/css" rel="stylesheet" href="../../style/main.css" />
</head>
<header>
    <h1>Josh Dennis c3641149</h1>
</header>
<body>
<?php
include "connection.php";
?>
<div>
    <h2>Register</h2>
    <form method="post" action="/portfolio/register/insertRecord.php">
        <fieldset class="formFit">
            <legend>
                Enter Details
            </legend>
            <label for="regUser">username: </label>
            <br />
            <input type="text" name="txtUsername" id="regUser"
                   value="<?php if (isset($_SESSION["username"])) echo $_SESSION["username"]; ?>" />
            <span class="error"><?php if (isset($_SESSION["nameErr"]))echo "*" . $_SESSION["nameErr"];?></span>
            <br />
            <label for="regEmail">Email: </label>
            <br />
            <input type="text" name="txtEmail" id="regEmail"
                   value="<?php if (isset($_SESSION["email"])) echo $_SESSION["email"]; ?>"/>
            <span class="error"><?php if (isset($_SESSION["emailErr"]))echo "*" . $_SESSION["emailErr"];?></span>
            <br />
            <label for="regPass">Password: </label>
            <br />
            <input type="password" name="txtPass" id="regPass" />
            <span class="error"><?php if (isset($_SESSION["passErr"]))echo "*" . $_SESSION["passErr"];?></span>
            <br /><br />
            <label for="regAge">Age: </label>
            <br />
            <select name="selectAge" id="regAge">
                <option>Please Select</option>
                <option
                    <?php
                    if (isset($_SESSION["age"]) && $_SESSION["age"] == "Under 18") echo "selected";
                    ?>>Under 18
                </option>
                <option
                    <?php
                    if (isset($_SESSION["age"]) && $_SESSION["age"] == "18 to 30") echo "selected";
                    ?>>18 to 30
                </option>
                <option
                    <?php
                    if (isset($_SESSION["age"]) && $_SESSION["age"] == "31 to 60") echo "selected";
                    ?>>31 to 60
                </option>
                <option
                    <?php
                    if (isset($_SESSION["age"]) && $_SESSION["age"] == "Over 60") echo "selected";
                    ?>>Over 60
                </option>
            </select>
            <span class="error"><?php if (isset($_SESSION["ageErr"]))echo "*" . $_SESSION["ageErr"];?></span>
            <br /><br />
            <input type="checkbox" name="checkConditions" id="regConditions" value="checkbox"
                <?php if (isset($_SESSION["conditions"]))echo "checked";?> />
            <label for="regConditions">Terms and Conditions</label>
            <span class="error"><?php if (isset($_SESSION["termsErr"]))echo "*" . $_SESSION["termsErr"];?></span>
        </fieldset>
        <input type="submit" name="regSubmit" id="regSubmit" />
    </form>
    <?php
    if (isset($_SESSION["status"])) {
        echo "<br />" . $_SESSION["status"];
    }
    $_SESSION = array();
    ?>
</div>
<footer>
    <br />
    <small> <a href="../../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>
