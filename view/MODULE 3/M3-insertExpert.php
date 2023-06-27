<?php 
include 'M3-connect.php';


if (isset($_POST['submit'])) {

    $E_ID = $_POST['E_ID'];
    $E_password = $_POST['E_password'];
    $E_name = $_POST['E_name'];
    $E_age = $_POST['E_age'];
    $E_socmed = $_POST['E_socmed'];
    $E_uni = $_POST['E_uni'];
    $E_course = $_POST['E_course'];
    $E_skill = $_POST['E_skill'];
    $E_scholarship = $_POST['E_scholarship'];
    $E_acastat = $_POST['E_acastat'];

    $sql = "INSERT INTO expert_PP (E_ID,E_password,E_name,E_age,E_socmed,E_uni,E_course,E_skill,E_scholarship,E_acastat) values('$E_ID','$E_password','$E_name','$E_age','$E_socmed','$E_uni','$E_course','$E_skill','$E_scholarship','$E_acastat')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<center>' . "Data inserted successfully master Yana" . '</center>';
       header('location:M3-displayforExpert.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>INSERT EXPERT'S PERSONAL INFO</title>
    <link rel="stylesheet" href="M3-style.css">
</head>

<body>

    <ul>
        <li><a class="" href="M3-HomePage.php">Home Page</a></li>
        <li><a class="active">Manage Profile</a></li>
        <li><a class="" href="M3-Publi(Display).php">Publications</a></li>
        <li><a href="M3-Notification.php">Notification</a></li>
        <li><a href=""> Ratings</a></li>
    </ul>

    <div class="container my-5">
        <center>
            <h1>Expert Profile</h1>
        </center>
        <form method="post" action="M3-displayforExpert.php">
            <div class="form-group">
                <label>Account ID</label>
                <input type="text" class="form-control" placeholder="Re-enter your registered account ID" 
                name="E_ID" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Re-enter your registered account password" 
                name="E_password" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="E_name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter your age" name="E_age" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Instagram/Twitter/Gmail/others</label>
                <input type="text" class="form-control" placeholder="Enter your social media if any" name="E_socmed" autocomplete="off">
            </div>
            <div class="form-group">
                <label>University Name</label>
                <input type="text" class="form-control" placeholder="Enter your University Name" name="E_uni" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" class="form-control" placeholder="Enter your Course Name" name="E_course" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Skills</label>
                <input type="text" class="form-control" placeholder="Enter your Skills" name="E_skill" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Scholarship</label>
                <input type="text" class="form-control" placeholder="Enter your Scholarship" name="E_scholarship" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Academic Status</label>
                <input type="text" class="form-control" placeholder="Enter your Academic Status" name="E_acastat" autocomplete="off">
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