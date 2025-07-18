<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fundamentals of PHP</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<header>
    <h1>Josh Dennis C3641149</h1>
</header>
<section id="container">
    <h1>Fundamentals of PHP</h1>
    <h2>Selection</h2>
    <!-- Date -->
    <?php
    $day = date('l'); //that is a lower case L
    echo 'it\'s ' . $day;
    $day = date('d/m/y');
    echo "<br/>$day<br/><br/>";

    if (date('l') == 'Wednesday') {
        echo "It's midweek!";
    } else {
        echo "It's not midweek!";
    }
    echo "<br/>";
    date_default_timezone_set("Europe/London");
    if (date('H') < 12) {
        echo "Good Morning!";
    } elseif (date('H') <= 18 and date('H') >= 12) {
        echo "Good Afternoon!";
    } else {
        echo "Good Night";
    }
    echo "<br/>";
    ?>
    <!-- Passwords -->
    <?php
    echo "<br/>";
    $pass = "Password";
    $pass = strtolower($pass);

    if (4 < (strlen($pass)) and (strlen($pass)) < 10) {
        echo "Password length is valid";
    } else {
        echo "Password length is invalid";
    }
    echo "<br/>";
    if ($pass = !"password" and $pass = !"username") {
        echo "Password valid";
    } else {
        echo "Password invalid";
    }
    echo "<br/>";
    ?>
    <!-- Ticket Price -->
    <?php
    echo "<br/>";
    $ticketPrice = 25;
    $age = 15;
    $member = true;
    $discount = 0;

    if ($age < 12) {
        $discount = $discount + 0.5;
    } elseif (65 > $age || $age < 18) {
        $discount = $discount + 0.25;
    }

    echo "Initial Ticket Price:" . $ticketPrice;
    echo "<br/>Age:" . $age;
    if ($member) {
        echo "<br/>Member:Yes";
        $discount = $discount + 0.1;
    } else {
        echo "<br/>Member:No";
    }
    echo "<br/>Final Ticket Price:" . $ticketPrice * (1 - $discount);
    ?>
    <!-- Arrays -->
    <?php
    echo "<h1>Arrays</h1>";

    echo "<h2>Simple Arrays</h2>";
    $products = array("tshirt", "cap", "mug");
    print_r($products);
    echo "<br/>";
    $products[1] = "shirt";
    print_r($products);
    echo "<br/>";
    $products[] = "skirt";
    print_r($products);
    echo "<br/>Items in my product array";
    echo "<br/>The item at index [2] is: " . $products[2];
    echo "<br/>The item at index [3] is: " . $products[3];

    echo "<h2>Associative Arrays</h2>";
    $customer = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F)');
    print_r($customer);
    echo "<br/>";
    $customer["CustAge"] = 32;
    $customer["CustEmail"] = "sarah@gmail.com";
    print_r($customer);
    echo "<br/>Items in my customer array";
    echo "<br/>The item at Index [CustName] is: " . $customer["CustName"];
    echo "<br/>The item at Index [CustEmail] is: " . $customer["CustEmail"];

    echo "<h2>Multi-Dimensional Arrays</h2>";
    $stock = array(
        array("tshirt", 9.99, 100, array("blue", "green", "red")),
        array("cap", 4.99, 50, array("blue", "black", "grey")),
        array("mug", 6.99, 30, array("yellow", "green", "pink"))
    );
    echo "This is my order";
    echo "<br/>" . $stock[0][3][1] . " " . $stock[0][0];
    echo "<br/>" . "Price: " . $stock[0][1];
    echo "<br/>" . $stock[1][3][2] . " " . $stock[1][0];
    echo "<br/>" . "Price: " . $stock[1][1]
    ?>
    <!-- Loops -->
    <?php
    echo "<h1>Loops</h1>";
    echo "<h2>While Loop</h2>";
    $counter = 1;
    while ($counter < 6) {
        echo 'Count: ' . $counter . '<br />';
        $counter++;
    }
    echo "<br/>";
    ?>
    <table border="1">
        <tr>
            <td>Quantity</td>
            <td>Price</td>
        </tr>
        <?php
        $shirtPrice = 9.99;
        $counter = 1;
        while ($counter <= 10) {
            $total = $counter * $shirtPrice;
            ?>
            <tr>
                <td><?php echo $counter ?></td>
                <td><?php echo $total ?></td>
            </tr>
            <?php
            $counter++;
        }
        ?>
    </table>
    <!-- For Loops -->
    <?php
    echo "<h2>For Loops</h2>";
    $names = array("peter", "Kat", "Laura", "Ali", "Popacatapetal");
    for ($i = 0; $i < 5; $i++) {
        echo $names[$i] . "<br />";
    }
    ?>
    <!-- For Each Loops -->
    <?php
    echo "<h2>Foreach Loops</h2>";
    $names = array("peter" => "c123456", "Kat" => "c456789", "Laura" => "c253485", "Ali" => "c217953",
        "Popacatapetal" => "c435832");
    foreach ($names as $name => $id) {
        echo "Name: $name ID: $id<br />";
    }
    echo "<br />";
    $city = array('Peter' => 'LEEDS', 'Kat' => 'bradford', 'Laura' => 'wakeFIeld');
    print_r($city);
    foreach ($city as $name => $value) {
        $newCity = ucfirst(strtolower($value));
        $city[$name] = $newCity;
    }
    echo "<br />";
    print_r($city);
    ?>
    <!-- Extension Passwords -->
    <?php
    echo "<h1>Some Useful Functions</h1>";
    $password = htmlentities(trim("password"));
    $encryptedPass = md5($password);

    echo "Password is: " . $password . "<br/>";

    if (isset($password) && !empty($password)) {
        if (6 <= strlen($password) and strlen($password) <= 8) {
            if (!is_numeric($password)) {
                echo "Password OK<br/>";
                echo "Encrypted Password: " . $encryptedPass . "<br/>";
            } else echo "Password cannot be a number";
        } else echo "Your password must be between 6 and 8 characters in length";
    } else echo "Please enter a password";
    ?>
</section>
<footer>
    <br />
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>
