<?php
require_once '../../Controllers/DonationController.php';
$DonationController =new DonationController;
$Donations = $DonationController->getDonorInfo();
$TotalAmount = $DonationController->totalAmount();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | By Code Info</title>
  <link rel="stylesheet" href="css/too.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<header class="header">
    <div class="logo">
    </div>
  </header>
  
    <div class="main-body">
      <h2>Donation Form</h2>
      <div class="promo_card">
        <h1>Welcome to Alumni Donation</h1>
        
      </div>
      <div class="history_lists">
        <div class="list1">
          <div class="row">
            <h4>History</h4>
            
        </div>
        <table>
            <thead>
            <tr>
                <th>#</th>                
                <th>Name</th>
                <th>Phone</th>
                <th>Type of Payment</th>
                <th>Ammount</th>
            </tr>
            </thead>
        <?php
            if (count($Donations) == 0) {
                ?>
                    <tbody>
                        <tr>There are no Donors yet !</tr>
                    </tbody>
            
            <?php
            } else {
            foreach ($Donations as $Donation) {
            ?>
            <tbody>
            <tr>
                <td><?php echo $Donation["id"] ?></td>
                <td><?php echo $Donation["firstname"]." ".$Donation["lastname"] ?> </td>
                <td><?php echo $Donation["phone"] ?></td>
                <td><?php echo $Donation["method"] ?></td>
                <td><?php echo $Donation["amount"] ?>$</td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        <?php
            }
            ?>
            </table>
        </div>
    <div class="sidebar">
      <h4>Account Balance</h4>
      <div class="balance">
        <i class="fas fa-dollar icon"></i>
        <div class="info">
          <h5>Total Amount</h5>
          <span><i class="fas fa-dollar"></i><?php  if (count($Donations) ==! 0) {echo $TotalAmount[0]["totalamount"]; } else{echo "0";}?> </span>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
