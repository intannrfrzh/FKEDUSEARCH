<!DOCTYPE html>
<html lang="en">

<?php
// Start session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['expert'])) {
    // Redirect to the login page or handle unauthorized access
    header('Location: login.php');
    exit;
}

// Retrieve the user ID from the session
$Account_ID = $_SESSION['expert'];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Module 3</title>
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
        <div class="container-content" style="height:650px;">
        <center>
                <h1>Report and Analytics</h1>
            </center>
            <!--inner box-->
            <div class="inner-content" style="background-color:white; height:550px;">
                <!--start content here-->

                <div class="table_content2">
        <form id="manage_user" action="m3report.php" method="post">
            
            <center>
                <br><br><br><br><br><br><br>
                <?php
                include("../../db/database.php");

                // Prepare the SQL statement
                $select = "SELECT * FROM experts WHERE Account_ID = ?";
                $stmt = $connect->prepare($select);
                $stmt->bind_param("s", $Account_ID);

                // Execute the prepared statement
                if ($stmt->execute()) {
                    // Get the result
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $array = $result->fetch_assoc();
                        echo '<center>' . $array['E_name'] . '</center>';
                        echo '<center><button type="submit" name="submit" value="' . $array['Account_ID'] . '">View</button></center>';
                        echo '<input type="hidden" name="UserActivityID" value="' . $array['Account_ID'] . '">';
                    } else {
                        echo '<center>No user found.</center>';
                    }
                } else {
                    echo '<center>Error retrieving data from the database.</center>';
                }

                $stmt->close();
                $connect->close();
                ?>
            </center>
        </form>
    </div>

            </div>

        </div>
        
        <!--footer-->
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner" >
                    <center> ©FK-EduSearch.com.my </center>
                </div>
            </div>
    </center>
    </footer>
</body>




















    


</html>
