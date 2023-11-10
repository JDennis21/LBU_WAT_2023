<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Product</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
include 'connection.php';
global $connection;

$prodID = $_POST["hideProdID"];
$prodName = $_POST["txtProdName"];
$prodPrice = $_POST["txtProdPrice"];
$prodImage = $_POST["txtProdImage"];


$query = "UPDATE product 
          SET productName = '$prodName', productPrice = '$prodPrice', productImageName = '$prodImage'
          WHERE productID = $prodID";
mysqli_query($connection,$query);

header("location: /Web_App/crud/crud.php");
?>
</body>
</html>