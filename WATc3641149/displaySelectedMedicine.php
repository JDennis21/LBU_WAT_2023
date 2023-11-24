<?php
include 'connection.php';
global $connection;

$query = "SELECT * FROM medicines WHERE mediFrequency = 'Daily' AND mediDose < '10';";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['mediName'] . ' ' . $row['mediDose'] . ' ' . $row['mediFrequency'] . '<br />';
}