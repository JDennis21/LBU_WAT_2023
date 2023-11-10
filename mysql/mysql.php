<!DOCTYPE html>
<html lang="en">
<head>
    <title>MySQL</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<header>
    <h1>Josh Dennis C3641149</h1>
</header>
<section id="container">
    <form method="post" action="/mysql/insertRecord.php">
        <fieldset id="customerDetails">
            <legend>
                Enter Customer Details
            </legend>
            <label for="firstName">First Name: </label>
            <input type="text" name="txtFirst" id="firstName" /> <br />
            <br />
            <label for="surname">Surname: </label>
            <input type="text" name="txtLast" id="surname" /> <br />
            <br />
            <label for="custEmail">Email: </label>
            <input type="text" name="txtEmail" id="custEmail" /> <br />
            <br />
            <label for="custPass">Password: </label>
            <input type="text" name="txtPass" id="custPass" /> <br />
            <br />
            <label for="custGender">Gender: </label>
            <select id="custGender" name="selectGender">
                <option value="Please Select"
                    <?php
                    if (isset($_POST["custGender"]) && $_POST["custGender"] == "please select") echo "selected";
                    ?>>Please Select
                </option>
                <option value="Male"
                    <?php
                    if (isset($_POST["custGender"]) && $_POST["custGender"] == "Male") echo "selected";
                    ?>>Male
                </option>
                <option value="Female"
                    <?php
                    if (isset($_POST["custGender"]) && $_POST["custGender"] == "Female") echo "selected";
                    ?>>Female
                </option>
            </select> <br />
            <br />
            <label for="custAge">Age: </label>
            <input type="text" name="txtAge" id="custAge" /> <br />
        </fieldset>
        <input type="submit" name="formSubmit" id="custSubmit" />
        <input type="reset" value="Clear" name="clear" id="custClear" />
    </form>
    <?php
    include 'selectRecord.php';
    ?>
</section>
<footer>
    <br />
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>