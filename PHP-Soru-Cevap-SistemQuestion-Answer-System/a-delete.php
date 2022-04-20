<?php  
include("config.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from user WHERE id='$delete_id'";
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
    echo "<script>window.open('view_users.php?deleted=Kullanıcı Silindi','_self')</script>";  
}  
  
?> 
