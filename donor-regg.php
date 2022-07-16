<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <style>
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
        height: 280px;
        background-color: red;
        color: white;
        border-radius: 10px;
    }
    .savebtn {
     width: 10%;
  }
        </style>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
<head>
    <body>
        <div id="inner_full">
            <div id="header"><h2><a href="ad.html" style="text-decoration: none;color: white;">Blood Finder</a></h2></div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un']:
                if(!$un)
                {
                    header("ad.html");
                }
                ?>
                <h1>Donor Registration</h1><br><br>
                <center><div id="form">
                    
                    <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><input type="text" address="address" placeholder="Enter Address"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter District</td>
                        <td width="200px" height="50px"><input type="text" district="district" placeholder="Enter District"></td>
                        <td width="200px" height="50px">Enter Pincode</td>
                        <td width="200px" height="50px"><input type="text" pincode="pincode" placeholder="Enter Pincode"></td>
                        </tr>
                        <tr>
                        <td width="200px" height="50px">Enter Mobile No</td>
                        <td width="200px" height="50px"><input type="text" mobile no="mobile no" placeholder="Enter Mobile No"></td>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" age="age" placeholder="Enter Age"></td>
                         </tr>
                         <tr>
                        <td width="200px" height="50px">Enter Email</td>
                        <td width="200px" height="50px"><input type="text" email="email" placeholder="Enter Email"></td>
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
                        <td><button><input type="submit" name="sub" value="save"></button></td>
                    </tr>
                </table></div></center>
            </form>
            </div>
            </div>
            <?php
include "connection.php";

if($_SERVER['REQUEST_METHOD']=='POST')
{
 $inName=$_POST["Name"];
 $inAddress=$_POST["Address"];
 $inDistrict=$_POST["District"];
 $inPincode=$_POST["Pincode"];
 $inMobNo=$_POST["MobNo"];
 $inAge=$_POST["Age"];
 $inEmail=$_POST["Email"];
 $inBdgp=$_POST["Bdgp"];
 $sql="insert into donor registration values('".$inEmail."','".$inName."','".$inMob."','".$inCity."','".$inBg."')";
if(mysqli_query($conn,$sql))
{
?>
	<script type="text/javascript">alert('Records saved');</script>
<?php
	echo "Record saved";
}
else
{
?>
	<script type="text/javascript">alert('Some error occured in saving records');</script>
<?php	
	echo"Error in inserting data: ".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'donor registration');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
</body>
</html>

            </body>
            </head>
            </head>
            </html>
           