<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COMPLAINT REPORT</title>
    <link rel="stylesheet" href="../../asset/style/style.css">
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
            include("../db/database.php");

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
    <header class="header">
        <div class="header_container">
            <div class="header__inner">
                <!-- <img src="asset/logo.png" alt="logo">-->

                <nav class="nav">
                    <a class="nav__link" href="">Home Page</a>
                    <a> | </a>
                    <a class="nav__link" href="">Discussion Board</a>
                    <a> | </a>
                    <a class="nav__link" href="">Complaints</a>
                    <a> | </a>
                    <a class="nav__link" href="">Report</a>
                    <a> | </a>
                    <a class="nav__link" href="">Profile</a>
                </nav>

            </div>
        </div>
    </header>

    <div class="table-content">
        <!-- Display the chart -->
        <div id="chart_div"></div>
    </div>

    <footer class="footer">
        <div class="footer_container">
            <div class="footer__inner">
                <center> ©FK-EduSearch.com.my </center>
            </div>
        </div>
    </footer>

    <!-- Load the Google Charts library -->
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);
    </script>
</body>

</html>
