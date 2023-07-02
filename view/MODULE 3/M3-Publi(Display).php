<?php
include 'M3-connect.php';

//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['expert'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Publication (Display)</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap//mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../../asset/style/newstyle.css">

    <!--ionicon links-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <!-- Start your project here-->

    <!-- heading with navbar -->
    <?php

    include_once '../../asset/bar/expertheading.html';
    ?>

    <!-- main content -->
    <center>
        <!--outer box-->
        <div class="container-content">

            <!--inner box-->
            <div class="inner-content">
                <!--start content here-->

                <div class="container">
                    <button class="btn btn-secondary btn-lg  my-5"><a href="M3-Publication(Insert).php"
                            class="text-light">Add Publication</a></button>
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
                        <td>' . $publication . '</td>
                        <td>' . $area . '</td>
                        <td>' . $date . '</td>
                        <td>
                    
                        <button class="btn btn-secondary"><a href="M3-Publi(Delete).php? deleteid=' . $P_ID . '"
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

            </div>

        </div>

        <!--footer-->
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner">
                    <center> ©FK-EduSearch.com.my </center>
                </div>
            </div>
    </center>
    </footer>

</body>

</html>