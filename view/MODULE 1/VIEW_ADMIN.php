<html>

<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['admin'];


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
    $UserType = $_POST['UserType'];

    // Check the user type
    if ($UserType === 'admin') {
        $Admin_Name = $_POST['Name'];
        $Admin_IC = $_POST['IC'];
        $Admin_Phone_Num = $_POST['PhoneNo'];
        $Admin_Pass = $_POST['Admin_Pass'];

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
    elseif ($UserType === 'guser') {
        $User_Name = $_POST['Name'];
        $User_Age = $_POST['Age'];
        $User_Socmed = $_POST['Socmed'];
        $User_AcademicStats = $_POST['AcademicStats'];
        $ResearchID = $_POST['ResearchID'];
        $User_Pass = $_POST['User_Pass'];

        // Update the values in the database
        $update_u = "UPDATE general_users SET User_Name = '$User_Name' , User_Age = '$User_Age' , User_Socmed = '$User_Socmed' , User_AcademicStats = '$User_AcademicStats' WHERE Account_ID = '$Account_ID'";
        $update_ap = "UPDATE user_database SET password = '$User_Pass' WHERE Account_ID = '$Account_ID'";

        // Execute the update queries
        if ($connect->query($update_u) === TRUE && $connect->query($update_ap) === TRUE) {
            echo "Value updated successfully.";
        } else {
            echo "Error updating value: ";
        }
    }
    elseif ($UserType === 'expert') {
        $E_name = $_POST['Name'];
        $E_age = $_POST['Age'];
        $E_socmed = $_POST['Socmed'];
        $E_uni = $_POST['Uni'];
        $E_course = $_POST['course'];
        $E_skill = $_POST['skill'];
        $E_scholarship = $_POST['scholarship'];
        $E_acastat = $_POST['acastat'];
        $ResearchID = $_POST['ResearchID'];
        $E_Pass = $_POST['E_Pass'];

        // Update the values in the database
        $update_e = "UPDATE experts SET E_name = '$E_name' , E_age = '$E_age', E_socmed = '$E_socmed', E_uni = '$E_uni', E_course = '', E_skill = '$E_skill', E_scholarship = '$E_scholarship', E_acastat = '$E_acastat' WHERE Account_ID = '$Account_ID'";
        $update_ap = "UPDATE user_database SET password = '$E_Pass' WHERE Account_ID = '$Account_ID'";

        // Execute the update queries
        if ($connect->query($update_e) === TRUE && $connect->query($update_ap) === TRUE) {
            echo "Value updated successfully.";
        } else {
            echo "Error updating value: ";
        }
    }
    
}

// Retrieve the existing user data from the database based on userType
if (isset($_GET['id']) && isset($_GET['type'])) {
    $Account_ID = $_GET['id'];
    $UserType = $_GET['type'];

    $select = "";

    if ($UserType === 'admin') {
        $select = "SELECT * FROM user_database JOIN admin ON user_database.Account_ID = admin.Account_ID WHERE user_database.Account_ID = '$Account_ID'";
    }
    elseif ($UserType === 'guser') {
        $select = "SELECT * FROM user_database JOIN general_users ON user_database.Account_ID = general_users.Account_ID WHERE user_database.Account_ID = '$Account_ID'";
    }
    elseif ($UserType === 'expert') {
        $select = "SELECT * FROM user_database JOIN experts ON user_database.Account_ID = experts.Account_ID WHERE user_database.Account_ID = '$Account_ID'";
    }
    

    $result = $connect->query($select);
    $row = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $Account_ID = $row['Account_ID'];
    
        if ($UserType === 'admin') {
            $Admin_Name = $row['Admin_Name'];
            $Admin_IC = $row['Admin_IC'];
            $Admin_Phone_Num = $row['Admin_Phone_Num'];
            $Admin_Pass = $row['password'];
        } 
        elseif ($UserType === 'guser') {
            $User_Name = $row['User_Name'];
            $User_Age = $row['User_Age'];
            $User_Socmed = $row['User_Socmed'];
            $User_AcademicStats = $row['User_AcademicStats'];
            $User_Pass = $row['password'];
        } 
        elseif ($UserType === 'expert') {
            $E_name = $row['E_name'];
            $E_age = $row['E_age'];
            $E_socmed = $row['E_socmed'];
            $E_uni = $row['E_uni'];
            $E_course = $row['E_course'];
            $E_skill = $row['E_skill'];
            $E_scholarship = $row['E_scholarship'];
            $E_acastat = $row['E_acastat'];
            $E_Pass = $row['password'];
        }
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

    // Check if the form should be displayed
    $displayForm = isset($_GET['id']) && isset($_GET['type']);
    ?>

    <!-- main content -->
    <center>
        <!--outer box-->
        <div class="container-content">

            <!--start content here-->
            <?php if ($displayForm): ?>
            <form class="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <center>
                    <h1>VIEW <?php echo strtoupper($UserType); ?></h1>
                    <hr class="border border-dark border-2 opacity-50">
                    <!--form to view/update the user's data-->
                    <div class="row mb-3">
                        <label for="Account_ID" class="col-sm-3 col-form-label">ACCOUNT ID:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Account_ID"
                                value="<?php echo $Account_ID; ?>" readonly>
                        </div>
                    </div>
                    <br>

                    <?php if ($UserType === 'admin'): ?>
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

                    <?php elseif ($UserType === 'guser'): ?>
                    <!-- Display general user form -->
                    <div class="row mb-3">
                        <label for="User_Name" class="col-sm-3 col-form-label">NAME:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Name" id="User_Name"
                                value="<?php echo isset($User_Name) ? $User_Name : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="User_Age" class="col-sm-3 col-form-label">AGE:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Age" id="User_Age"
                                value="<?php echo isset($User_Age) ? $User_Age : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="User_Socmed" class="col-sm-3 col-form-label">SOCIAL MEDIA:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Socmed" id="User_Socmed"
                                value="<?php echo isset($User_Socmed) ? $User_Socmed : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="User_AcademicStats" class="col-sm-3 col-form-label">ACADEMIC STATUS:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="AcademicStats" id="User_AcademicStats"
                                value="<?php echo isset($User_AcademicStats) ? $User_AcademicStats : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="User_Pass" class="col-sm-3 col-form-label">PASSWORD:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="User_Pass" id="User_Pass"
                                value="<?php echo isset($User_Pass) ? $User_Pass : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <?php elseif ($UserType === 'expert'): ?>
                    <!-- Display expert form -->
                    <div class="row mb-3">
                        <label for="E_name" class="col-sm-3 col-form-label">NAME:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Name" id="E_name"
                                value="<?php echo isset($E_name) ? $E_name : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_age" class="col-sm-3 col-form-label">AGE:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Age" id="E_age"
                                value="<?php echo isset($E_age) ? $E_age : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_socmed" class="col-sm-3 col-form-label">SOCIAL MEDIA:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Socmed" id="E_socmed"
                                value="<?php echo isset($E_socmed) ? $E_socmed : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_uni" class="col-sm-3 col-form-label">UNIVERSITY:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Uni" id="E_uni"
                                value="<?php echo isset($E_uni) ? $E_uni : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_course" class="col-sm-3 col-form-label">COURSE:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="course" id="E_course"
                                value="<?php echo isset($E_course) ? $E_course : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_skill" class="col-sm-3 col-form-label">SKILL:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="skill" id="E_skill"
                                value="<?php echo isset($E_skill) ? $E_skill : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_scholarship" class="col-sm-3 col-form-label">SCHOLARSHIP:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="scholarship" id="E_scholarship"
                                value="<?php echo isset($E_scholarship) ? $E_scholarship : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="E_acastat" class="col-sm-3 col-form-label">ACADEMIC STATUS:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="acastat" id="E_acastat"
                                value="<?php echo isset($E_acastat) ? $E_acastat : ''; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="User_Pass" class="col-sm-3 col-form-label">PASSWORD:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="E_Pass" id="E_Pass"
                                value="<?php echo isset($E_Pass) ? $E_Pass : ''; ?>">
                        </div>
                    </div>
                    <br>
                    <?php endif; ?>

                    <!--button-->
                    <div class="right-allign-button">
                        <input class="btn btn-light" type="submit" name="submit" value="Update">
                        <a class="btn btn-light" href="MANAGE_USER_PROFILE.php"><ion-icon
                                name="checkmark-sharp"></ion-icon></a>
                    </div>
                </center>

            </form>
            <?php else: ?>
            <p>No record found.</p>
            <?php endif; ?>

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

