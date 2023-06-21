<?php 

include("../../db/database.php");

$ID = $_POST['name'] ;
$password = $_POST['password'] ;
$types = $_POST['type'] ;

        // Prepare and execute the INSERT statement
        $insert = "INSERT INTO user_database(Account_ID,password,UserType) VALUES ('$ID','$password','$types')";
		$result = mysqli_query($connect,$insert);
        echo '<script>alert("Data inserted successfully!");</script>';
        echo '<script>window.history.back();</script>';

?>