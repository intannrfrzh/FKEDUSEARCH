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

    $name = "admin";

    $insert="INSERT INTO admin(Admin_Name,Admin_Phone_Num,Admin_IC,Account_ID) VALUES ('Wardah binti Ghafor','011-49556823','731112-05-3254','A532')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>