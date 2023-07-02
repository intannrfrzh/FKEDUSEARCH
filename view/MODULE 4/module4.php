<!DOCTYPE html>
<html lang="en">

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
    <title>module4</title>
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

<?php

include_once '../../asset/bar/heading.html';
?>

<!-- main content -->
<center>
        <!--outer box-->
        <div class="container-content">

            <!--inner box-->
            <div class="inner-content">
                <!--start content here-->

                <div class="table_content2">
        <form id="manage_user" action='module4chart.php' method="post">
            <center>
                <h1>Report and Analytics</h1>
            </center>
            <center>
                <br><br>
                <?php
                include("../../db/database.php");

                $select = "SELECT * FROM experts";
                $result = mysqli_query($connect, $select);

                $select2 = "SELECT * FROM general_users";
                $result2 = mysqli_query($connect, $select2);

                $select3 = "SELECT * FROM reportlist";
                $result3 = mysqli_query($connect, $select3);

                ?>
                <div>
                    <?php if (mysqli_num_rows($result) > 0) { ?>

                        <table class="table table-success table-striped-columns table-bordered border-black">
                        <thead>    
                        <tr>
                                <th>Experts</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                            <?php $row3 = mysqli_fetch_assoc($result3) ?>
                                <tr>
                                    <td>
                                        <center><?php echo $row['Account_ID'] ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <button type="submit" name="submit" value="<?php echo $row['Account_ID'] ?> ">View</button>
                                            <input type="hidden" name="UserActivityID" value="<?php $row['Account_ID'] ?>">
                                        </center>
                                    </td>
                                    <td>
                                        <center><?php echo isset($row3['Report_Stat']) ?  $row3['Report_Stat'] :''; ?></center>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                </div>
            <?php } else {
                        echo 'No data available';
                    } ?>
<br><br><br><br><br>
            <?php if (mysqli_num_rows($result2) > 0) { ?>

                <table class="table table-success table-striped-columns table-bordered border-black">
                <thead>    
                <tr>
                        <th>General Users</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                    <?php $row3 = mysqli_fetch_assoc($result3) ?>
                        <tr>
                            <td>
                                <center><?php echo $row2['Account_ID'] ?></center>
                            </td>
                            <td>
                                <center>
                                    <button type="submit" name="submit" value="<?php echo $row2['Account_ID'] ?> ">View</button>
                                    <input type="hidden" name="UserActivityID" value="<?php $row2['Account_ID'] ?>">
                                </center>
                            </td>
                            <td>
                                <center><?php echo isset($row3['Report_Stat']) ? $row3['Report_Stat'] : ''; ?></center>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
    </div>
<?php } else {
                echo 'No data available';
            } ?>
</center>
</form>
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