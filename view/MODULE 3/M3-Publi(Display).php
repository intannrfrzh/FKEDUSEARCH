<?php 
include 'M3-connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="M3-style.css">
    <title>Publication (Delete)</title>
</head>
<body>


   
    <ul>
        <li><a class="" href="M3-HomePage.php">Home Page</a></li>
        <li><a class="" href="M3-insertExpert.php">Manage Profile</a></li>
        <li><a class="active" href="">Publications</a></li>
        <li><a href="M3-Notification.php">Notification</a></li>
        <li><a href=""> Ratings</a></li>
    </ul>


<div class="container">
<button class="btn btn-secondary btn-lg  my-5"><a href="M3-Publication(Insert).php" class="text-light">Add Publication</a></button>
        <table class="table m-5">
            <thead class="thead-dark ">
                <tr>
                    <th scope="col">Publication ID.</th>
                    <th scope="col">Publications</th>
                    <th scope="col">Area of Research</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>

                </tr>
            </thead>

            <tbody>
            <form action="">
                <?php

                $sql = "SELECT * FROM expert_publi ";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $P_ID = $row['P_ID'];
                        $publication = $row['publication'];
                        $area = $row['area'];
                        $date = $row['date'];

                        echo ' <tr>
                        <th scope="row">' . $P_ID . '</th>
                        <td>' . $publication. '</td>
                        <td>' . $area . '</td>
                        <td>' . $date . '</td>
                        <td>
                    
                        <button class="btn btn-secondary"><a href="M3-Publi(Delete).php? deleteid='.$P_ID.'"
                        class="text-light">Delete</a></button>
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
