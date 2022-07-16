<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Document</title>
        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body style="margin: 50px;">
    <h1>Profile</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>District</th>
                <th>Pincode</th>
                <th>Age</th>
                <th>Bloodgroup</th>
               
            </tr>
        </thead>
<tbody>
    <?php
    $servername = "loaclhost";
    $username = "root";
    $password = "";
    $database = "status";
    $connection = new mysqli($servername,$username,$password,$darabase);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "SELECT * FROM status";
    $result = $connection->query($sql);

    if (!$result) {
        die("Invalid query: " . $connection->error);
    }

    while($row = $result->fetch_assoc()){
        echo "<tr>
            <td>" . $row["name"] . "</td>
            <td>" . $row["district"] . "</td>
            <td>" . $row["pincode"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["bloodgroup"] . "</td>

            <td>
                <a class='btn btn-primary btn-sm'href='update'>update</a>
                <a class='btn btn-primary btn-sm'href='delete'>delete</a>
            </td>
        </tr>";
    }
    ?>
</tbody>

    </table>
</body>
</html>


