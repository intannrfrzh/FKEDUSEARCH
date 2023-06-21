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

    $name = "CV";

    $insert="INSERT INTO CV(EXPERT_CV_ID,Uni_Name,Course_Name,Skills,Scholarships,Experts_ID) VALUES ('CV0030','University of Oxford ','Software Engineering Science Computer ','Confident in HTML5 and Wordpress content management','USAC Scholarship','E602')";

    if (mysqli_query($connect, $insert)) {
        echo "New record created successfully";
      }
    ?>
</body>
</html>