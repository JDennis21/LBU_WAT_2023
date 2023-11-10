<!DOCTYPE html>
<html lang="en">
<head>
    <title>WAT Practice Phase Exam2</title>
</head>
<body>
<?php
/*The form below will be used to insert a new record into a stock table
*First create the stock table on phpmyadmin using the structure below
*stockID | stockItem | stockQuantity | stockPrice
*----------------------------------------------------
* 1 | Cornflakes | 24 | 1.79
* 2 | Frosties | 56 | 2.49
*complete the form as necessary and produce a separate file to
* complete the insert and return to this page
*/
?>
<h1>Work with databases </h1>
<form method="post" action="addStock.php">
    <label for="stockItem">Item:</label>
    <input type="text" name="txtStockItem" id="stockItem" />
    <label for="stockQuantity">Stock:</label>
    <input type="text" name="txtStockQuantity" id="stockQuantity" />
    <label for="stockPrice">Price:</label>
    <input type="text" name="txtStockPrice" id="stockPrice" />
    <input type="submit" value="Submit" name="stockSubmit" />
</form>
<?php
/*At this point on this page the current stock should be displayed
*produce a separate file to display all stock and include that
* file here
*/
echo "<br />";
include 'displayStock.php';
?>
</body>
</html>
