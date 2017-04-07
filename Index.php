
<html>
    <body>
        
<div class="row" style="margin:auto;">
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
   <div class="col-xs-3">
    <p class="page-header"><?php echo $userName."&nbsp;/&nbsp;".$userProfession; ?></p>
    <img src="image/<?php echo $row['userPic']; ?>" class="img-rounded" width="auto" height="450px" />
    <p class="page-header">
        <hr width="50%" style="align:center;color:black;">
    <span>
   

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