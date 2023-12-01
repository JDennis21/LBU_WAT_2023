<?php
include 'showErrors.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link type="text/css" rel="stylesheet" href="" />
    <title>Result</title>
</head>
<body>
<h1>Insert a record</h1>
<form method="post" action="debugInsert.php">
    <input type="text" name="txtName" />
    <br />
    <input type="text" name="txtCategory" />
    <br />
    <input type="submit" value="Submit" name="subEvent" />
</form>
<?php
echo "<br />";
//display results
include 'debugSelect.php';
?>
</body>
</html>
