<?php
include 'search_conn.php';
$searchErr = '';
$employee_details='';
if(isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from reg where bloodgroup like '%$search%' or district like '%$search%'");
        $stmt->execute();
        $employee_details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($employee_details);
         
    }
    else
    {
        $searchErr = "Please enter the information";
    }
    
}
 
?>
<html>
<head>
<title>ajax example</title>
<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>
    <div class="container">
    <h3><u>User Search</u></h3>
    <br/><br/>
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search Donor Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search district / bloodgroup">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchErr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Full Name</th>
            <th>Address</th>
            <th>District</th>
            <th>Pincode</th>
            <th>Mobile</th>
            <th>Age</th>
            <th>Email</th>
            <th>Blood Group</th>
            <th> Donation Status</th>
          </tr>
        </thead>
        <tbody>
                <?php
                 if(!$employee_details)
                 {
                    echo '<tr>No data found</tr>';
                 }
                 else{
                    foreach($employee_details as $key=>$value)
                    {
                        ?>
                    <tr>
                        <td><?php echo $key+1;?></td>
                        <td><?php echo $value['full_name'];?></td>
                        <td><?php echo $value['address'];?></td>
                        <td><?php echo $value['district'];?></td>
                        <td><?php echo $value['pincode'];?></td>
                        <td><?php echo $value['mobile'];?></td>
                        <td><?php echo $value['age'];?></td>
                        <td><?php echo $value['email'];?></td>
                        <td><?php echo $value['bloodgroup'];?></td>
                        <td><?php echo $value['status'];?></td>
                    </tr>
                         
                        <?php
                    }
                     
                 }
                ?>
             
         </tbody>
      </table>
    </div>
</div>
<script src="jquery-3.6.0.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>