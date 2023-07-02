<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>VIEW USER</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

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
                            <input class="form-control" type="text" name="Account_ID" value="<?php echo $Account_ID; ?>" readonly>
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_Name" class="col-sm-3 col-form-label">NAME:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Name" id="Admin_Name" value="<?php echo $Admin_Name; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_IC" class="col-sm-3 col-form-label">IC NUMBER:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="IC" id="Admin_IC" value="<?php echo $Admin_IC; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_Phone_Num" class="col-sm-3 col-form-label">PHONE NUMBER:</label>
                        <div class="col-sm-9">
                            <input class="form-control" name="PhoneNo" id="Admin_Phone_Num" value="<?php echo $Admin_Phone_Num; ?>">
                        </div>
                    </div>
                    <br>

                    <div class="row mb-3">
                        <label for="Admin_Pass" class="col-sm-3 col-form-label">PASSWORD:</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="Admin_Pass" id="Admin_Pass" value="<?php echo $Admin_Pass; ?>">
                        </div>
                    </div>
                    <br>

                    <!--button-->
                    <div class="right-allign-button">
                        <input class="btn btn-light" type="submit" name="submit" value="Update">
                        <a class="btn btn-light" href="MANAGE_USER_PROFILE.php"><ion-icon name="checkmark-sharp"></ion-icon></a>
                    </div>

                </center>
            </form>

            <!-- Print the general_users table -->
            <?php
            echo "<h2>General Users Table</h2>";
            echo "<table>";
            echo "<tr><th>User ID</th><th>User Name</th><th>User Password</th><th>User Age</th><th>User Socmed</th><th>User AcedemicStats</th><th>Research ID</th><th>Account ID</th></tr>";

            if ($result_users->num_rows > 0) {
                while ($row_users = $result_users->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row_users['User_ID']."</td>";
                    echo "<td>".$row_users['User_Name']."</td>";
                    echo "<td>".$row_users['User_Password']."</td>";
                    echo "<td>".$row_users['User_Age']."</td>";
                    echo "<td>".$row_users['User_Socmed']."</td>";
                    echo "<td>".$row_users['User_AcedemicStats']."</td>";
                    echo "<td>".$row_users['ResearchID']."</td>";
                    echo "<td>".$row_users['Account_ID']."</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>

            <!-- Print the Account ID and Password from the user_database table -->
            <?php
            echo "<h2>Account IDs and Passwords</h2>";
            echo "<table>";
            echo "<tr><th>Account ID</th><th>Password</th></tr>";

            if ($result_accounts->num_rows > 0) {
                while ($row_accounts = $result_accounts->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row_accounts['Account_ID']."</td>";
                    echo "<td>".$row_accounts['password']."</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            ?>

        </div>
        <!--footer-->
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner">
                    <center> ©FK-EduSearch.com.my </center>
                </div>
            </div>
        </footer>
    </center>

    <!-- MDB -->
    <script type="text/javascript" src="../../Bootstrap/mdb.min.js"></script>
</body>
</html>
