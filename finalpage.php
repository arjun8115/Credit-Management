<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<?php
 include("connect.php");
 if(isset($_POST['submit']))
 { 
    $x=$_POST['fname'];
    $y=$_POST['id'];
    $z=$_POST['ids'];
    $w=$_POST['credit'];
    if($x<=$w)
    {
  ?>      
        <h1 style="background-color: #BDB76B">Transaction Successful</h1>
        <?php
        $query1="Update user set curr_credit=curr_credit-$x where id = $z";
        $result=mysqli_query($link,$query1);
        $query2="Update user set curr_credit=curr_credit+$x where id = $y";
        $result=mysqli_query($link,$query2);
    }
    else 
    {
     ?> 
     <h1 style="background-color: #BDB76B">Transaction UnSuccessful</h1>
     <?php   
    }   
 }
?>

<div class="container" id=as>
<a class="btn btn-success" type="button" value="View all users" href="table.php">VIEW ALL USERS</a>
</div>
</body>
</html>