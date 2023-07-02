<html>

<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['admin'];

// Access the user ID
echo 'User ID: ' . $Account_ID;
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>VIEW ADMIN</title>
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

<?php
include("../../db/database.php");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $Account_ID = $_POST['Account_ID'];
    
    //(admin)
    $Admin_Name = $_POST['Name'];
    $Admin_IC = $_POST['IC'];
    $Admin_Phone_Num = $_POST['PhoneNo'];
    $Admin_Pass = $_POST['Admin_Pass'];

    //(user)


    //(expert)

    // Update the values in the database
    $update_a = "UPDATE admin SET Admin_Name = '$Admin_Name', Admin_IC = '$Admin_IC', Admin_Phone_Num = '$Admin_Phone_Num' WHERE Account_ID = '$Account_ID'";
    $update_ap = "UPDATE user_database SET password = '$Admin_Pass' WHERE Account_ID = '$Account_ID'";

    // Execute the update queries
    if ($connect->query($update_a) === TRUE && $connect->query($update_ap) === TRUE) {
        echo "Value updated successfully.";
    } else {
        echo "Error updating value: ";
    }
}

// Retrieve the existing admin data from the database
if (isset($_GET['id'])) {
    $Account_ID = $_GET['id'];

    $select = "SELECT * FROM user_database JOIN admin ON user_database.Account_ID = admin.Account_ID WHERE user_database.Account_ID = '$Account_ID'";
    $result = $connect->query($select);
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $Account_ID = $row['Account_ID'];
        $Admin_Name = $row['Admin_Name'];
        $Admin_IC = $row['Admin_IC'];
        $Admin_Phone_Num = $row['Admin_Phone_Num'];
        $Admin_Pass = $row['password'];
    } else {
        echo "No record found.";
    }
}
?>

<body>
    <!-- Start your project here-->

    <!-- heading with navbar -->

    <?php

    include_once '../../asset/bar/heading.html';
    ?>

    <!-- main content -->
    <center>
        <!--outer box-->
        <div class="container-content">

            <!--start content here-->
            <form class="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <center>
                    <h1>VIEW ADMIN</h1>
                    <hr class="border border-dark border-2 opacity-50">
                    <!--form to view the admin's data-->
                    <div class="row mb-3">
                        <label for="Account_ID" class="col-sm-3 col-form-label">ACCOUNT ID:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Account_ID"
                                value="<?php echo $Account_ID; ?>" readonly>
                        </div>
                    </div>
                    <br>
                    <!-- Display admin form -->
                    <div class="row mb-3">
                        <label for="Admin_Name" class="col-sm-3 col-form-label">NAME:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Name" id="Admin_Name"
                            value="<?php echo isset($Admin_Name) ? $Admin_Name : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_IC" class="col-sm-3 col-form-label">IC NUMBER:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="IC" id="Admin_IC"
                                value="<?php echo isset($Admin_IC) ? $Admin_IC : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_Phone_Num" class="col-sm-3 col-form-label">PHONE NUMBER:</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="PhoneNo" id="Admin_Phone_Num"
                                value="<?php echo isset($Admin_Phone_Num) ? $Admin_Phone_Num : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_Pass" class="col-sm-3 col-form-label">PASSWORD:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Admin_Pass" id="Admin_Pass"
                                value="<?php echo isset($Admin_Pass) ? $Admin_Pass : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <!--button-->
                    <div class="right-allign-button">
                        <input class="btn btn-light" type="submit" name="submit" value="Update">
                        <a class="btn btn-light" href="MANAGE_USER_PROFILE.php"><ion-icon
                                name="checkmark-sharp"></ion-icon></a>
                    </div>

                </center>

            </form>

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