<?php
include 'connection.php';
global $connection;

$productID = $_GET["id"];

$query = "DELETE FROM `product` WHERE productID = $productID;";
mysqli_query($connection, $query);

if (mysqli_affected_rows($connection) > 0) {
//If yes , return to calling page(stored in the server variables)
    header("Location: {$_SERVER['HTTP_REFERER']}");
} else {
// print error message
    echo "Error in query: $query. " . mysqli_error($connection);
    exit;
}