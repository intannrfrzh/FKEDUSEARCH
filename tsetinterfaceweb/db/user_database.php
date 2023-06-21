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

    $name = "user_database";

    $insert="INSERT INTO user_database(Account_ID,Passwords,UserType) VALUES ('','','')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>