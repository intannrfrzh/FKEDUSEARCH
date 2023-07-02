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
                    <h1>VIEW USER</h1>
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
        </footer>
    </center>

    <!-- MDB -->
    <script type="text/javascript" src="../../Bootstrap/mdb.min.js"></script>
</body>
</html>
