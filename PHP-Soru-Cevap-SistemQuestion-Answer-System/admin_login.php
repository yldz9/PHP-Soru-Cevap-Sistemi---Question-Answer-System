<html>  
<head lang="tr">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">  
    <title>Admin Girişi</title>  
</head>  
<style>  
  #form-admin{
      position: absolute;
      top: 100px;
      left: 100px;
      width: 70%;
      border-radius: 30px;
  }

</style>  
  
<body>  
<img src="images/pexels3.jpg" title="Bi sorum var">
<div class="container" id="form-admin">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin Girişi</h3>  
                </div>  
                <br>
                <div class="panel-body">  
                    <form role="form" method="post" action="admin_login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Adınız" name="admin_name" type="text" autofocus>  
                            </div> 
                            <br> 
                            <div class="form-group">  
                                <input class="form-control" placeholder="Şifreniz" name="admin_pass" type="password" value="">  
                            </div>  
                            <br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş" name="admin_login" > 
                         
                        </fieldset>  
                    </form>  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
</body>  
  
</html>  
  
<?php    
include("config.php");  
  
if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
{  
    $admin_name=$_POST['admin_name'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
  
    $run_query=mysqli_query($conn,$admin_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
  
        echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {echo"<script>alert('Admin bilgileri yanlıştır..!')</script>";}  
  
}  
  
?>  