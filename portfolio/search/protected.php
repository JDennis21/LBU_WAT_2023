<?php
include '../connection.php';
global $connection;

if (!isset($_SESSION['user'])) {
    header("location: main.php");
}

if (isset($_POST["prodClear"])) {
    $_POST = array();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search</title>
    <link type="text/css" rel="stylesheet" href="../../style/main.css" />
</head>
<header>
    <h1>Josh Dennis c3641149</h1>
</header>
<body>
<h2>Product Search</h2>
<section>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset class="formFit">
            <legend>
                Search
            </legend>
            <br />
            Order by:
            <input type="radio" name="sortRadio" id="sortRadio" value="a-z"
                <?php
                if (isset($_POST["sortRadio"]) && $_POST["sortRadio"] == "a-z") {
                    echo "checked";
                }?>/>
            <label for="sortRadio">A-Z</label>
            <input type="radio" name="sortRadio" id="sortRadio2" value="price"
                <?php
                if (isset($_POST["sortRadio"]) && $_POST["sortRadio"] == "price") {
                    echo "checked";
                }?>/>
            <label for="sortRadio2">Price</label>
            <br /><br />
            <label for="selectSort">Type:</label>
            <select name="selectSort" id="selectSort">
                <option value="all"
                    <?php
                    if (isset($_POST["selectSort"]) && $_POST["selectSort"] == "all") echo "selected";
                    ?>>All
                </option>
                <?php
                $query = "SELECT DISTINCT prodCat FROM search;";
                $result = mysqli_query($connection,$query);
                while ($row = mysqli_fetch_assoc($result)) {
                    $cat = $row["prodCat"];
                    ?>
                    <option value='<?php echo $cat?>'
                        <?php
                        if (isset($_POST["selectSort"]) && $_POST["selectSort"] == "$cat") echo "selected";
                        ?>><?php echo $cat?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <br /><br />
            <label for="textSort">Search:</label>
            <input type="text" name="textSort" id="textSort"
                   value="<?php if (isset($_POST["textSort"])) echo trim($_POST["textSort"]);?>"/>
            <br /><br />
        </fieldset>
        <input type="submit" name="prodSubmit" id="prodSubmit" />
        <input type="submit" value="Clear" name="prodClear" id="prodClear" /><br />
        <br />
    </form>
</section>
<?php
include 'displayProduct.php';
unset($_POST["prodSubmit"]);
?>
<a href="../search/logout.php" >Logout</a>
</body>
</html>