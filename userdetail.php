<?php
 
  $uid = $_POST['id'];
  $uname = $_POST['name'];
  $uemail = $_POST['email'];
  $ucredit = $_POST['curr_credit'];
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <h1><?php echo $uname; ?></h1>

  <h2>Email: <?php echo $uemail; ?></h2>

  <h2>Current credit: <?php echo $ucredit; ?></h2>

<br>
 <form action="transfertable.php" method="POST">
 <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
 <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
 <input type="hidden" value="<?php echo $ucredit; ?>" name="credit">
 <h3>TRANSFER CREDIT <input type="submit" class="btn btn-success" value="Confirm"></h3>
 </form>
 