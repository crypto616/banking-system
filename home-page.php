<?php
    //connecting to db
    require_once("connection.php");

    //PHP script to take data out of db
    $sql = "SELECT * FROM `cadence bank`.`customers`";
    $result = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <button type="toggle" onclick="">View Customers</button>

    <table>
        <thead>
            <tr>
                <th>S. No.</th>
                <th>Name</th>
                <th>Account Number</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Location</th>
                <th>Current Balance</th>
                <th>Operation</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                $i = 1;
                while($row = $result->fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['account_num']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['contact_num']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['current_balance']; ?></td>
                    <td><button>Transfer money</button></td>
                </tr>
            <?php $i++; } ?>
        </tbody>
       
    
    </table>
</body>
</html>