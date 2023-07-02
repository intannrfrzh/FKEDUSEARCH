<?php
include 'M3-connect.php';
if (isset($_POST['submit'])) {
    $id = $_POST['E_ID'];
    $password = $_POST['E_password'];
    $name = $_POST['E_name'];
    $age = $_POST['E_age'];
    $socmed = $_POST['E_socmed'];
    $uni = $_POST['E_uni'];
    $course = $_POST['E_course'];
    $skill = $_POST['E_skill'];
    $scholarship = $_POST['E_scholarship'];
    $acastat = $_POST['E_acastat'];
    
    $sql = "INSERT INTO experts (E_ID,E_password,E_name,E_age,E_socmed,E_uni,E_course,E_skill,E_scholarship,E_acastat) values('$id','$password','$name','$age','$socmed','$uni','$course','$skill','$scholarship','$acastat')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
        echo '<center>' . "Data inserted successfully master Yana" . '</center>';
    } else {
        die(mysqli_error($con));
    }
}
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
        <button class="btn btn-primary my-5"><a href="M3-insertExpert.php" class="text-light">Back</a>
            <form action="M3-insertExpert.php" method="post">
        </button>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Account ID</th>
                    <th scope="col">Password</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Social Media</th>
                    <th scope="col">University</th>
                    <th scope="col">Course</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Scholarship</th>
                    <th scope="col">Academic Status</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "SELECT * FROM expert WHERE E_ID = '$id' ";
                $result = mysqli_query($con, $sql);
                $array = mysqli_fetch_assoc($result);

                $id = $array['E_ID'];
                $password = $array['E_password'];
                $name = $array['E_name'];
                $age = $array['E_age'];
                $socmed = $array['E_socmed'];
                $uni = $array['E_uni'];
                $course = $array['E_course'];
                $skill = $array['E_skill'];
                $scholarship = $array['E_scholarship'];
                $acastat = $array['E_acastat'];
                //$id = $array['E_ID'];

                echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $password . '</td>
        <td>' . $name . '</td>
        <td>' . $age . '</td>
        <td>' . $socmed . '</td>
        <td>' . $uni . '</td>
        <td>' . $course . '</td>
        <td>' . $skill . '</td>
        <td>' . $scholarship . '</td>
        <td>' . $acastat . '</td>
        <td>
        <button class="btn btn-info"><a href="M3-updateExpert.php?
        updateid= '.$id.' " class="text-light">Update</a></button><br>
        <td>
        <button class="btn btn-secondary"><a href="M3-HomePage.php" 
        class="text-light">Exit</a></button>
        </td>

        </tr>';
                ?>
                </form>
            </tbody>
        </table>
    </div>
</body>

</html>