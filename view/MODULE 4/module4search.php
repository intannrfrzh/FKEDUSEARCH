<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>module4search</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <style>
        table, th, td{
        border: 2px solid black;
        border-collapse: collapse;
        }

    </style>
</head>
<?php 
include("../db/database.php");

        //$ID = $_POST['name'] ;

        // Prepare and execute the INSERT statement
		$select = "SELECT * FROM reportlist";
		$result = mysqli_query($connect,$select);
		//$array = mysqli_fetch_assoc($result);
        
		if (mysqli_num_rows($result) > 0) {
			echo '<table>';
            echo '<tr>';
                echo '<td>'."User Activity".'</td>'.'<td>'."Total comment".'</td>'.'<td>'."Total likes".
                '</td>'.'<td>'."Retention rate".'</td>'.'<td>'."User satisfaction".'</td>'.'<td>'."Key performance".
                '</td>'.'<td>'."engagement rate".'</td>'.'<td>'."Report Stat".'</td>'.'<td>'."List Date".'</td>'.'<td>'."Vulnerable Content".'</td>';

            echo '</tr>';
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr>';
				echo '<td>'.$row['UserActivity_ID'].'</td>'. '<td>'.$row['Total_Comments'].'</td>'.'<td>'.$row['Total_Likes'].'</td>'.
                '<td>'.$row['RetentionRate'].'</td>'.'<td>'.$row['UserSatisfaction'].'</td>'.'<td>'.$row['KeyPerformance'].'</td>'.'<td>'.$row['Engagement_Rate'].'</td>'.
                '<td>'.$row['Report_Stat'].'</td>'.'<td>'.$row['List_Date'].'</td>'.'<td>'.$row['VulnerableContent'];
				echo '</tr>';
			}
			echo '</table';
		  
		} else {
			// Authentication failed
			echo 'No data available';
		  }




          

?>