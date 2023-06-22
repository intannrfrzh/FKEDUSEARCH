<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php
include("../db/database.php");
if (isset($_POST['submit'])) {

    $selectedUserID = $_POST['submit'];

    $pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '');

    $userId = $selectedUserID;
    $query = "SELECT * FROM reportlist WHERE UserActivity_ID = :UserActivityID";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':UserActivityID', $userId, PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $select = "SELECT * FROM reportlist WHERE UserActivity_ID = '$userId'";
    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);

    $labels = [];
    $values1 = [];
    $values2 = [];
    $values3 = [];
    $values4 = [];

    foreach ($data as $row) {
        $labels[] = $row['UserActivity_ID'];
        $values1[] = $row['Total_Comments'];
        $values2[] = $row['Total_Likes'];
        $values3[] = $row['Total_Post'];
        $values4[] = $row['RetentionRate'];
    }

    $chartData = [
        'labels' => $labels,
        'datasets'=> [
            [
                'data' => $values1,
                'backgroundColor' => [
                    'rgba(0, 123, 255, 0.5)',
                ],
                'borderColor' => 'rgba(0, 123, 255, 1)',
                'borderWidth' => 1,
            ],
            [
                'data' => $values2,
                'backgroundColor' => [
                    'rgba(255, 0, 0, 0.5)',
                ],
                'borderColor' => 'rgba(255, 0, 0, 1)',
                'borderWidth' => 1,
            ],
            [
                'label' => 'Total_Post',
                'data' => $values3,
                'backgroundColor' => 'rgba(144, 238, 144, 0.5)',
                'borderColor' => 'rgba(0, 128, 0, 0.5)',
                'borderWidth' => 1,
            ],
        ],
    ];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>module4chart</title>
    <link rel="stylesheet" href="module4.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #myChart {
            width: 100%;
            height: 100%;
            
        }

        #chartContainer {
            width: 700px;
            height: 300px;
        }

        table, th, td{
        border: 2px solid black;
        border-collapse: collapse;

        }
        .tab{
            border-radius: 10px;
        }

        .tgap{
            padding: 0px 100px 0px 100px;
        }

        .des{
            padding-top: 50px;
            background-color: #38EBD0;
        }
        .footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color: #38EBD0;
    text-align: center;
    color: #fff;
}
    </style>
</head>

<body class="table_content">
    

    <br><hr>
    <?php echo $selectedUserID; ?>
    <center>
    <div id="chartContainer" class="table_content">
        <canvas id="myChart"></canvas>
    </div>
    </center>
    <hr>
    <br><br>
    <div class="des">
    <center>
    <table class="table_content" >
        <tr>
            <td class="tgap">Date</td>
            <td class="tgap"><?php echo $array['List_Date'];?></td>
        </tr>
        <tr>
            <td>Retention Rate</td>
            <td><?php echo $array['RetentionRate'];?></td>
        </tr>
        <tr>
            <td>Engagement Rate</td>
            <td><?php echo $array['Engagement_Rate'];?></td>
        </tr>
        <tr>
            <td>User Satisfaction</td>
            <td><?php echo $array['UserSatisfaction'];?></td>
        </tr>
        <tr>
            <td>Vulnerable Content</td>
            <td><?php echo $array['VulnerableContent'];?></td>
        </tr>
    </table>
    </center>
    
        <br><br><br>
    <script>
        var labels = <?php echo json_encode($chartData['labels']); ?>;
        var values1 = <?php echo json_encode($chartData['datasets'][0]['data']); ?>;
        var values2 = <?php echo json_encode($chartData['datasets'][1]['data']); ?>;
        var values3 = <?php echo json_encode($chartData['datasets'][2]['data']); ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Total_Comments',
                        data: values1,
                        backgroundColor: [
                            'rgba(0, 123, 255, 0.5)',
                        ],
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Total_Likes',
                        data: values2,
                        backgroundColor: [
                            'rgba(255, 0, 0, 0.5)',
                        ],
                        borderColor: 'rgba(255, 0, 0, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Total_Post',
                        data: values3,
                        backgroundColor: 'rgba(144, 238, 144, 0.5)',
                        borderColor: 'rgba(0, 128, 0, 0.5)',
                        borderWidth: 1,
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                plugins: {
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                var label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += context.parsed.y;
                                return label;
                            }
                        }
                    }
                }
            }
        });

    </script>
    <center>
    <form action="module4status.php" method="post">
        <input type="hidden" name="userId" value="<?php echo $userId; ?>">
        <button  type="submit" name="submit" value="resolve">Resolved</button>
        &nbsp;&nbsp;&nbsp;
        <button  type="submit" name="submit" value="onhold">On Hold</button>
        <br><br>
        <button  type="submit" name="submit" value="back">Back</button>
    </form>
    </center>
    <hr>
    </div>
    <footer class="footer">
        <div class="footer__inner">
        <center> ©FK-EduSearch.com.my </center>
        </div>
    </footer>
</body>
</html>

