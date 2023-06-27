<?php
include 'M3-connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Insert Data </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="M3-insertExpert.php" class="text-light">Add User</a>

        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Account ID</th>
                    <th scope="col">Password</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Social Medias</th>
                    <th scope="col">University</th>
                    <th scope="col">Course</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Academic Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <tbody>
            <form action="">
                <?php

                $sql = "SELECT * FROM expert_PP ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $E_ID = $row['E_ID'];
                        $E_password = $row['E_password'];
                        $E_name = $row['E_name'];
                        $E_age = $row['E_age'];
                        $E_socmed = $row['E_socmed'];
                        $E_uni = $row['E_uni'];
                        $E_course = $row['E_course'];
                        $E_skill = $row['E_skill'];
                        $E_scholarship = $row['E_scholarship'];
                        $E_acastat = $row['E_acastat'];

                        echo ' <tr>
                        <th scope="row">' . $E_ID . '</th>
                        <td>' . $E_password . '</td>
                        <td>' . $E_name . '</td>
                        <td>' . $E_age . '</td>
                        <td>' . $E_socmed . '</td>
                        <td>' . $E_uni . '</td>
                        <td>' . $E_course . '</td>
                        <td>' . $E_skill . '</td>
                        <td>' . $E_scholarship . '</td>
                        <td>' . $E_acastat . '</td>
                        <td>
                        <button class="btn btn-info"><a href="M3-updateExpert.php?
                        updateid= '.$E_ID.' " class="text-light">Update</a></button><br>
                        <td>
                        <button class="btn btn-secondary"><a href="M3-HomePage.php" 
                        class="text-light">Exit</a></button>
                        </td>
    

                        </tr>';
                    }
                }

                ?>
            </form>
            </tbody>
        </table>
    </div>
</body>

</html>


<?php 
if (isset($_POST['submit'])) {

    $eid = $_POST['E_ID'];
    $password = $_POST['E_password'];
    $name = $_POST['E_name'];
    $age = $_POST['E_age'];
    $socmed = $_POST['E_socmed'];
    $uni = $_POST['E_uni'];
    $course = $_POST['E_course'];
    $skill = $_POST['E_skill'];
    $scholarship = $_POST['E_scholarship'];
    $acastat = $_POST['E_acastat'];

    $sql="UPDATE expert_pp set E_password='$password', E_name='$name', E_age=$age, E_socmed='$socmed',E_uni='$uni',E_course='$course', E_skill='$skill', E_scholarship='$scholarship', E_acastat='$acastat' 
    WHERE eid='$E_ID'";

    $result = mysqli_query($con,$sql);
    if ($result) {
        echo '<center>' . "Data updated successfully master Yana" . '</center>';
        
    } else {
        die(mysqli_error($con));
    }
}
?> 