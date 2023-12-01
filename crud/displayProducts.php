<?php
include 'connection.php';
global $connection;

$query = "SELECT * FROM product;";
$result = mysqli_query($connection, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<table class="crudTable">
    <thead>
    <tr>
        <td>Product Name</td>
        <td>Price</td>
        <td>Image</td>
        <td>Amend</td>
        <td>Delete</td>
    </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $imageURL = $row['productImageName'];
        ?>
        <tbody>
        <tr>
            <td><?php echo $row['productName'] ?></td>
            <td><?php echo $row['productPrice'] ?></td>
            <td>
                <div class="crudImg">
                    <img src="../images/<?php echo $imageURL ?>" height='100' width='100'
                         alt='<?php echo $row['productName'] ?>' />
                </div>
            </td>
            <td>
                <a href="../crud/amendProduct.php?id='<?php echo $row['productID'] ?>'">Amend</a>
            </td>
            <td>
                <a href="../crud/deleteProduct.php?id='<?php echo $row['productID'] ?>'">Delete</a>
            </td>
        </tr>
        </tbody>
        <?php
    }
    ?>
</table>
</body>
</html>