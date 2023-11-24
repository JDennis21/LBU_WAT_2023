<?php
include 'connection.php';
global $connection;

if (isset($_POST["productSubmit"])) {
    $productName = $_POST["txtProdName"];
    $productPrice = $_POST["txtProdPrice"];
    $productImageName = $_POST["txtProdImage"];

    $query = "INSERT INTO `product` (`productName`, `productPrice`, `productImageName`) 
              VALUES ('$productName', '$productPrice', '$productImageName')";

    try {
        mysqli_query($connection, $query);
        echo "Record inserted successfully.";
    } catch (mysqli_sql_exception $e) {
        exit("ERROR: Could not execute '$query'. ". mysqli_error($connection));
    }
}

header("Location: {$_SERVER['HTTP_REFERER']}");