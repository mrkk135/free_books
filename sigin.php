<?php 
error_reporting(0);
include("web/php/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" href="web/css/show.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />"

    <title>User||Login</title>
</head>

<body>
<div class="section">
        <nav>
            <div class="logo">
                <img src="admin/book/image/logo1.jpeg">
            </div>
            <ul>
                <li><a href="http://localhost/project/index.php?#home">Home</a></li>
                <li><a href="http://localhost/project/index.php?#books">Books</a></li>
                <li><a href="http://localhost/project/index.php?#arrivals">Arrivals</a></li>
                <li><a href="http://localhost/project/index.php?#services">Services</a></li>
                <li><a href="http://localhost/project/index.php?#about">About</a></li>
            </ul>
            <div class="social_icon">
                <input type="text" placeholder="Search Books...">

                <style>
                    .social_icon input{
                        border-radius: 20px;
                        padding-left: 20px;
                        height: 25px;
                        width: 250px;
                        position: relative;
                        bottom: 1px;
                    }
                </style>
                <i class="fa-solid fa-magnifying-glass"></i>
                <i class="fa-solid fa-heart"></i>
                <a href="index_login.php" style="color:#000;"><i class="fa-solid fa-user"></i>
                <label>
                    <?php
                     $u_email = readNameFromFile();
                    echo $u_email; ?>
                </label></a>
                <a href="web/php/logout.php" style="color:#000;" ><i class="fa-solid fa-sign-out"></i></a>
            </div>
        </nav>

    </div>
    <center>
        <div class="login_main">
            <div class="left">
                <h1>Sigin</h1>
                <span>Welcome To Free Books</span>
            </div>
            <div class="right">
                <form action="web/php/sigin.php" method="post">
                    <div class="data">

                        
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username">

                        <label>Email</label>
                        <input type="email" style="margin-left :35px;" name="email" placeholder="Email">

                        <label>Password</label>
                        <input type="password"  name="password" placeholder="Password">
                        
                        <button type="submit">Register</button>
                    </div>
                    <label class="signup" >Old user : <a href="index_login.php">Login</a></label>
                </form>
            </div>

        </div>
    </center>
</body>

</html>
<style>

    .login_main {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

        margin-top: 10%;
        border: #2878f0 solid ;
        border-radius: 0 20px 20px 0;
        width: 1000px;
        height: 500px;
        align-items: center;
        display: flex;
        
    }
    .right .signup{
        text-decoration: none;    
        color: black;
        position: relative;
        left: 115px;
        top:-10px;
    }
    .left {
 
        background-image: url(image/login.jpg);
        background-position-x: -150px;
        background-size: cover ;
        background-repeat: no-repeat;
        width: 500px;
        height: 500px;
    }

    .left h1 {
        position: relative;
        top: 150px;
        right: 90px;
        font-size: 40px;
    }

    .left span {
        position: relative;
        top: 150px;
        left: 10px;
        font-size: 30px;
    }

    .right {
        width: 500px;
        height: 500px;
        display: flex;
        background: white;        
    
        border-radius: 0 20px 20px 0;
        border-left: #2268d2 solid ;
    }
    .data{
        position: relative;
        top:-65px ;
    }

    .right input {
        height: 35px;
        width: 70%;
        right: 35px;
        padding: 5px;
        padding-left: 20px;
        outline: none;
        position: relative;
        margin-top: 80px;
        top: 40px;
        border: none;
        font-size: 15px;
        background: #dde1e7;
        border-radius: 10px;
       
    }
    .right label{
        position: relative;
        font-size: 20px;
        left: 50px;
        color: #000;
    }
    button{
        height: 45px;
        width: 75%;
        left: 5px;
        outline: none;
        position: relative;
        margin-top: 50px;
        top: 40px;
        border: none;
        font-size: 15px;
        background: #2878f0;
        color: #dde1e7;
        border-radius: 10px;
    }
    button:hover{
        background: #2268d2 ;
    }
    
</style>