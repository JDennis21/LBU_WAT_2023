<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<?php
include 'connection.php';
global $connection;

$query = "SELECT * FROM product;";
$result = mysqli_query($connection, $query);
?>

<table class="displayTable">
    <tr id="displayTableHeader">
        <td>Product Name</td>
        <td>Price</td>
        <td>Image</td>
        <td>Amend</td>
        <td>Delete</td>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $imageURL = $row['productImageName'];
        echo "<tr>";
        echo "<td class='displayTableBody'>" . $row['productName'] . "</td>";
        echo "<td class='displayTableBody'>" . $row['productPrice'] . "</td>";
        echo "<td class='displayTableBody'>" . "<img src= ../images/$imageURL height='100' width='100' 
        alt=" . $row['productName'] . " />" . "</td>";
        echo "<td class='displayTableBody'>" .
            '<a href="../crud/amendProduct.php?id=' . $row['productID'] . '">Amend</a>' . "</td>";
        echo "<td class='displayTableBody'>" .
            '<a href="../crud/deleteProduct.php?id=' . $row['productID'] . '">Delete</a>' . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>