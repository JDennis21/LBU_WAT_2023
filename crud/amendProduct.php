<!DOCTYPE html>
<html lang="en">
<head>
    <title>Amend Product</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
include 'connection.php';
global $connection;

$prodID = $_GET["id"];

$query = "SELECT * FROM product WHERE productID = $prodID;";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>
<form method="post" action="../crud/updateProduct.php">
    <fieldset class="formFit">
        <legend>
          Enter Product Details
        </legend>
        <label for="prodName">Product Name: </label>
        <input type="text" name="txtProdName" id="prodName" value="<?php echo $row['productName'];?>" /><br /><br />
        <label for="prodPrice">Price: </label>
        <input type="text" name="txtProdPrice" id="prodPrice" value="<?php echo $row['productPrice'];?>" /><br /><br />
        <label for="prodImage">Image Filename: </label>
        <input type="text" name="txtProdImage" id="prodImage" value="<?php echo $row['productImageName'];?>"/>
    </fieldset>
    <input type="submit" name="amendSubmit" id="amendSubmit" />
    <input type="reset" name="amendClear" value="Clear" id="amendClear" />
    <input type="hidden" name="hideProdID" value="<?php echo $row['productID'];?>" />
</form>
</body>
</html>
