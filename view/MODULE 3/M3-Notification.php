<!doctype html>
<html lang="en">

<?php
//start session
session_start();
// Retrieve the user ID from the query parameter
$Account_ID = $_SESSION['expert'];

?>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>INSERT EXPERT'S PERSONAL INFO</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../Bootstrap//mdb.min.css" />

  <!-- css link -->
  <link rel="stylesheet" href="../../asset/style/newstyle.css">

  <!--ionicon links-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>


<body>


  <ul>
    <!-- Start your project here-->

    <!-- heading with navbar -->

    <?php

    include_once '../../asset/bar/expertheading.html';
    ?>

    <!-- main content -->
    <center>
      <!--outer box-->
      <div class="container-content" style="height:660px;">

        <!--inner box-->
        <div class="inner-content">
          <!--start content here-->

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">NO.</th>
                <th scope="col">Assigned Post</th>
                <th scope="col">Post ID</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Anatomy of the Human body</td>
                <td>P900</td>
                <td>20 January 2023</td>
                <td><button type="submit" class="btn btn-outline-danger" name="submit" value="submit"
                    href="">Pending</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Algorithm and Complexity</td>
                <td>P800</td>
                <td>12 June 2023</td>
                <td><button type="submit" class="btn btn-outline-success" name="submit" value="submit"
                    href="">Accepted</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Chemistry</td>
                <td>P200</td>
                <td>20 January 2023</td>
                <td><button type="submit" class="btn btn-outline-danger" name="submit" value="submit"
                    href="">Pending</button></td>

              </tr>


            </tbody>
          </table>

        </div>

      </div>

      <!--footer-->
      <footer class="footer" >
        <div class="footer_container">
          <div class="footer__inner">
            <center> ©FK-EduSearch.com.my </center>
          </div>
        </div>
    </center>
    </footer>

</body>

</html>