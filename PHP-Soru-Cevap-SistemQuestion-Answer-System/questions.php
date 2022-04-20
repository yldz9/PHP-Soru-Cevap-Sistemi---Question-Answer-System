<?php
    include "session-control.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorular</title>
</head>
<body>
<?php
include 'config.php';

$sql = "SELECT * FROM question";
$result = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($result);
?>
    <br>
    <p>
        <a href="q-insert-form.php"><button class="btn btn-success">Soru Ekle</button></a>
        <a href="logout.php"><button class="btn btn-secondary">Çıkış Yap</button></a>
    </p>
    <hr>
    <table style="float:left;" border="1" cellpadding="10" cellspacing="5">
        <tr>
            <th>ID</th>
            <th>Soru</th>
            <th>Eklenme Tarihi</th>
            <th>İşlemler</th>
            <th>Yorum Ekle</th>
        </tr>
        <?php    
            $user_id = $_SESSION['user_id'];
            if($num_rows > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $q_id = $row['id'];
                    $sql2 = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=1";
                    $result2 = mysqli_query($conn,$sql2);
                    $row2 = mysqli_fetch_assoc($result2);
                    $like = $row2['count'];
                    echo '<tr>';
                        echo "<td>$q_id</td>"; 
                        echo "<td>";   
                            echo $row['q_name'];
                            echo" <br>";
                            $sql3 = "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=1";
                            $result3 = mysqli_query($conn,$sql3);
                            $num_rows3 = mysqli_num_rows($result3);
                            if($num_rows3 > 0){
                                echo "Beğen($like)";
                                echo " - "; 
                            }else{                                
                                echo "<a href='q-like.php?q_id=$q_id&user_id=$user_id'>Beğen</a>($like)";
                            }


     
              
                    $sql_dislike = "SELECT COUNT(*) as count FROM likes WHERE q_id = $q_id AND type=0";
                    $result_dislike = mysqli_query($conn,$sql_dislike);
                    $row_dislike = mysqli_fetch_assoc($result_dislike);
                    $dislike = $row_dislike['count'];
                     
                            $sql4 = "SELECT * FROM likes WHERE q_id = $q_id AND user_id=$user_id AND type=0";
                            $result4 = mysqli_query($conn,$sql4);
                            $num_rows4 = mysqli_num_rows($result4);
                            if($num_rows4 > 0){
                                echo " - ";
                                echo "Beğenme($dislike)";
                            }else{                                
                                echo "<a href='q-dislike.php?q_id=$q_id&user_id=$user_id'>Beğenme</a>($dislike)";
                            }

                        echo "</td>";

                        echo "<td>".$row['q_date']."</td>";
                        echo '<td>'; // 4. sütun
                        echo '<a href="q-update-form.php?id=' . $row['id'] . '"><button class="btn btn-success">Güncelle</button></a> ';
                        echo '<a href="q-delete-form.php?id='.$row['id']  . '"><button class="btn btn-danger">Sil</button></a> ';
                        echo '</td>';


                    
                    
                        $sql_reply = "SELECT COUNT(*) as count FROM reply WHERE q_id = $q_id";
                        $result_reply = mysqli_query($conn,$sql_reply);
                        $row_reply= mysqli_fetch_assoc($result_reply);
                        $reply = $row_reply['count'];
                        
                            echo 
                            "<td> 
                            <form action='questions.php?q_id=$q_id&user_id=$user_id' method=POST>                    
                                <button name='reply'>Reply($reply)</button>
                            </td>
                            </form>";


                            echo"
                            <td>
                                <form action='q-reply.php?q_id=$q_id&user_id=$user_id' method='POST'>
                                    <textarea placeholder='Yorumunuzu Yazınız...' name='txtYorum'></textarea> <br>

                                    <input type='submit' name='yorumEkle' value='Yorum Ekle'>
                                </form>
                            </td>";
                        
                    echo '</tr>';
                }
            }
            ?>
    </table>

    <?php 
        if(isset($_POST['reply'])){

        $questionID=$_GET['q_id']; 
        $sqlSor = "SELECT * FROM reply INNER JOIN user WHERE q_id=$questionID and user_id=id";
        $resultSor = mysqli_query($conn,$sqlSor);


        echo "<table style='float:right;' border='1' cellpadding='10' cellspacing='5'> 
                <tr> 
                    <th colspan='2'> 
                        Seçilen Soruya Verilen Yanıtlar... 
                    </th> 
                </tr> 
                ";
        
        while($listele=$resultSor->fetch_array()){
        ?>
                <tr>
                    <td><?php echo $listele['reply']; ?></td>   
                    <td>Kullanıcı:<?php echo $listele['username']; ?></td>
                </tr>
            
        <?php }}
    ?>
            </table>
</body>
</html>
