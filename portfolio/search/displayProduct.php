<?php
include '../connection.php';
global $connection;
?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php

$query = "SELECT *, prodPrice, ROUND(prodPrice, 2) AS RoundedPrice FROM search WHERE 1";

if (isset($_POST["prodSubmit"])) {
    $count = 0;
    $params = array();

    if ($_POST["selectSort"] != "all") {
        $cat = $_POST["selectSort"];
        $query .= " and prodCat = '$cat'";
    }
    if (!empty($_POST["textSort"])) {
        $text = $_POST["textSort"];
        $query .= " and prodName like ?";
        $params = array("s", '%' . $text . '%');
    }
    if (isset($_POST["sortRadio"])) {
        $query .= " ORDER BY";
        if ($_POST["sortRadio"] == "a-z") {
            $query .= " prodName";
        } else {
            $query .= " prodPrice";
        }
    }
}

$stmt = $connection->prepare($query);
if (!empty($params)) {
    $stmt->bind_param($params[0], $params[1]);
}
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
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
    $stmt->close();
} else {
    echo "<h3>No results to display</h3>";
}
?>
</body>
</html>
