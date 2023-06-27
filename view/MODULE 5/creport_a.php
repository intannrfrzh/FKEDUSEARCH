<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMPLAINT REPORT</title>
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

    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

    <!-- Include Google Charts library -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        // Load the Google Charts library
        google.charts.load('current', { 'packages': ['corechart'] });

        // Set a callback function to execute when Google Charts library is loaded
        google.charts.setOnLoadCallback(drawChart);

        // Callback function to draw the chart
        function drawChart() {
            // Fetch the data from the database
            <?php
            // Connect to the database
            include("../../db/database.php");

            // Fetch the total count of complaints by day and complaint type
            $result = $connect->query("SELECT DATE(Complaint_Date) AS Day, COUNT(CASE WHEN Complaint_Type = 'Unsatisfied Experts Feedback' THEN 1 END) AS UnsatisfiedFeedbackCount, COUNT(CASE WHEN Complaint_Type = 'Wrongly Assigned Research Area' THEN 1 END) AS WronglyAssignedAreaCount FROM complaint GROUP BY Day");

            // Create the data table
            echo "var dataTable = new google.visualization.DataTable();";
            echo "dataTable.addColumn('string', 'Day');";
            echo "dataTable.addColumn('number', 'Unsatisfied Experts Feedback');";
            echo "dataTable.addColumn('number', 'Wrongly Assigned Research Area');";

            // Loop through the data and add it to the data table
            while ($row = $result->fetch_assoc()) {
                $day = $row['Day'];
                $unsatisfiedFeedbackCount = (int)$row['UnsatisfiedFeedbackCount'];
                $wronglyAssignedAreaCount = (int)$row['WronglyAssignedAreaCount'];

                echo "dataTable.addRow(['" . $day . "', " . $unsatisfiedFeedbackCount . ", " . $wronglyAssignedAreaCount . "]);";
            }
            ?>

            // Set chart options
            var options = {
                title: 'Report on Complaints by Day and Type',
                width: 800,
                height: 400,
                hAxis: {
                    title: 'Day'
                },
                vAxis: {
                    title: 'Count'
                },
                legend: {
                    position: 'top'
                }
            };

            // Create a bar chart
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(dataTable, options);
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