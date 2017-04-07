<?php  
session_start();  
  
if(!$_SESSION['admin_name'] && !$_SESSION['admin_pass'])  
{  
  
    header("Location:Admin_login.php");  
}  
  
?>
<?php
if(isset($_GET['delete_id']))
 {
  include("Dbconfig.php");
  $stmt_select = $DB_con->prepare('SELECT userPic FROM tbl_users WHERE userID =:uid');
  $stmt_select->execute(array(':uid'=>$_GET['delete_id']));
  $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
  unlink("image/".$imgRow['userPic']);
  
  // it will delete an actual record from db
  $stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE userID =:uid');
  $stmt_delete->bindParam(':uid',$_GET['delete_id']);
  $stmt_delete->execute();
  
  header("Location:admin.php");
 }
?>
<html>
    <body>
        <a href="admin_logout.php"><h2>logout</h2></a>
<div class="row">
<?php
 include("Dbconfig.php");
 $stmt = $DB_con->prepare('SELECT userID, userName, userProfession, userPic FROM tbl_users ORDER BY userID DESC');
 $stmt->execute();
 
 if($stmt->rowCount() > 0)
 {
  while($row=$stmt->fetch(PDO::FETCH_ASSOC))
  {
   extract($row);
   ?>
   <div class="col-xs-3" style="margin-left:35vw;">
    <p class="page-header"><?php echo $userName."&nbsp;/&nbsp;".$userProfession; ?></p>
    <img src="image/<?php echo $row['userPic']; ?>" class="img-rounded" width="auto" height="400px" />
    <p class="page-header">
    <span>
   
    <a class="btn btn-danger" href="?delete_id=<?php echo $row['userID']; ?>" title="click for delete" onclick="return confirm('sure to delete ?')"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a>
    </span>
    </p>
   </div>       
   <?php
  }
 }
 else
 {
  ?>
        <div class="col-xs-12">
         <div class="alert alert-warning">
             <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
 }
 
?>
</div>
    </body>
</html>