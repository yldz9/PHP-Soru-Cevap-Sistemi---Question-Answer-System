<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">  
    </head>
    <style>  
  #form-login{
      position: absolute;
      top: 100px;
      left: 100px;
      width: 70%;
      border-radius: 30px;
  }
    </style>

    <body>
         <img src="images/pexels3.jpg" title="Bi sorum var">
        <div class="container" id="form-login" > 
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">
        
        <br><h2>Kullanıcı Girişi</h2>
    </div>
   
    <br>
        <form action="login-control.php" method="post">
       
        <div class="form-group">
            <input class="form-control" placeholder="Kullanıcı Adınız" name="username" type="text" autofocus> 
        </div>
            <br>
            <div class="form-group">
                <input class="form-control" placeholder="Şifreniz" name="password" type="password" value="">
            </div>  
            <br>
            <input class="btn btn-lg btn-success btn-block" type="submit" value="Giriş" id="login">
        </form>
</div>
</div></div>
    </body>
    


</html>

