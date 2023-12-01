<?php
include '../connection.php';
global $connection;
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php

//SELECT * FROM search where prodCat = 'Clothing' and prodName like '%C%' ORDER BY prodName

$query = "SELECT *, prodPrice, ROUND(prodPrice, 2) AS RoundedPrice FROM search";

if (isset($_POST["prodSubmit"])) {
    $count = 0;
    $queryAdditions = "";
    if ($_POST["selectSort"] != "all" || !empty($_POST["textSort"])) {
        $queryAdditions = " WHERE";
    }
    if (isset($_POST["selectSort"]) && $_POST["selectSort"] != "all") {
        $count += 1;
        $cat = $_POST["selectSort"];
        $queryAdditions .= " prodCat = '$cat'";
    }
    if (!empty($_POST["textSort"])) {
        $count += 1;
        $text = $_POST["textSort"];
        if ($count > 1) {
            $queryAdditions .= " and prodName like '%$text%'";
        } else {
            $queryAdditions .= " prodName like '%$text%'";
        }
    }
    if (isset($_POST["sortRadio"])) {
        $count += 1;
        if ($_POST["sortRadio"] == "a-z") {
            $queryAdditions .= " ORDER BY prodName";
        } else {
            $queryAdditions .= " ORDER BY prodPrice";
        }
    }
    if ($count > 0) {
        $query .= $queryAdditions;
    }
}

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    ?>
    <table class="searchTable">
        <thead>
        <tr>
            <td>Product Name</td>
            <td>Price</td>
            <td>Category</td>
            <td>Image</td>
        </tr>
        </thead>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $imageURL = $row['prodImage'];
            ?>
            <tbody>
            <tr>
                <td><?php echo $row['prodName'] ?></td>
                <td><?php echo $row['RoundedPrice'] ?></td>
                <td><?php echo $row['prodCat'] ?></td>
                <td>
                    <div id="searchImg">
                        <?php echo "<img src= ../../images/$imageURL height='100' width='100' 
                        alt=" . $row['prodName'] . "/>" ?>
                    </div>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <?php
} else {
    echo "<h3>No results to display</h3>";
}
?>
</body>
</html>
