<html>

<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['admin'];

?>

<head>
    <title>Report on Total Post</title>
    <?php include('../../asset/container/links.php'); ?>
</head>
<?php
include_once('../../asset/bar/heading.html');
?>

<body>


    <div class="wrapper">
        


        <!-- Page Content  -->

        <div id="content">
            <div class="row">


            </div>
            <div class="row bg-white">
                <div class="col-md-12 bg mb-3">
                    <h1 class="text-center text-white">
                        last Week posts
                    </h1>
                </div>
                <div class="col-md-12">
                    <canvas id="barChart" height="100"></canvas>

                </div>
            </div>
            <div class="row bg-white" style="overflow-y:scroll;">
                <div class="col-md-12 bg mb-3">
                    <h1 class="text-center text-white">
                        last Month posts
                    </h1>
                </div>
                <div class="col-md-12">
                    <canvas id="barChart1" height="100"></canvas>

                </div>
            </div>
        </div>
    </div>


    <script>
        var ctx = document.getElementById("barChart").getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php
                $QQ = "Select`date` FROM `posts` group by `date` order by `date` desc limit 7";
                $re = mysqli_query($connect, $QQ);
                $i = 1;
                while ($date = mysqli_fetch_assoc($re)) {
                    if ($i == 1) {
                        echo '"' . $date['date'] . '"';
                    } else {
                        echo ',"' . $date['date'] . '"';
                    }
                    $i++;
                }
                ?>],
                datasets: [{
                    label: 'posts',
                    data: [<?php
                    $QQ = "Select count(*) as total FROM `posts` group by `date` order by `date` desc limit 7";
                    $re = mysqli_query($connect, $QQ);
                    $i = 1;
                    while ($date = mysqli_fetch_assoc($re)) {
                        if ($i == 1) {
                            echo '"' . $date['total'] . '"';
                        } else {
                            echo ',"' . $date['total'] . '"';
                        }
                        $i++;
                    }
                    ?>],
                    backgroundColor: "#1ECFB5"
                }]
            }
        });
    </script>


    <script>
        var ctx = document.getElementById("barChart1").getContext('2d');
        var barChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php
                $QQ = "Select`date` FROM `posts` group by `date` order by `date` desc limit 30";
                $re = mysqli_query($connect, $QQ);
                $i = 1;
                while ($date = mysqli_fetch_assoc($re)) {
                    if ($i == 1) {
                        echo '"' . $date['date'] . '"';
                    } else {
                        echo ',"' . $date['date'] . '"';
                    }
                    $i++;
                }
                ?>],
                datasets: [{
                    label: 'posts',
                    data: [<?php
                    $QQ = "Select count(*) as total FROM `posts` group by `date` order by `date` desc limit 30";
                    $re = mysqli_query($connect, $QQ);
                    $i = 1;
                    while ($date = mysqli_fetch_assoc($re)) {
                        if ($i == 1) {
                            echo '"' . $date['total'] . '"';
                        } else {
                            echo ',"' . $date['total'] . '"';
                        }
                        $i++;
                    }
                    ?>],
                    backgroundColor: "#1ECFB5"
                }]
            }
        });
    </script>
</body>

</html>