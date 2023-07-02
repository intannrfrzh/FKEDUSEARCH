<?php 
include 'M3-connect.php';


if (isset($_POST['submit'])) {

    $publication = $_POST['publication'];
    $area = $_POST['area'];
    

    $sql = "INSERT INTO expert_publi (publication,area) values('$publication','$area')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<center>' . "Data inserted successfully master Yana" . '</center>';
       header('location:M3-Publi(Display).php');
    } else {
        die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
     crossorigin="anonymous">

    <title>INSERT PUBLICATIONS DATA</title>
    <link rel="stylesheet" href="M3-style.css">
</head>

<body>

<ul>
        <li><a class="" href="M3-HomePage.php">Home Page</a></li>
        <li><a class="" href="M3-insertExpert.php">Manage Profile</a></li>
        <li><a class="active" href="M3-Publication(Insert).php">Publications</a></li>
        <li><a href="M3-Notification.php">Notification</a></li>
        <li><a href="">Ratings</a></li>
    </ul>

    <div class="container my-5">
        <center>
            <h1>Insert New Publication </h1>
        </center>
        <form method="post" action="">
            <div class="form-group">
                <label>Publication</label>
                <input type="text" class="form-control" placeholder="" 
                name="publication" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Area of Research</label>
                <input type="text" class="form-control" placeholder="" 
                name="area" autocomplete="off">
            </div>
         

    </div>
    <center>
    <button type="submit" 
    class="btn btn-primary btn-lg btn-block" name="submit"
     value="submit">Submit</button>
    </center>
    </form>

</body>

</html>