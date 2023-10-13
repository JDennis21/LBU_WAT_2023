<!DOCTYPE html>
<html lang="en">
<head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<header>
    <h1>Josh Dennis C3641149</h1>
</header>
<section id="container">
    <h1>Fundamentals of PHP</h1>
    <h2>Selection</h2>
    <?php
    $day = date('l'); //that is a lower case L
    echo 'it\'s '.$day;
    $day = date('d/m/y');
    echo "<br/>$day";
    ?>
    <br/>
    <br/>
    <?php
    if (date('l') == 'Wednesday'){
        echo "It's midweek!";
    } else{
        echo "It's not midweek!";
    }
    ?>
    <br/>
    <?php
    date_default_timezone_set("Europe/London");
    if (date('H') < 12){
        echo "Good Morning!";
    } elseif (date('H') <= 18 and date('H') >= 12){
        echo "Good Afternoon!";
    } else {
        echo "Good Night";
    }
    ?>
    <br/>
    <br/>
    <?php
    $pass = "Password";
    $pass = strtolower($pass);

    if (4 < (strlen($pass)) and (strlen($pass)) < 10){
        echo "Password length is valid";
    } else{
        echo "Password length is invalid";
    }
    ?>
    <br/>
    <?php
    if ($pass =! "password" and $pass =! "username"){
        echo "Password valid";
    } else {
        echo "Password invalid";
    }
    ?>
    <br/>
    <br/>
    <?php
        $ticketPrice = 25;
        $age = 15;
        $member = true;
        $discount = 0;

        if ($age < 12) {
            $discount = $discount + 0.5;
        } elseif(65 > $age || $age < 18) {
            $discount = $discount + 0.25;
        }

        echo "Initial Ticket Price:" .$ticketPrice;
        echo "<br/>Age:" .$age;
        if ($member) {
            echo "<br/>Member:Yes";
            $discount = $discount + 0.1;
        } else {
            echo "<br/>Member:No";
        }
        echo "<br/>Final Ticket Price:" .$ticketPrice * (1-$discount);
    ?>
    <h1>Some Useful Functions</h1>
    <?php
    $password = htmlentities(trim("password"));
    $encryptedPassword = md5($password);

    echo "Password is: " .$password ."<br/>";

    if (isset($password) && !empty($password)) {
        if (6 <= strlen($password) and strlen($password) <= 8) {
            if (!is_numeric($password)) {
                echo "Password OK<br/>";
                echo "Encrypted Password: " .$encryptedPassword ."<br/>";
            } else echo "Password cannot be a number";
        } else echo "Your password must be between 6 and 8 characters in length";
    }else echo "Please enter a password";
    ?>
</section>
<footer>
    <br/>
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>
