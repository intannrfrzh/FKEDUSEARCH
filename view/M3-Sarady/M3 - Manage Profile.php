<?php 
    
    include("db/database.php");
    $select = "SELECT * FROM expert WHERE Experts_ID = 'E601'";
    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);
    
?>
<?php 
    
    include("db/database.php");
    $select1 = "SELECT * FROM cv WHERE EXPERT_CV_ID= 'CV0001'";
    $result1 = mysqli_query($connect,$select1);
    $array1 = mysqli_fetch_assoc($result1);
    
?>
<?php 
    
    include("db/database.php");
    $select2 = "SELECT * FROM publication_list WHERE PublicationID= 'PB1223'";
    $result2 = mysqli_query($connect,$select2);
    $array2 = mysqli_fetch_assoc($result2);
    
?>
<?php 
    
    include("db/database.php");
    $select3 = "SELECT * FROM area_of_research WHERE ResearchID = 'R0012'";
    $result3 = mysqli_query($connect,$select3);
    $array3 = mysqli_fetch_assoc($result3);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M3 EXPERT PROFILE (UPDATE) </title>
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

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/*NAV BAR */

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #01579b;
}

.active {
  background-color: #81d4fa;
}

</style>
</head>

<body>


<ul>
  <li><a class="" href="">Home Page</a></li>
  <li><a class="active" >Manage Profile</a></li>
  <li><a href="">Notification</a></li>
  <li><a href=""> Ratings</a></li>
</ul>

<center> <h1>Expert Profile</h1></center>


<div>
<h3>Account Profile</h3>



  <form action="/action_page.php">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname"  placeholder="<?php echo $array['Experts_Name']; ?>">

    <label for="lname">Password</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['E_Password']; ?>">

    
    <label for="lname">Age</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['Experts_Age']; ?>">

     
    <label for="lname">Instagram/Twitter/G-mail</label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array['Experts_Socmed']; ?>">

    <h3>Curriculum Vitae</h3>

    <label for="lname">University Name </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['Uni_Name']; ?>">
 
    <label for="lname">Course Name </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['Course_Name']; ?>">

    <label for="lname">Skills </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['Skills']; ?>">
    
    
    <label for="lname">Scholarship </label>
    <input type="text" id="lname" name="lastname" placeholder="<?php echo $array1['Scholarships']; ?>">
    
    <label for="status">Academic Status</label>
    <select id="status" name="status">
        <option value=""><?php echo $array['Experts_AcedemicStats']; ?></option>
      <option value="">PHD</option>
      <option value="">MASTER</option>
      <option value="">DEGREE</option>
      <option value="">DIPLOMA</option>
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
</body>
</html>