<?php
global $connection;
include 'connection.php';

//Produce query to SELECT all
//then
//use WHERE to narrow search
$query = "SELECT * FROM users;";
//run query and save result
$result = mysqli_query($connection, $query);

//loop through array and store each row
//echo out each record
while ($row=mysqli_fetch_assoc($result)) {
    echo $row['userID'] . ' ' . $row['userName'] . ' ' . $row['userPass'] . '<br />';
}
?>