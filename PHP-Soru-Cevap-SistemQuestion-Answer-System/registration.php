<html>  
<head lang="tr">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">  
    <title>Kayıt</title>  
</head>  
<style>  
  #form-register{
      position: absolute;
      top: 100px;
      left: 100px;
      width: 70%;
      border-radius: 30px;
  }

</style>  
<body>  
<img src="images/pexels3.jpg" title="Bi sorum var">
<div class="container" id="form-register">
<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Kullanıcı Kayıt Formu</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
                        <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="Adınız" name="fullname" type="text" autofocus>  
                            </div>  
                            <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="Kullanıcı Adınız" name="username" type="text" autofocus>  
                            </div>
                            <br>
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail Hesabınız" name="email" type="email" autofocus>  
                            </div>
                            <br>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Şifreniz" name="password" type="password" value="">  
                            </div>  
                            <br>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Kayıt Ol" name="register" >  
  
                        </fieldset>  
                    </form>  
                    <center><b>Zaten kayıtlı bir kullanıcı mısın ?</b> <br></b><a href="login.php">Giriş Yap</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("config.php");
if(isset($_POST['register']))  
{  
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
  
  
    if($username=='')  
    {  
        
        echo"<script>alert('Lütfen ad alanını doldurunuz.')</script>";  
exit();
    }  

    if($fullname=='')  
    {  
       
        echo"<script>alert('Lütfen soyadı alanını doldurunuz.')</script>";  
exit();
    } 

    if($password=='')  
    {  
        echo"<script>alert('Lütfen şifre alanını doldurunuz')</script>";  
exit();  
    }  
  
    if($email=='')  
    {  
        echo"<script>alert('Lütfen email alanını doldurunuz.')</script>";  
    exit();  
    }  
 
    $check_email_query="select * from user WHERE email='$email'";  
    $run_query=mysqli_query($conn,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Bu Email $email sistemde kayıtlı, lütfen başka bir email hesabı deneyin!')</script>";  
exit();  
    }  

    $insert_user="insert into user (fullname,username, password,email) VALUE ('$fullname','$username','$password','$email')";  
    if(mysqli_query($conn,$insert_user))  
    {  
        echo"<script>window.open('login.php','_self')</script>";  
    }  
} 
?>  