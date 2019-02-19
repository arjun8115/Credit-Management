<h1 style="background-color: lightblue">Transfer your money</h1>

<?php
 
  $uid = $_POST['id'];
  $uname = $_POST['name'];
  $uemail = $_POST['email'];
  $ucredit = $_POST['curr_credit'];
  $ux=$_POST['sender'];
  $uy=$_POST['ids'];
  $uz=$_POST['credit'];
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<h2>Money will transfer from <b><?php echo $ux; ?></b> to <b><?php echo $uname; ?></b></h2>
<br>
<h3>Enter your money for transfer</h3>




 <form action="finalpage.php" method="POST">
 <input type="text" name="fname" placeholder="credit">
 <input type="hidden" value="<?php echo $uid; ?>" name="id">
 <input type="hidden" value="<?php echo $uy; ?>" name="ids">
 <input type="hidden" value="<?php echo $uz; ?>" name="credit">
 <input type="submit" class="btn btn-success" value="Confirm-transfer" name="submit">

 </form>