<?php
include 'M3-connect.php';
if(isset($_GET['deleteid'])){
    $P_ID=$_GET['deleteid'];

    $sql="DELETE FROM expert_publi WHERE P_ID=$P_ID";
    $result = mysqli_query($con, $sql);
    if ($result){
        header('location:M3-Publi(Display).php');
    }else{
        die(mysqli_error($con));
    }
}

?>