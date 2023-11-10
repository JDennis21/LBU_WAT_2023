<?php
include 'connection.php';
global $connection;

$stockItem = $_POST['txtStockItem'];
$stockQuantity = $_POST['txtStockQuantity'];
$stockPrice = $_POST['txtStockPrice'];

$query = "INSERT INTO `stock`
          (`stockItem`, `stockPrice`, `stockQuantity`) 
          VALUES 
          ('$stockItem', '$stockPrice', '$stockQuantity')";
mysqli_query($connection, $query);

header("location:/Web_App/practiceTest/watJoshDennis.php");
