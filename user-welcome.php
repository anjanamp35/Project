<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: user-login.php");
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
        .signout{
        margin-top:60px;
        float:right;
        padding:20px 40px;
     }
     #full{
        width: 100%;
        height: auto;
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
        margin-left: 55px;
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
    #form{
        width: 80%;
        height: 250px;
        background-color: red;
        color: white;
        border-radius: 10px;
    }
    .searchbtn {
     width: 10%;
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
                
                <h1>User Login</h1><br><br>
                <center><div id="form">
                    <table>
                   
                    <tr>
                        <td width="200px" height="50px">Select District</td>
                        <td width="200px" height="50px">
                        <select>
                            <option>Kannur</option>
                            <option>Kasaragod</option>
                            <option>Alappuzha</option>
                            <option>Ernakulam</option>
                            <option>Idukki</option>
                            <option>Kollam</option>
                            <option>Kottayam</option>
                            <option>Kozhikode</option>
                            <option>Malappuram</option>
                            <option>Palakkad</option>
                            <option>Pathanamthitta</option>
                            <option>Thiruvananthapuram</option>
                            <option>Thrissur</option>
                            <option>Wayanad</option>
                        </select></td></tr>
                        <tr>
                        <td width="200px" height="50px">Enter Pincode</td>
                        <td width="200px" height="50px"><input type="text" pincode="pincode" placeholder="Enter Pincode"></td>
                        </tr>
                         <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" age="age" placeholder="Enter Age limit 18 and 65"></td>
                        </tr>
                        <tr>
                        <td width="200px" height="50px">Select Blood Group</td>
                        <td width="200px" height="50px">
                        <select>
                            <option>O+</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O-</option>
                            <option>A+</option>
                            <option>A-</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><button><input type="submit" name="sub" value="search"></button></td>
                    </tr>
                </table></div></center>
               
            </div>
            </div>
</div>
</body>
</html>