<?php 

/*include("../db/database.php");

//$ComplaintID = $_GET['id']; 
$Complaint_Type = $_GET['Complaint_Type'] ;
$description= $_GET['description'] ;
//$User_ID='U411';
//$Expert_ID='E601';

        // Prepare and execute the UPDATE statement
        $query = "UPDATE `complaint` SET `c_desc`= '$description' WHERE Complaint_Type='$Complaint_Type'";
		$result = mysqli_query($connect, $query);

        if ($result){
        echo '<script>alert("Data updated successfully!.");</script>';
    } 
    else {
        echo '<script>alert("Error update data.");</script>';
    }
    echo '<script>window.history.back();</script>';*/

  

include("../../db/database.php");

if (isset($_POST['submit']) && isset($_GET['id']) && isset($_POST['Complaint_Type'])) {
    $ComplaintID = $_GET['id'];
    $Complaint_Type = $_POST['Complaint_Type'];

    // Prepare and execute the UPDATE statement
    $query = "UPDATE `complaint` SET `Complaint_Type` = '$Complaint_Type' WHERE ComplaintID = '$ComplaintID'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        //echo '<script>alert("Data updated successfully!");</script>';
        //header('Location: clist_u.php'); // Go back to the previous page after successful update
        //exit();
        if (isset($_POST['submit']) && isset($_GET['id']) && isset($_POST['description'])) {
            $ComplaintID = $_GET['id'];
            $description = $_POST['description'];
        
            // Prepare and execute the UPDATE statement
            $query = "UPDATE `complaint` SET `c_desc` = '$description' WHERE ComplaintID = '$ComplaintID'";
            $result = mysqli_query($connect, $query);
        
            if ($result) {
                echo '<script>alert("Data updated successfully!");</script>';
                header('Location: clist_u.php'); // Go back to the previous page after successful update
                exit();
            } else {
                echo '<script>alert("Error updating data.");</script>';
            }
        } else {
            echo '<script>alert("Invalid request.");</script>';
            echo '<script>window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Error updating data.");</script>';
    }
} else {
    echo '<script>alert("Invalid request.");</script>';
    echo '<script>window.history.back();</script>';
}

/*if (isset($_POST['submit']) && isset($_GET['id']) && isset($_POST['description'])) {
    $ComplaintID = $_GET['id'];
    $description = $_POST['description'];

    // Prepare and execute the UPDATE statement
    $query = "UPDATE `complaint` SET `c_desc` = '$description' WHERE ComplaintID = '$ComplaintID'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo '<script>alert("Data updated successfully!");</script>';
        header('Location: clist_u.php'); // Go back to the previous page after successful update
        exit();
    } else {
        echo '<script>alert("Error updating data.");</script>';
    }
} else {
    echo '<script>alert("Invalid request.");</script>';
    echo '<script>window.history.back();</script>';
}
	*/

?>