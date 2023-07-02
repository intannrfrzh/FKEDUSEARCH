<html>

<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['admin'];

// Access the user ID
echo 'User ID: ' . $Account_ID;
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMPLAINT VIEW E</title>
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
        button{
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

        

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
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

<?php
include("../../db/database.php");
$ComplaintID = $_GET['id'];
//$c_desc= $_GET['description'] ;

//retrieve data based on ComplaintID
$result = $connect->query("SELECT * FROM complaint WHERE ComplaintID ='$ComplaintID'");
    $complaint = $result->fetch_assoc();
    
?>

<?php 
       /* include("../db/database.php");

            $Q="Select * from complaint order by ComplaintID desc";
            $re=mysqli_query($connect,$Q);
            $complaint=mysqli_fetch_assoc($re)

        /*include("../db/database.php");
            $Q = "SELECT * FROM complaint WHERE ComplaintID ='$ComplaintID'";
            $re=mysqli_query($connect,$Q);
            $complaint=mysqli_fetch_assoc($re)*/


             ?>


<form id="manage_complaint" class="table_content">
    <center>
        <h1>COMPLAINT SECTION</h1>

        <label for="Complaint_Type">Complaint Type:</label>
        <select name="Complaint_Type" id="Complaint_Type" disabled>
            <option value="Unsatisfied Experts Feedback">Unsatisfied Expert's Feedback</option>
            <option value="Wrongly Assigned Research Area">Wrongly Assigned Research Area</option>
        </select><br><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="50" rows="15" style="background-color:#67EEB5;" placeholder="<?php echo $complaint['c_desc']; ?>" readonly></textarea><br><br>
        
        <!--<input type="submit" name="submit" value="Update">&nbsp;-->
        <a href="clist_a.php"><button type="button">Back</button></a>
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
