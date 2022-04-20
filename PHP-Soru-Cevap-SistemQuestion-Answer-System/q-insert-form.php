<!DOCTYPE html>
<html lang="tr">
<?php
    include "session-control.php";
?>
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soru Ekle</title>
</head>
<style>
     #yazi2{
        position: absolute;
        top: 170px;
        right: 30px; 
        color: 	#808080;
    }
    #form{
        position: absolute;
        top: 300px;
        right:220px; 
        color: 	#808080;
    }
    #yazi3{
        position: absolute;
        top: 400px;
        right: 30px; 
        color: 	#808080;
    }
    #ay{
        position: absolute;
        top: 480px;
        right: 290px;
    }
    </style>
<body>
<center><div id="yazi2"><h3><strong>Merak ettiğiniz soruları ekleyerek <br> bizimle paylaşabilirsiniz </strong></h3></div></center>
    <center><img src="images/pexels2.jpg" title="Bi sorum var"></center>
    <center><form action="q-insert.php" method="post">
        <table id="form">
            <tr>
                <td>Sorunuz:</td>
                <td><input type="text" name="qname"></td>
            </tr>
            <tr>
                <td></td><br>
                <td><input type="submit" value="Ekle"></td>
                
            </tr>
        </table>
    </form></center>
    <center><div id="yazi3"><h4><strong>Sorulan soruları görmek istiyorsanız, <br> "Soruları Gör" adlı butona tıklamanız yeterlidir. </strong></h4></div></center>
    <?php echo '<p><a href="questions.php" ><button id="ay" class="btn btn-dark" >Soruları Gör</a></button></p>';

           ?>   
</html>
