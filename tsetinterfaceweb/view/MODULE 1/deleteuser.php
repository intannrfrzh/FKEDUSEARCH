<?php
include("../../db/database.php");
$Account_ID = $_GET['id'];

//delete data in table based on userType
if ($result = $connect->query("SELECT * FROM user_database WHERE Account_ID ='$Account_ID'")) {

    while ($row = $result->fetch_assoc()) {
        if ($row['UserType'] == 'admin') {
            $delete_a = "DELETE FROM admin WHERE Account_ID ='$Account_ID'";
            $sql1 = $delete_a;
        } else if ($row['UserType'] == 'expert') {
            $delete_e = "DELETE FROM expert WHERE Account_ID ='$Account_ID'";
            $sql1 = $delete_e;
        } else if ($row['UserType'] == 'guser') {
            $delete_u = "DELETE FROM general_users WHERE Account_ID ='$Account_ID'";
            $sql1 = $delete_u;
        }
    }
}

if ($connect->query($sql1) === TRUE) {
    //delete data in user_database
    $delete = "DELETE FROM user_database WHERE Account_ID ='$Account_ID'";

    if ($connect->query($delete) === TRUE) {
        echo '<script>alert("Data deleted successfully.");</script>';
    } else {
        echo '<script>alert("Error deleting data.");</script>';
    }
    echo '<script>window.history.back();</script>';

}

?>