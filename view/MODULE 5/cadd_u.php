<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ADD COMPLAINT U</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap//mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../../asset/style/newstyle.css">

    <!--ionicon links-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <style>
        input{
            background-color: #1E8844; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius:12px;
        }

        option, select{/* Green */
            border: none;
            color: black;
            padding: 15px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius:12px;
        }
        
    </style>
</head>

<body>
    <!-- Start your project here-->

    <!-- heading with navbar -->

    <?php

    include_once '../../asset/bar/heading.html';
    ?>

    <!-- main content -->
    <center>
        <!--outer box-->
        <div class="container-content">

            <!--inner box-->
            <div class="inner-content">
                <!--start content here-->

<form id="manage_complaint" class="table_content" action="addvalidate.php" method="post">
    <center>
        <h1>COMPLAINT SECTION</h1>

        
        <label for="Complaint_Type">Complaint Type:</label>
        <select name="Complaint_Type" id="Complaint_Type">
            <option value="Unsatisfied Experts's Feedback">Unsatisfied Experts Feedback</option>
            <option value="Wrongly Assigned Research Area">Wrongly Assigned Research Area</option>
        </select><br><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="50" rows="15" style="background-color:#67EEB5;" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </center>
</form>


<?php
// Check if the form is submitted
/*if(isset($_POST['submit'])){
    
    // Retrieve the data from the form
    $complaintType = $_POST['complaintType'];
    $description = $_POST['description'];
    
    // Create a database connection
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "edusearch";
    
    $conn = new mysqli($servername, $dbname);
    
    // Check the connection
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Prepare the insert statement
    $stmt = $conn->prepare("INSERT INTO complaint (complaintType, description) VALUES (?, ?)");
    
    // Bind the parameters to the statement
    $stmt->bind_param("ss", $complaintType, $description);
    
    // Execute the statement
    if($stmt->execute()){
        echo "Data inserted successfully!";
    }else{
        echo "Error inserting data: " . $stmt->error;
    }
    
    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}*/
?>

</div>

</div>

<footer class="footer">
    <div class="footer_container">
        <div class="footer__inner">
            <center> ©FK-EduSearch.com.my </center>
        </div>
    </div>
</center>
</footer>
</body>
