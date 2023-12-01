<?php
include 'connection.php';
global $connection;
?>
<?php
$prodID = $_POST["hideProdID"];
$prodName = $_POST["txtProdName"];
$prodPrice = $_POST["txtProdPrice"];
$prodImage = $_POST["txtProdImage"];

$query = "UPDATE product 
          SET productName = '$prodName', productPrice = '$prodPrice', productImageName = '$prodImage'
          WHERE productID = $prodID";
mysqli_query($connection, $query);

header("location: ../crud/crud.php");
?>
