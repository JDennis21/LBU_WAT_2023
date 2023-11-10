<?php
echo '<link type="text/css" rel="stylesheet" href="../style/main.css" />';
//Make connection to database
include 'connection.php';
global $connection;
//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';
//run query to select all records from customer table
$query = "SELECT * FROM customer";
//store the result of the query in a variable called $result
$result = mysqli_query($connection, $query);
//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . '<br />';
}

echo '<h2>Select ALL from the Customer Table with Age > 22</h2>';
$query = "SELECT * FROM customer WHERE Age > 22;";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . ' ' . $row['Age'] . '<br />';
}

echo '<h2>Select Females from Customer Table with Age >= 22</h2>';
$query = "SELECT * FROM customer WHERE Gender = 'F' AND Age >= '22';";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . ' ' . $row['Age'] . '<br />';
}

echo '<h2>Select All from the Customer Table with "a" in the first name</h2>';
$query = "SELECT * FROM customer WHERE FirstName LIKE '%a%';";
$result = mysqli_query($connection, $query);
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['FirstName'] . ' ' . $row['LastName'] . ' ' . $row['Email'] . ' ' . $row['Age'] . '<br />';
}



