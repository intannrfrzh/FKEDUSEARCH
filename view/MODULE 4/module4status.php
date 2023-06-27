<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php
    include("../../db/database.php");
    $userId = $_POST['userId'];
    $select = "SELECT * FROM reportlist WHERE USERID = '$userId'";

    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $submitValue = isset($_POST["submit"]) ? $_POST["submit"] : null;
  switch ($submitValue) {
    case "resolve":
        $update = "UPDATE reportlist SET Report_Stat='Resolved' WHERE USERID = '$userId'";
        if(mysqli_query($connect,$update))
        {
            header("Location:module4.php");
        }
        else{
            echo "cannot update";
        }
        
        break;

    case "onhold":
        $update = "UPDATE reportlist SET Report_Stat='On Hold' WHERE USERID = '$userId'";
        mysqli_select_db($connect, "login");
        if(mysqli_query($connect,$update))
        {
            header("Location:module4.php");
        }
        else{
            echo "cannot update";
        }
        break;
    case "back":
            header("Location:module4.php");
        break;
    }
}
    ?>

</body>
</html>