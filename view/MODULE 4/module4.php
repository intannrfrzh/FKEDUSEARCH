<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>module4</title>
    <link rel="stylesheet" href="module4.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

</head>

<body>

    <header class="table_content3">
        <div class="header">
            <nav class="">
                <a class="" href="">Home Page </a>
                <a class="" href="">Discussion Board </a>
                <a class="" href="">Complaints </a>
                <a class="" href="http://localhost/FKEDUSEARCH/view/MODULE%204/module4.php">Report </a>
                <a class="" href="">Profile</a>
            </nav>
        </div>
    </header>

    <div class="table_content2">
        <form id="manage_user" action='module4chart.php' method="post">
            <center>
                <h1>Report and Analytics</h1>
            </center>
            <center>
                <br><br>
                <?php
                include("../../db/database.php");

                $select = "SELECT * FROM expert";
                $result = mysqli_query($connect, $select);

                $select2 = "SELECT * FROM general_users";
                $result2 = mysqli_query($connect, $select2);

                $select3 = "SELECT * FROM reportlist";
                $result3 = mysqli_query($connect, $select3);

                ?>
                <div>
                    <?php if (mysqli_num_rows($result) > 0) { ?>

                        <table>
                            <tr>
                                <td class="tgap">Experts</td>
                                <td class="tgap">Action</td>
                                <td class="tgap">Status</td>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) { ?>
                            <?php $row3 = mysqli_fetch_assoc($result3) ?>
                                <tr>
                                    <td>
                                        <center><?php echo $row['Experts_ID'] ?></center>
                                    </td>
                                    <td>
                                        <center>
                                            <button type="submit" name="submit" value="<?php echo $row['Experts_ID'] ?> ">View</button>
                                            <input type="hidden" name="UserActivityID" value="<?php $row['Experts_ID'] ?>">
                                        </center>
                                    </td>
                                    <td>
                                        <center><?php echo $row3['Report_Stat'] ?></center>
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

                <table>
                    <tr>
                        <td class="tgap">General Users</td>
                        <td class="tgap">Action</td>
                        <td class="tgap">Status</td>
                    </tr>
                    <?php
                    while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                    <?php $row3 = mysqli_fetch_assoc($result3) ?>
                        <tr>
                            <td>
                                <center><?php echo $row2['User_ID'] ?></center>
                            </td>
                            <td>
                                <center>
                                    <button type="submit" name="submit" value="<?php echo $row2['User_ID'] ?> ">View</button>
                                    <input type="hidden" name="UserActivityID" value="<?php $row2['User_ID'] ?>">
                                </center>
                            </td>
                            <td>
                                <center><?php echo $row3['Report_Stat'] ?></center>
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



<footer class="footer">
    <div class="footer__inner">
        <center> ©FK-EduSearch.com.my </center>
    </div>
</footer>

</body>

</html>