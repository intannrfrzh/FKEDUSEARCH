    <!-- PSPSPSPS CHANGE WHAT NEEDED OKIEE!!! -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TOTAL NUMBER OF USER REPORT</title>
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

    <!--ion-icon link-->
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

    <!-- Include Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load the Visualization API and the corechart package
        google.charts.load('current', { 'packages': ['corechart'] });

        // Set a callback to run when the Google Visualization API is loaded
        google.charts.setOnLoadCallback(drawChart);

        // Callback function to create and populate the data table, and draw the chart
        function drawChart() {
            // Create the data table
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'userType');
            data.addColumn('number', 'total');

            <?php
            // Connect to database
            include("../../db/database.php");

            // Fetch the total of different user types from the database
            $result = $connect->query("SELECT userType, COUNT(*) as total FROM user_database GROUP BY userType");

            // Loop through the data and add it to the chart's data table
            while ($row = $result->fetch_assoc()) {
                echo "data.addRow(['" . $row['userType'] . "', " . $row['total'] . "]);";
            }

            ?>

            // Set chart options
            var options = {
                title: 'Report on User Type',
                width: 800,
                height: 400
            };

            // Instantiate and draw the chart, passing in the options
            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>

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
                <!-- Display the chart -->
                <div id="chart_div"></div>

            </div>

        </div>


        <!--footer-->
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner">
                    ©FK-EduSearch.com.my
                </div>
            </div>
    </center>
    </footer>

    <style>

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    </style>
</body>