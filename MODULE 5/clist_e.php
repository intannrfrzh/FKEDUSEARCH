<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>COMPLAINT LIST E</title>
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>

    <style>
        table, th, td {
  border: 1px solid black;
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

    <form id="manage_complaint" class="table_content">
        <center><h1>COMPLAINTS LIST</h1></center>
        
    <h2>Complaints List</h2>
    

    <center>
    <table>
        <thead>
        <tr>
            <th>NO</th>
            <th>Expert ID</th>
            <th>Complaint ID</th>
            <th>DateTime</th>
            <th>Complaint type</th>
            <th>Description</th>
            <th>Complaint Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody id="table-body">
            
        <?php 
        include("../db/database.php");

            $Q="Select * from complaint order by ComplaintID desc";
            $re=mysqli_query($connect,$Q);
            $i=1;
             while($complaint=mysqli_fetch_assoc($re)){
             ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $complaint['Experts_ID'] ?></td>
                    <td><?php echo $complaint['ComplaintID'] ?></td>
                    <td><?php echo $complaint['Complaint_Date'] ?></td>
                     <td><?php echo $complaint['Complaint_Type'] ?></td>
                     <td><?php echo $complaint['c_desc'] ?></td>
                     <td><?php echo $complaint['Complaint_Status'] ?></td>
                     <td>
                         <button type="button"><span  class="button__icon"><a href="cview_e.php?id=<?php echo $complaint['ComplaintID']; ?>"><ion-icon name="eye-outline"></ion-icon></a></span></button>

                         
                    </td>
                                    
                </tr>
            <?php
            $i++;
            }
            ?>
            <?php
            //import data from database
            /*try{
                require"../db/database.php";
                $stmt = $connect->prepare("SELECT * FROM complaint ORDER BY ComplaintID DESC");
				$stmt->execute();
				//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
				$count = 1;

				//foreach ($result as $row) :
            
            ?>

        <tr>
        <td><?php echo $count++; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['expert_id']; ?></td>
            <td><?php echo $row['complaint_id']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['time']; ?></td>
            <td><?php echo $row['complaint_type']; ?></td>
            <td><?php echo $row['desc']; ?></td>
            <td><?php echo $row['complaint_stat']; ?></td>
            <td>
                <a href="#" class="edit_btn" >Edit</a>
                <a href="#" class="del_btn">Delete</a>
                <a href="#" class="view_btn">View</a>

        </tr>
        <?php
			//endforeach;
        }catch (PDOException $e) {
			    echo $e->getMessage();
			}*/
		?>
        <script>
    
        </tbody>
            
    </table>
    </center>

    </form>

        <footer class="footer">
            <div class="footer__inner">
            <center> ©FK-EduSearch.com.my </center>
            </div>
        </footer>

</body>


