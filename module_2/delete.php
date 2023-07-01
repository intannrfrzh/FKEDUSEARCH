<?php 
include("db/dbcon.php");
$id=$_GET['id'];


$Q="DELETE FROM `posts` WHERE `id`='$id'";
if(mysqli_query($conn,$Q)){
    echo "<script>window.location='view-posts.php';</script>";
}

?>