<?php
include 'connection.php';
global $connection;

$query = "SELECT * FROM medicines";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['mediName'] . ' ' . $row['mediDose'] . ' ' . $row['mediFrequency'] . '<br />';
}