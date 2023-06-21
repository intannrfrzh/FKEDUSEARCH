<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>add complaint user</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

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

<header class="header">
    <div class="header_container">
        <div class="header__inner">
        <!-- <img src="asset/logo.png" alt="logo">-->

        <nav class="nav">
            <a class="nav__link" href="">Home Page</a>
            <a> | </a>
            <a class="nav__link" href="">Discussion Board</a>
            <a> | </a>
            <a class="nav__link" href="">Complaints</a>
            <a> | </a>
            <a class="nav__link" href="">Report</a>
            <a> | </a>
            <a class="nav__link" href="">Profile</a>
        </nav>

        </div>
    </div>
</header>

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

<footer class="footer">
    <div class="footer__inner">
        <center>©FK-EduSearch.com.my</center>
    </div>
</footer>

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

</body>
</html>
