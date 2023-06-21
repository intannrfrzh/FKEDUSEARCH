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

    $name = "general_users";

    $insert="INSERT INTO general_users(User_ID,User_Name ,User_Password ,User_Age,User_Socmed,User_AcedemicStats,ResearchID,Account_ID ) VALUES ('U412','Syamsul bin Rahim','Syam_@123','20','SSRam_20(Twitter)','Degree','R0089','AC1313')";
    
    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>