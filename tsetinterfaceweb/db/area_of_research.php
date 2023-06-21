
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

    $name = "area_of_research";

    $insert="INSERT INTO area_of_research(ResearchID,ResearchTopic,Total_R) VALUES ('R0089','Computer Science','2')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>