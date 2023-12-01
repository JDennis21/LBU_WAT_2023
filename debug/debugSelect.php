<?php
include 'showErrors.php';
include 'connection.php';
global $connection;

$query = "SELECT * FROM events where eventCategory='workshop'";

$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['eventName'] . ' ' . $row['eventCategory'] . '<br />';
}


