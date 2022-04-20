<html>  
<head lang="tr">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <title>Kullanıcı Görüntüleme</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>  
<?php echo '<p><a href="logout.php">Çıkış Yap</a></p>';
           ?>   
<div class="table-scrol">  
    <h1 align="center">Kayıtlı Kullanıcılar</h1>  
  
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Kullanıcı Id</th>  
            <th>Kullanıcı Adı</th>
            <th>Şifre</th>  
            <th>Ad Soyadı</th>  
            <th>Email</th>  
            <th>Kullanıcıyı Sil</th>  
        </tr>  
        </thead>  
  
        <?php  
        include("config.php");  
        $view_users_query="select * from user";
        $run=mysqli_query($conn,$view_users_query);
  
        while($row=mysqli_fetch_array($run)) 
        {  
            $id=$row[0];  
            $username=$row[1];
            $fullname=$row[2];  
            $email=$row[3];  
            $password=$row[4];  
  
        ?>  
  
        <tr>  
            <td><?php echo $id;  ?></td>  
            <td><?php echo $username;  ?></td> 
            <td><?php echo $fullname;  ?></td> 
            <td><?php echo $email;  ?></td>  
            <td><?php echo $password;  ?></td>  
            <td><a href="a-delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Sil</button></a></td> 
        </tr> 
        
        <?php
     }   
           ?> 
         

    </table>  
        </div>  
</div> 
 
</body>  
  
</html>