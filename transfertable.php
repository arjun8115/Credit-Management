<h1>List of all users for transfer</h1>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<table class="table table-stripped">
<th>Name</th><th>Current credit</th>
<?php
include("connect.php");
$x=$_POST['id'];
$y=$_POST['name'];
$z=$_POST['credit'];
$result = mysqli_query($link,"select * from user where id !=$x");
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    <td> 
    
        <?php echo $row['name']; ?>         
    </td>
    <td>
   
         <?php echo $row['curr_credit']; ?> 
    </td>
    
    <td> 
    <form action="transfermoney.php" method="POST">
        <input type="hidden" value="<?php echo $row['name']; ?>" name="name">
        <input type="hidden" value="<?php echo $row['curr_credit']; ?>" name="curr_credit">
        <input type="hidden" value="<?php echo $row['email']; ?>" name="email">
        <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
        <input type="hidden" value="<?php echo $x; ?>" name="ids">
        <input type="hidden" value="<?php echo $y; ?>" name="sender">
        <input type="hidden" value="<?php echo $z; ?>" name="credit">
        <input class="btn btn-success" type="submit" value="Select for transfer">
    </form>
    </td>
    </tr>
<?php
}
?>
</table>
</form>