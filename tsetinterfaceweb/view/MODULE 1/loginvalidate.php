<?php 

include("../../db/database.php");

$ID = $_POST['name'] ;
$password = $_POST['password'] ;
$types = $_POST['type'] ;

 // Prepare and execute the INSERT statement
 $select = "SELECT * FROM user_database WHERE Account_ID = '$ID' AND password = '$password' AND UserType = '$types'";
 $result = mysqli_query($connect,$select);
 $array = mysqli_fetch_assoc($result);


	if ($types == "guser") 
	{

		if ($result && mysqli_num_rows($result) > 0) {
			// Authentication successful
			// Start session and redirect to homepage
			session_start();
			$_SESSION['generaluserloggedin'] = true;
			header("Location: MANAGE_USER_PROFILE.php");
			//nanti tukar location ke user homepage
			exit();
		  } else {

			echo '<script>alert("Invalid email or password");</script>';
			echo '<script>window.history.back();</script>';

		  }
		  
		  
        
		
	}	 
	elseif ($types == "expert") 
	{

		if ($result && mysqli_num_rows($result) > 0) {
			// Authentication successful
			// Start session and redirect to homepage
			session_start();
			$_SESSION['generaluserloggedin'] = true;
			header("Location: MANAGE_USER_PROFILE.php");
			//nanti tukar location ke expert homepage
			exit();
		  } else {
			// Authentication failed
			echo '<script>alert("Invalid email or password");</script>';
			echo '<script>window.history.back();</script>';
		  }
		
	}
	else
	{
		if ($result && mysqli_num_rows($result) > 0) {
			// Authentication successful
			// Start session and redirect to homepage
			session_start();
			$_SESSION['generaluserloggedin'] = true;
			header("Location: MANAGE_USER_PROFILE.php");
			exit();
		  } else {
			// Authentication failed
			echo '<script>alert("Invalid email or password");</script>';
			echo '<script>window.history.back();</script>';
		  }
	}

?>