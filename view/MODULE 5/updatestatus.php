<?php 
/*include("../db/database.php");

if (isset($_POST['submit']) && isset($_GET['id']) && isset($_POST['Complaint_Status'])) {
    $ComplaintID = $_GET['id'];
    $Complaint_Status = $_POST['complaint_status'];

    // Prepare and execute the UPDATE statement
    $query = "UPDATE `complaint` SET `Complaint_Status` = '$Complaint_Status' WHERE ComplaintID = '$ComplaintID'";
    
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo '<script>alert("Data updated successfully!");</script>';
        header('Location: clist_a.php'); // Go back to the previous page after successful update
        exit();
    } else {
        echo '<script>alert("Error updating data.");</script>';
    }
} else {
    echo '<script>alert("Invalid request.");</script>';
    echo '<script>window.history.back();</script>';
}*/


include("../../db/database.php");

if (isset($_POST['submit']) && isset($_GET['id']) && isset($_POST['Complaint_Status'])) {
    $ComplaintID = $_GET['id'];
    $Complaint_Status = $_POST['Complaint_Status'];

    // Prepare and execute the UPDATE statement
    $query = "UPDATE `complaint` SET `Complaint_Status` = '$Complaint_Status' WHERE ComplaintID = '$ComplaintID'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo '<script>alert("Data updated successfully!");</script>';
        header('Location: clist_a.php'); // Go back to the previous page after successful update
        exit();
    } else {
        echo '<script>alert("Error updating data.");</script>';
    }
} else {
    echo '<script>alert("Invalid request.");</script>';
    echo '<script>window.history.back();</script>';
}




?>