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

    $name = "publication_list";

    $insert="INSERT INTO publication_list(PublicationID,PublicationTopic,Experts_ID,Total_P ) VALUES ('PB1224','Great Anatomy of Human body','E602','20')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>