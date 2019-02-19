
<h1>List of all users</h1>

<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<table class="table table-stripped">
<th>ID</th><th>Name</th><th>Email</th><th>Current credit</th>

<?php
include("connect.php");
$result = mysqli_query($link,"select * from user");
while($row=mysqli_fetch_array($result))
{
?>
    <tr>
    <td> 
 
    	<?php echo $row['id']; ?>
    </td>
    <td> 
    
    	<?php echo $row['name']; ?> 		
    </td>
    <td> 
    
    	<?php echo $row['email']; ?> 		
    </td>
    <td>
   
         <?php echo $row['curr_credit']; ?>	
    </td>
    
    <td> 
    <form action="userdetail.php" method="POST">
    	<input type="hidden" value="<?php echo $row['name']; ?>" name="name">
    	<input type="hidden" value="<?php echo $row['curr_credit']; ?>" name="curr_credit">
    	<input type="hidden" value="<?php echo $row['email']; ?>" name="email">
    	<input type="hidden" value="<?php echo $row['id']; ?>" name="id">
    	<input class="btn btn-success" type="submit" value="Select">
    </form>
    </td>
    </tr>
<?php
}
?>
</table>
</form>