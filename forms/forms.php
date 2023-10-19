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

    <!-- First Form -->
    <form method="get" action="forms.php">
        <fieldset class="formFit">
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

    <!-- Second Form -->
    <form method="post" action="forms.php">
        <fieldset class="formFit">
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
        $email = filter_var(trim($_POST["txtEmail1"], FILTER_SANITIZE_EMAIL));
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
    <!-- Third Form -->
    <?php
    echo "<h2 >Order Form</h2>";
    echo "<p>Please fill out this form to place your order<br/></p>";
    function clearVariables(): void
    {
       unset($_POST["pizzaSize"], $_POST["txtUsr"], $_POST["txtPizzaEmail"], $_POST["toppings"],
       $_POST["capers"], $_POST["olives"], $_POST["parmesan"], $_POST["clear"], $_POST["submit"]);
    }
    if (isset($_POST["clear"])) clearVariables();
    ?>
    <form method="post" action="forms.php">
        <fieldset id="orderField1">
            <legend>
                Enter your login details
            </legend>
            <label for="username">Username: </label>
            <input type="text" name="txtUsr" id="username"
                   value="<?php if (isset($_POST["txtUsr"])) echo trim($_POST["txtUsr"]); ?>"/>
            <label for="pizzaEmail">Email: </label>
            <input type="text" name="txtPizzaEmail" id="pizzaEmail"
                   value="<?php if (isset($_POST["txtPizzaEmail"])) echo filter_var(trim($_POST["txtPizzaEmail"]),
                       FILTER_SANITIZE_EMAIL);?>"/><br/>
        </fieldset>
        <fieldset id="orderField2">
            <legend>
                Pizza Selection
            </legend>
            <br/>
            Size:
            <input type="radio" name="pizzaSize" id="small" value="small"
                <?php if (isset($_POST["pizzaSize"]) && $_POST["pizzaSize"]=="small") echo "checked";?>/>
            <label for="small">small</label>
            <input type="radio" name="pizzaSize" id="medium" value="medium"
                <?php if (isset($_POST["pizzaSize"]) && $_POST["pizzaSize"]=="medium") echo "checked";?>/>
            <label for="medium">medium</label>
            <input type="radio" name="pizzaSize" id="large" value="large"
                <?php if (isset($_POST["pizzaSize"]) && $_POST["pizzaSize"]=="large") echo "checked";?>/>
            <label for="large">large</label>
            <br/>
            <br/>
            <label for="toppings">Toppings:</label>
            <select id="toppings" name="toppings">
                <option value="please select"
                    <?php if (isset($_POST["toppings"]) && $_POST["toppings"]=="please select") echo "selected";?>
                >Please Select</option>
                <option value="cheese"
                    <?php if (isset($_POST["toppings"]) && $_POST["toppings"]=="cheese") echo "selected";?>
                >Cheese</option>
                <option value="pepperoni"
                    <?php if (isset($_POST["toppings"]) && $_POST["toppings"]=="pepperoni") echo "selected";?>
                >Pepperoni</option>
            </select>
            <br/>
            <br/>
            Extras:
            <input type="checkbox" name="parmesan" id="parmesan" value = parmesan
                <?php if (isset($_POST["parmesan"]) && $_POST["parmesan"]=="parmesan") echo "checked";?>/>
            <label for="parmesan">Parmesan</label>
            <input type="checkbox" name="olives" id="olives" value="olives"
                <?php if (isset($_POST["olives"]) && $_POST["olives"]=="olives") echo "checked";?>/>
            <label for="olives">Olives</label>
            <input type="checkbox" name="capers" id="capers" value="capers"
                <?php if (isset($_POST["capers"]) && $_POST["capers"]=="capers") echo "checked";?>/>
            <label for="capers">Capers</label>
            <br/>
            <br/>
        </fieldset>
        <input type="submit" value="Submit" name="pizzaSubmit" id="pizzaSubmit"/>
        <input type="submit" value="Clear" name="clear" id="pizzaClear"/>

    </form>
    <?php
    if (isset($_POST["pizzaSubmit"])) {
        $pizzaEmail = filter_var(trim($_POST["txtPizzaEmail"]), FILTER_SANITIZE_EMAIL);
        $pizzaUser = trim($_POST["txtUsr"]);

        if (empty($pizzaUser)) {
            echo "Username is required";
        } elseif (empty($pizzaEmail)) {
            echo "Email is required";
        } elseif (!filter_var($pizzaEmail, FILTER_VALIDATE_EMAIL)){
            echo "Email is not Valid";
        } elseif (!isset($_POST["toppings"]) || !isset($_POST["pizzaSize"])) {
            echo "Must select a size and topping";
        } else {
            $order = ucfirst($_POST["pizzaSize"]) . " " . ucfirst($_POST["toppings"]);
            $extras = "";

            if (isset($_POST["parmesan"])) $extras .= "Parmesan ";
            if (isset($_POST["olives"])) $extras .= "Olives ";
            if (isset($_POST["capers"])) $extras .= "Capers ";
            if (empty($extras)) $extras = "None";

            echo "<h2>Thank you for your order:</h2>";
            echo "CustomerID: " . "<strong>" . $_POST["txtUsr"] . "</Strong><br/>";
            echo "Email: " . "<strong>" . $_POST["txtPizzaEmail"] . "</Strong><br/>";
            echo "Your order: " . "<strong>" . $order . "</Strong><br/>";
            echo "Extra toppings: " . "<strong>" . $extras . "</Strong><br/>";
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