<?php
if (isset($_POST['submit'])) {
    include("../../db/database.php");
    $selectedUserID = $_POST['submit'];
    $pdo = new PDO('mysql:host=localhost;dbname=edusearch', 'root', '');
    $userId = $selectedUserID;

    $select = "SELECT * FROM experts WHERE Account_ID='$userId' ";
    $result = mysqli_query($connect, $select);
    $array = mysqli_fetch_assoc($result);

    $select2 = "SELECT * FROM area_of_research WHERE ResearchID='R0012' ";
    $result2 = mysqli_query($connect, $select2);
    $array2 = mysqli_fetch_assoc($result2);

    $select3 = "SELECT * FROM expertrating WHERE Experts_ID='E602' ";
    $result3 = mysqli_query($connect, $select3);
    $array3 = mysqli_fetch_assoc($result3);

    
    
    $query = "SELECT * FROM expertrating WHERE Experts_ID = :Experts_ID";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':Experts_ID', $userId, PDO::PARAM_STR);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $labels = [];
    $values1 = [];
    $values2 = [];
    $values3 = [];

    foreach ($data as $row) {
        $labels[] = $row['Experts_ID'];
        $values1[] = $row['onestar'];
        $values2[] = $row['twostar'];
        $values3[] = $row['threestar'];
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m3report</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <?php 
        echo $array['Experts_Name']."<br>";
        echo $array2['ResearchTopic'];
    ?>
    <canvas id="myChart"></canvas>

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
                        label: 'One Star',
                        data: values1,
                        backgroundColor: [
                            'rgba(0, 123, 255, 0.5)',
                        ],
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Two Star',
                        data: values2,
                        backgroundColor: [
                            'rgba(255, 0, 0, 0.5)',
                        ],
                        borderColor: 'rgba(255, 0, 0, 1)',
                        borderWidth: 1,
                    },
                    {
                        label: 'Three Star',
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
</body>
</html>