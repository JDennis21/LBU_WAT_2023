<?php
include 'showErrors.php';
include 'connection.php';
global $connection;

if (isset($_POST['subEvent'])) {
    $name=$_POST['txtName'];
    $cat=$_POST['txtCategory'];

    $query="INSERT INTO events
	(`eventName`, `eventCategory`)
	VALUES
	('$name','$cat')";

    mysqli_query($connection, $query);

    header('location:debug.php');

}
?>

