<?php
include 'connection.php';
global $connection;

$query = "SELECT * FROM stock";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['stockItem'] . ' ' . $row['stockQuantity'] . ' ' . $row['stockPrice'] . '<br />';
}