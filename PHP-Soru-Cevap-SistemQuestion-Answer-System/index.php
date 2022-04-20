<!DOCTYPE html>
<html lang="tr">
    <head>
        <title>Bi Sorum Var Giriş Ve Kayıt</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>





<style>
  
    #signup{
        position: absolute;
        top: 300px;
        right: 100px;
        width: 30%;
        border-radius: 30px;
    }
    
    #login{
        position: absolute;
        top: 360px;
        right: 100px;
        width: 30%;
        border-radius:30px;
        
    }
    #adminlogin{
        position: absolute;
        top: 420px;
        right: 100px;
        width: 30%;
        border-radius: 30px;
    }
    #login:hover{
        width: 30%;
        border-radius: 30px;
    }
    #yazi{
        position: absolute;
        top: 120px;
        right:30px; 
        color: 	#808080;
    }
    .well{
        background-color:	#fff;
    }
    </style>
<body>
    <div class="row">
        <div class="col-sm-12">
   
                <div class="col-sm-6" style="left:42%">
        <img src="images/logo.png" title="Bi sorum var logo" width="100px" height="100px">
        </div>
    </div>
    <div class="row">
        <div  class="justify-content-center">
            <center><img src="images/pexels.jpg" title="Bi sorum var"></center>      
            <center><div id="yazi"><h2><strong>Bir türlü sorunun cevabını bulamıyorsan <br>doğru yerdesin.<br><br>Hadi Bi Sorum Var platformumuza katıl.</strong></h2></center>
            <form method="post" action="">
                    <button id="signup" class="btn btn-lg btn-success btn-block" name="signup">Bize Katıl</button><br><br>
                <?php
                    if(isset($_POST['signup'])){
                    echo "<script>window.open('registration.php','_self')</script>";
                     }
                ?>
                <button id="login" class="btn btn-lg btn-info btn-block" name="login">Kullanıcı Girişi</button><br><br>
                 <?php
                    if(isset($_POST['login'])){
                    echo "<script>window.open('login.php','_self')</script>";
                     }
                ?>
                 <button id="adminlogin" class="btn btn-lg btn-warning btn-block" name="adminlogin">Admin Girişi</button><br><br>
                <?php
                    if(isset($_POST['adminlogin'])){
                    echo "<script>window.open('admin_login.php','_self')</script>";
                     }
                ?>
            </form>
        </div>
    </div>
</body>
</html>