
<?php
include 'M3-connect.php';
//$E_ID = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $E_ID = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $socmed = $_POST['socmed'];
    $uni = $_POST['uni'];
    $course = $_POST['course'];
    $skill = $_POST['skill'];
    $scholarship = $_POST['scholarship'];
    $acastat = $_POST['acastat'];


   // SQL query to update the record
   $sql = "UPDATE expert_pp SET E_ID='$E_ID', E_password='$password',
   E_name='$name', E_age=$age, E_socmed='$socmed',
   E_uni='$uni', E_course='$course', E_skill='$skill',
   E_scholarship='$scholarship', E_acastat='$acastat'
   WHERE E_ID='$E_ID'";

   // Execute the query
   $result = mysqli_query($con, $sql);

   // Check if the update was successful
   if ($result) {
       echo '<center>Data updated successfully.</center>';
   } else {
       echo '<center>Failed to update data.</center>';
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
        <li><a href="">Notification</a></li>
        <li><a href=""> Ratings</a></li>
    </ul>

    <div class="container my-5">
        <center>
            <h1>Expert Profile</h1>
        </center>
        <form  method="post" action="M3-updateExpert.php">
            <div class="form-group">
                <label>Account ID</label>
                <input type="text" class="form-control" placeholder="" 
                name="id" autocomplete="off"
                value='' >
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Re-enter your registered account password" 
                name="password" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" placeholder="Enter Your Name" 
                name="name" autocomplete="off"
                value=>
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" placeholder="Enter your age" 
                name="age" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Instagram/Twitter/Gmail/others</label>
                <input type="text" class="form-control" placeholder="Enter your social media if any" 
                name="socmed" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>University Name</label>
                <input type="text" class="form-control" placeholder="Enter your University Name" 
                name="uni" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" class="form-control" placeholder="Enter your Course Name" 
                name="course" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Skills</label>
                <input type="text" class="form-control" placeholder="Enter your Skills" 
                name="skill" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Scholarship</label>
                <input type="text" class="form-control" placeholder="Enter your Scholarship" 
                name="scholarship" autocomplete="off"
                value=''>
            </div>
            <div class="form-group">
                <label>Academic Status</label>
                <input type="text" class="form-control" placeholder="Enter your Academic Status" 
                name="acastat" autocomplete="off"
                value=''>
            </div>

    </div>
    <center>
        <button type="submit" class="btn btn-primary" name="submit" 
        value="submit" href="M3-displayforExpert.php" >Update</button>
    </center>
    </form>

</body>

</html>

