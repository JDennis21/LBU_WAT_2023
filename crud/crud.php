<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud</title>
    <link type="text/css" rel="stylesheet" href="../style/main.css" />
</head>
<body>
<header>
    <h1>Josh Dennis C3641149</h1>
</header>
<section id="container">
    <h1>Manage Products</h1>
    <?php
    include 'displayProducts.php';
    ?>
    <br />
    <form method="post" action="../crud/insertProduct.php">
        <fieldset class="formFit">
            <legend>
                Enter New Product Details
            </legend>
            <label for="prodName">Product Name:<br /></label>
            <input type="text" name="txtProdName" id="prodName" /> <br />
            <br />
            <label for="prodPrice">Price:<br /></label>
            <input type="text" name="txtProdPrice" id="prodPrice" /> <br />
            <br />
            <label for="prodImage">Image Filename:<br /></label>
            <input type="text" name="txtProdImage" id="prodImage" /> <br />
            <br />
            <input type="submit" name="productSubmit" id="prodSubmit" />
            <input type="reset" value="Clear" name="clear" id="prodClear" /><br />
            <br />
        </fieldset>
    </form>
</section>
<footer>
    <br />
    <small><a href="../html/WatIndex.html">Home</a></small>
</footer>
</body>
</html>