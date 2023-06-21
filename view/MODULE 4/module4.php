<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>module4</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <style>
        table, th, td{
        border: 2px solid #96be25;
        border-collapse: collapse;
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

    <form id="manage_user" class="table_content" action='searchmodule4.php' method="post">
        <center><h1>Report and Analytics</h1></center>
        <center>
        <form>
        
        <input
            type="text"
            name="searchname"
            id="searchname"
            placeholder="type name to search"
        >
        <button type="submit" class="btn">SEARCH</button>

        <br><br><br><br>
        <table>
            <tr>
                <th colspan="2">User Activity ID</th>
            </tr>
            <tr>
                <td>User 1</td>
                <td><a class="nav__link" href="">View</a></td>
        </table>
        </center>
    </form>


    <footer class="footer">
        <div class="footer__inner">
        <center> ©FK-EduSearch.com.my </center>
        </div>
    </footer>

</body>


