<?php  
session_start();  
  
if(!$_SESSION['admin_name'])  
{  
  
    header("Location:Admin_login.php");  
}
else{
 include("Admin_login.php");
$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
    echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>"; 
}  
}
 
?>  
<html>
<body>
    <a href="Logout.php">Logout</a>
    </body>
</html>