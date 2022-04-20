<?php
    include "session-control.php";
?>
<?php
include 'config.php';

if(isset($_POST['yorumEkle'])){

	$yorum=$_POST["txtYorum"];
	$q_id=$_GET["q_id"];
	$user_id=$_GET["user_id"];

	$sql = "INSERT INTO reply (q_id,user_id,reply) VALUES ('$q_id','$user_id','$yorum')";
	mysqli_query($conn, $sql);
	header("Location: questions.php");
	
}









?>