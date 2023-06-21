<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIGNUP PAGE</title>
    <link rel="stylesheet" href="../../asset/style/login_style.css">
</head>

<body>

<header class="header">
    <div class="header_container">
        <div class="header_inner">
            <!--empty header for login-->
        </div>
    </div>
</header>

<div class="form">
    <div class="login_container">
        <!--container box-->

        <div class="login_content">
        <img src=".../../asset/style/logo.png" alt="logo">

        <center>
        <?php if (isset($_SESSION['error']))  ?>
            <form action='signupvalidate.php' method="post">
        <input
            type="text"
            name="name"
            id="name"
            class="form-control"
            placeholder="Username"
            required
        />

        <br>

        <input
            type="text"
            name="password"
            id="password"
            class="form-control"
            placeholder="Password"
            required
        />
        <br>
        <select name="type" id="type" required>
          <option selected disabled value="">Choose Your type</option>
          <option value="guser">General User (Student/Staff) </option>
          <option value="expert">Expert</option>
          <option value="admin">Admin</option>
        </select>
         <button type="submit" class="btn">SIGN UP</button>
         </form>
        </center>
        

        <br>
        <br>
        <center><a href="/LOGIN_PAGE.php" class="link_class">Login Account</a></center>
        
        <a href="#" class="link_class">Forgot Password</a>
        <a> | </a>
        <a href="#" class="link_class">Help</a>
    </div>
</div>

<footer class="footer">
    <div class="footer_container">
        <div class="footer__inner">
            <center> ©FK-EduSearch.com.my </center>
        </div>
    </div>
</footer>

</body>