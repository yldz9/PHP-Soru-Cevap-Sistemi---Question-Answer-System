<?php
    include "session-control.php";
?>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo $username . " " . $password . "<br>";
include 'config.php'; 
$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);  
$num_rows = mysqli_num_rows($result);   
$row = mysqli_fetch_assoc($result);   
if($num_rows >= 1){
    echo "Login Successful";
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $row['id'];          
    header("Location: q-insert-form.php");
}else{
    echo "Login Failed" . $sql;
}
?>