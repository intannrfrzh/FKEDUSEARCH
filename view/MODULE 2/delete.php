<?php 
include("../../db/database.php");
$id=$_GET['id'];


$Q="DELETE FROM `posts` WHERE `id`='$id'";
if(mysqli_query($connect,$Q)){
    echo "<script>window.location='view-posts.php';</script>";
}

?>