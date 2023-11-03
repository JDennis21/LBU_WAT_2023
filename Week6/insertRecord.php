<?php
//include connection
global $connection;
include 'connection.php';

//has form been submitted?
if(isset($_POST['subUser'])){
    //collect data from form
    $name = $_POST["txtName"];
    $pass = $_POST["txtPass"];
    //produce query to INSERT INTo table
    $query = "INSERT INTO `users`
              (`userName`, `userPass`) 
              VALUES 
              ('$name', '$pass'";

    //echo $query;
    //exit();
    //run query through connection
    mysqli_query($connection, $query);
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
    //header('location:lab.php')
    header("location:lab.php");
}
        
             
      
  
       
    
	

	
	
?>