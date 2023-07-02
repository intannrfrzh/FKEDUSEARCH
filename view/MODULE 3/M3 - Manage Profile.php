<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['expert'];

?>

<?php 
    
    include("../../db/database.php");
    $select = "SELECT * FROM `experts` WHERE Account_ID = '$Account_ID'";
    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);
    
?>
<?php 
    
    include("../../db/database.php");
    $select1 = "SELECT * FROM cv WHERE EXPERT_CV_ID= 'CV0001'";
    $result1 = mysqli_query($connect,$select1);
    $array1 = mysqli_fetch_assoc($result1);
    
?>
<?php 
    
    include("../../db/database.php");
    $select2 = "SELECT * FROM expert_publi WHERE P_ID= 'PB1223'";
    $result2 = mysqli_query($connect,$select2);
    $array2 = mysqli_fetch_assoc($result2);
    
?>
<?php 
    
    include("../../db/database.php");
    $select3 = "SELECT * FROM area_of_research WHERE ResearchID = 'RS001'";
    $result3 = mysqli_query($connect,$select3);
    $array3 = mysqli_fetch_assoc($result3);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>M3 EXPERT PROFILE (UPDATE) </title>
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
<!--FORMS  -->
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #0091ea;
  color: white;
  font-size: 15px;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #01579b;
}


div.inner-div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}


</style>
</head>

<body>
<!-- Start your project here-->

    <!-- heading with navbar -->

    <?php

    include_once '../../asset/bar/expertheading.html';
    ?>

<!-- main content -->
<center>
        <!--outer box-->
        <div class="container-content">

            <!--inner box-->
            <div class="inner-content">
                <!--start content here-->

                <center> <h1>Expert Profile</h1></center>


<div class="inner-div">
<h3>Account Profile</h3>



  <form action="/action_page.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname"  placeholder="<?php echo $array['E_name']; ?>">

    <label for="lname">Password</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['password']; ?>">

    
    <label for="lname">Age</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['E_age']; ?>">

     
    <label for="lname">Instagram/Twitter/G-mail</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['E_socmed']; ?>">

    <h3>Curriculum Vitae</h3>

    <label for="lname">University Name </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['E_uni']; ?>">
 
    <label for="lname">Course Name </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['E_course']; ?>">

    <label for="lname">Skills </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['E_skill']; ?>">
    
    
    <label for="lname">Scholarship </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['E_scholarships']; ?>">
    
    <label for="status">Academic Status</label>
    <select id="status" name="status">
        <option value=""><?php echo $array['E_acastat']; ?></option>
      <option value="PHD">PHD</option>
      <option value="MASTER">MASTER</option>
      <option value="DEGREE">DEGREE</option>
      <option value="DIPLOMA">DIPLOMA</option>
    </select>

    <label for="area">Area of research</label>
    <select id="area" name="area">
    <option value=""><?php echo $array3['ResearchTopic']; ?></option>

      <option value="">Human physiology</option>
      <option value="">Computer Science and Engineering</option>
      <option value="">Machine Learning</option>
      <option value="">Biotechnology</option>
      <option value="">3D Modelling & Animation</option>
      <option value="">Physical Science</option>
      <option value="">Pharmaceutical Technologies</option>
      <option value="">Material Sciences</option>
      <option value="">Energy and Power Technologies</option>
      <option value="">Artificial Intelligence</option>
      <option value="">Network and Communications</option>
    </select>

    <label for="lname">Publications </label>
    <textarea placeholder="<?php echo $array2['PublicationTopic']; ?>" style="display: flex;"></textarea>
    <br>
  
    <input type="submit" value="Update">
  </form>
</div>

            </div>

        </div>
        
        <!--footer-->
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__inner">
                    <center> ©FK-EduSearch.com.my </center>
                </div>
            </div>
    </center>
    </footer>














</body>
</html>