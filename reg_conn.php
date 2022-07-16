<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => register
        $conn = mysqli_connect("localhost", "root", "", "register");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        
        $full_name =  $_REQUEST['full_name'];
        $address = $_REQUEST['address'];
        $district =  $_REQUEST['district'];
        $pincode = $_REQUEST['pincode'];
        $mobile = $_REQUEST['mobile'];
        $age = $_REQUEST['age'];
        $email = $_REQUEST['email'];
        $bloodgroup =  $_REQUEST['bloodgroup'];
        $status = 'yes';

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO reg VALUES ('$full_name','$address','$district','$pincode','$mobile','$age','$email','$bloodgroup','$status')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$full_name\n $address\n "
                . "$district\n $pincode\n $mobile\n"
                ."$age\n $email\n $bloodgroup");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>