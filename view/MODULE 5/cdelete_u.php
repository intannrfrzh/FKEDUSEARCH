<?php 
include("../../db/database.php");
$ComplaintID = $_GET['id'] ;

$delete = "DELETE FROM complaint WHERE ComplaintID ='$ComplaintID'";

    if ($connect->query($delete) === TRUE) {
        echo '<script>alert("Data deleted successfully!.");</script>';
        header('Location: clist_a.php');
    } 
    else {
        echo '<script>alert("Error deleting data.");</script>';
    }
    //echo '<script>window.history.back();</script>';


        // Prepare and execute the DELETE statement
        /*$Q = "DELETE FROM `complaint` WHERE `id`='$ComplaintID";

<script>alert("Data deleted successfully.");</script>

		if(mysqli_query($connect,$Q)){
          header("location: clist_u.php");
       }
       //$result = mysqli_query($connect,$Q);
        //echo "Data deleted successfully!";
        
// 

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "edusearch") or die(mysqli_error($link));

$ComplaintID = $_GET['id'];
$ser_ID = $_POST["ser_ID"];

//SQL query
$query = "SELECT * FROM complaint WHERE ComplaintID = '$ComplaintID'"
	or die(mysqli_connect_error());

//Execute the query (the recordset $rs contains the result)
$result = mysqli_query($link, $query);

$row = mysqli_fetch_assoc($result);

// del to delete a record
$del = "DELETE FROM complaint WHERE ComplaintID='$ComplaintID'";

if (mysqli_query($link, $del)) {
    header('Location: ' . $_SERVER['clist_u.php']);
} else {
  echo "Error deleting record: " . mysqli_error($link);
}*/


?>