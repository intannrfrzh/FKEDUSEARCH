<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Database</title>
</head>
<body>
    <?php
    //include("admin.php");
    include("database.php");

    $name = "expert";

    $insert="INSERT INTO expert(Experts_Name, Experts_Age, Experts_AcademicStats, Experts_CV_ID, InteractionStatus, Experts_Socmed, PublicationID, Account_ID, ResearchID) VALUES ('E602','Amalina binti Sufian','L88NA99','24','Master ','CV0030','Active  ','Emalinnnnn_24(Instagram)','PB1224','AC21016','R0023')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
      
    ?>
</body>
</html>