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



        include("../db/database.php");
        
        $Complaint_Type = $_POST['Complaint_Type'];
        $description = $_POST['description'];
        $User_ID = 'U411';
        $Experts_ID = 'E601';
        
        // Prepare the INSERT statement
        $insert = $connect->prepare("INSERT INTO complaint (Complaint_Type, c_desc, User_ID, Experts_ID) VALUES (?, ?, ?, ?)");
        $insert->bind_param("ssss", $Complaint_Type, $description, $User_ID, $Experts_ID);
        
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