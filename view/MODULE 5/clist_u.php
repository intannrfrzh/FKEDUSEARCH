<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMPLAINT LIST U</title>
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

    <form id="manage_complaint" class="table_content">
        <center><h1>COMPLAINTS LIST</h1></center>
        <hr class="border border-dark border-2 opacity-50" style="width: 70%;">
        

<center><button type="button"><span  class="button__icon"><a href="cadd_u.php"><ion-icon name="add-circle-sharp"></ion-icon></a></span></button></center><br><br>

    <center>
    <table class="table table-success table-striped-columns table-bordered border-black">
        <thead>
        <tr>
            <th>NO</th>
            <th>Expert Name</th>
            <th>Complaint ID</th>
            <th>Date</th>
            <th>Complaint type</th>
            <th>Description</th>
            <th>Complaint Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody id="table-body">
            
        <?php 
        include("../../db/database.php");

            $Q="Select * from complaint order by ComplaintID desc";
            $re=mysqli_query($connect,$Q);
            $i=1;
             while($complaint=mysqli_fetch_assoc($re)){
             ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $complaint['E_name'] ?></td>
                    <td><?php echo $complaint['ComplaintID'] ?></td>
                    <td><?php echo $complaint['Complaint_Date'] ?></td>
                     <td><?php echo $complaint['Complaint_Type'] ?></td>
                     <td><?php echo $complaint['c_desc'] ?></td>
                     <td><?php echo $complaint['Complaint_Status'] ?></td>
                     <td>
                         
                         <button type="button"><span  class="button__icon"><a href="cupdate_u.php?id=<?php echo $complaint['ComplaintID']; ?>"><ion-icon name="create-outline"></ion-icon></a></span></button>
                         
                    </td>
                                    
                </tr>
            <?php
            $i++;
            }
            ?>
        </tbody>
            
    </table>
    </center>

    </form>

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


