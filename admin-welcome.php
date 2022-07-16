<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: admin-login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
        #full{
        width: 100%;
        height: auto;
     } 
     .signout{
        margin-top:60px;
        float:right;
        padding:20px 40px;
     }
     #inner_full{
        width: 80%;
        height: auto;
        margin: auto;
    }
    #header{
        width: 100%;
        height: 50px;
        background-color: red;
        color: white;
    }
    #body{
        width: 100%;
        height: 400px;
    }
    #footer{
        width: 100%;
        height: 70px;
        background-color: red;
        color: white;
    }
    ul li{
        width: 20%;
        height: 50px;
        line-height: 50px;
        margin-left: 25px;
        background-color: red;
        color: white;
        float: left;
        border-radius: 10px;
        list-style: none;
        text-align: center;
    }
    ul li a{
        text-decoration: none;
        color: white;
    }
    </style>
</head>
<body>
    <div class=signout>
        <a href="admin-logout.php" class="btn btn-danger ml-3">Sign Out</a>
</div>
        <div id="inner_full">
            <div id="header"><h2><a href="ad.html" style="text-decoration: none;color: white;">Blood Finder</a></h2></div>
            <div id="body">
                <br>
            
                <h1>Welcome Admin</h1><br><br><br>
                <ul>
                <li><a href="http://localhost/reg.php">Donor Registration</a></li>
                <li><a href="http://localhost/donorlist-show.php">Donor List</a></li>
                
            </ul><br><br><br><br><br><br>
            <ul>
                <li><a href="http://localhost/temp_status.php">Temporary Status</a></li>
                    <li><a href="http://localhost/update_profile.php">Update Donor's Profile</a></li>
                   
            </ul>
</body>
</html>