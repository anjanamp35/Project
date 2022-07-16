<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <style type="text/css">
            table{
                  border-collapse:collapse;
                  width: 100%;
                  color:#d96459;
                  font-family: monspace;
                  font-size: 20px;
                  text-align: left;
            }
            </style>
</head>
<center><h1>Donor List</h1></center>
<body>

<table>
    
    <tr>
       <ul> <th>Full Name</th>
        <th>Address</th>
        <th>District</th>
        <th>Pincode</th>
        <th>Mobile</th>
        <th>Age</th>
        <th>E-mail</th>
        <th>bloodgroup</th></ul>
</tr>
<?php 
$conn = mysqli_connect('localhost','root','','register');
if($conn-> connect_error){
    die("Connection failed:".$conn-> connect_error);
}
$sql ="select * from reg";
$result =$conn-> query($sql);
if($result-> num_rows>0){
    while($row =$result->fetch_assoc()){
        echo"<tr><td>".$row["full_name"]."</td><td>". $row["address"]."</td><td>".$row["district"]."</td><td>".$row["pincode"]."</td><td>".$row["mobile"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["bloodgroup"]."</td></tr>";
    }
    echo "</table>";


}
else{
    echo "0 result";
    $conn-> close();
}
?>
</table>
</body>
</html>
