<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Basics of PHP</title>
</head>
<body>
<?php
    echo 'Josh Dennis<br/>'; //My first PHP.
    echo 'c3641149<br/>';
?>
<h2>Using Escape Characters</h2>
<?php
    echo "\"most programmers say it's better to use 'echo' rather than 'print'\" says who?";
?>
<h2>Variables</h2>
<?php
    $name = "Josh";
    $age = 20;
    echo "Hi my name is " .$name .", and I am " .$age ." years old.</br>";
    echo "Mi nombre es $name, y tengo $age anos de edad";
?>
<h2>Functions</h2>
<?php
    //gettype()returns the variable type
    echo gettype($name);
    echo '<br/>';
    //strlen() returns the length of the string
    echo strlen($name);
    echo '<br/>';
    //strtoUpper()returns the string in full caps
    echo strtoUpper($name);
?>
<h2>Arithmetic</h2>
<?php
    $num1 = 9;
    $num2 = 12;

    echo "num1 = $num1<br/>";
    echo "num2 = $num2<br/>";
    echo "num1 x num2 = " .($num1*$num2) ."<br/>";
    echo "num1 as a percentage of num2 = " .number_format(($num1/$num2)*100) ."%<br/>";
    echo "num2 divided by num1 = " .number_format($num1/$num2) ." remainder " .$num2%$num1;
?>
<br/>
<?php
    $name = "David";
    $age = 12;
    $meters = 1.8;
    $inches = ($meters*100)/2.54;

    echo "<br/>Name: " . $name ."<br/>";
    echo "<br/>Age: " . $age . "<br/>";
    echo "<br/>Height in meters: " . $meters ."<br/>";
    echo "<br/>Height in Feet and inches: " .floor($inches/12) ."ft " .($inches%12) ." ins<br/>";
?>
<footer>
    <small> <a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>
