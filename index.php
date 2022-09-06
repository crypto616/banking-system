<?php
    //connecting to db
    session_start();
    require_once('connection.php');

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
    <link rel="stylesheet" href="public/CSS/styles.css">
    <script>
        function show_customers(){
            document.getElementsByClassName('table-container')[0].style.display = 'block';
            document.getElementById('view-customer').style.display = 'none';
            document.getElementsByClassName('error-msg')[0].style.display = 'none';
        }
    </script>
</head>
<body>
    <img src="public/CSS/transactionbg.jpg" class="index-bg">
    <div class="main">

    <div class="wrapper1">
        <div class="header-text" id="head">
            CADENCE BANK
        </div>
    </div>
        <button id="view-customer" type="toggle" onclick="show_customers()">View Customers</button>
        <?php 
            if(isset($_SESSION['message'])){
                ?>
                <div class="message error-msg">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
                unset($_SESSION['message-css']);
            }
        ?>
        <div class="table-container">
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
                            <!-- Link to send customer_id to the transaction page -->
                            <td><a href="transaction.php?c_id=<?php echo $row['customer_id']; ?>" target="_blank">Tranfer money</a></td>
                        </tr>
                    <?php $i++; } ?>
                </tbody>
            
            
            </table>
        </div>
    </div>
</body>
</html>
