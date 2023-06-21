<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COMPLAINT view e</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
</head>

<body>

<?php
include("../db/database.php");
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

<form id="manage_complaint" class="table_content">
    <center>
        <h1>COMPLAINT SECTION</h1>

        <label for="Complaint_Type">Complaint Type:</label>
        <select name="Complaint_Type" id="Complaint_Type" disabled>
            <option value="Unsatisfied Experts Feedback">Unsatisfied Expert's Feedback</option>
            <option value="Wrongly Assigned Research Area">Wrongly Assigned Research Area</option>
        </select><br><br>
        
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" cols="50" rows="15" placeholder="<?php echo $complaint['c_desc']; ?>" readonly></textarea><br><br>
        
        <!--<input type="submit" name="submit" value="Update">&nbsp;-->
        <a href="clist_e.php"><button type="button">Back</button></a>
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
