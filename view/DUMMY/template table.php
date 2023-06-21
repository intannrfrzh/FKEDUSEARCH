<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TEMPLATE TABLE</title>
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

    include_once '../../asset/bar/heading.html';
    ?>

    <!-- main content -->
    <center>
        <!--outer box-->
        <div class="container-content">

            <!--inner box-->
            <div class="inner-content">
                <!--start content here-->
                <!--list of registered admin-->
                <form id="manage_user" class="table_content" method="post">
                    <center>
                        <h2 class="list">ADMIN LIST</h2>
                        <hr class="border border-dark border-2 opacity-50" style="width: 70%;">
                        
                        <table class="table table-success table-striped-columns table-bordered border-black">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>User ID</th>
                                    <th>Username</th>
                                    <th>User Type</th>
                                    <th>USER ACTION</th>
                                </tr>
                            </thead>

                            <tbody id="table-body">
                                <!--CALL DATA FROM DATABASE-->
                                <?php
                                include("../../db/database.php");
                                $select_a = "SELECT * FROM user_database
                             JOIN admin ON user_database.Account_ID = admin.Account_ID
                              ";
                                $result = $connect->query($select_a);

                                $i = 1;

                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <!--NO / USER ID/ USERNAME / USER TYPE / USER ACTION-->
                                    <tr>
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Account_ID'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row['Admin_Name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['UserType'] ?>
                                        </td>
                                        <!--EDIT / DELETE (add own button later)-->
                                        <td>
                                            <center>
                                                <a class="btn btn-light"
                                                    href="../MODULE 1/VIEW_ADMIN.php?id=<?php echo $row['Account_ID']; ?>">
                                                    <ion-icon name="pencil-sharp"></ion-icon></a>
                                                <a class="btn btn-light"
                                                    href="deleteuser.php?id=<?php echo $row['Account_ID']; ?>"><ion-icon
                                                        name="trash-outline"></ion-icon></a>
                                            </center>
                                        </td>

                                    </tr>
                                    <!--increment of i for no-->
                                    <?php
                                    $i++;
                                }
                                ?>
                            </tbody>

                        </table>
                    </center>
                    <br>

                </form>

            </div>

        </div>

        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner">
                    <center> ©FK-EduSearch.com.my </center>
                </div>
            </div>
    </center>
    </footer>
</body>