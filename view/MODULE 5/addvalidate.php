<?php 

/*include("../db/database.php");

$Complaint_Type = $_POST['Complaint_Type'] ;
$description = $_POST['description'] ;
$User_ID =['U411'] ;
$Experts_ID =['E601'] ;

        // Prepare and execute the INSERT statement
        $insert = "INSERT INTO complaint(Complaint_Type,c_desc,User_ID, Experts_ID) VALUES ('$Complaint_Type','$description','U411','E601')";
		//$result = mysqli_query($connect,$insert);

        if ($connect->query($insert)) {
            echo '<script>alert("Data inserted successfully!.");</script>';
        } 
        else {
            echo '<script>alert("Error inserting data.");</script>';
        }
        echo '<script>window.history.back();</script>';
		*/



        include("../../db/database.php");
        
        $Complaint_Type = $_POST['Complaint_Type'];
        $description = $_POST['description'];
        
        
        // Retrieve E_name from the experts table
$expertsQuery = "SELECT E_name FROM experts";
$expertsResult = $connect->query($expertsQuery);

if ($expertsResult->num_rows > 0) {
    // Fetch the first row since we assume only one expert's name is needed
    $expertRow = $expertsResult->fetch_assoc();
    $E_name = $expertRow['E_name'];
} else {
    // Handle the case when no experts are found
    $E_name = '';
}

// Retrieve Account_ID from the user_database table
$userQuery = "SELECT Account_ID FROM user_database";
$userResult = $connect->query($userQuery);

if ($userResult->num_rows > 0) {
    // Fetch the first row since we assume only one Account_ID is needed
    $userRow = $userResult->fetch_assoc();
    $Account_ID = $userRow['Account_ID'];
} else {
    // Handle the case when no user is found
    $Account_ID = '';
}
        
        
        // Prepare the INSERT statement
        $insert = $connect->prepare("INSERT INTO complaint (Complaint_Type, c_desc, Account_ID, E_name) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $Complaint_Type, $description, $Account_ID, $E_name);
        
        // Execute the prepared statement
        if ($insert->execute()) {
            echo '<script>alert("Data inserted successfully!");</script>';
            header('Location: clist_u.php');
        } else {
            echo '<script>alert("Error inserting data.");</script>';
        }
        
        
        $insert->close();
        $connect->close();
        


?>