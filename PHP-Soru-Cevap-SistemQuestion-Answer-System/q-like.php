<?php
    include "session-control.php";
    include "config.php";

    $q_id = $_GET['q_id'];
    $user_id = $_GET['user_id'];
    $sql = "INSERT INTO `likes` (`user_id`, `q_id`, `type`) VALUES ($user_id, $q_id, 1);";

    $result = mysqli_query($conn, $sql);



    $sql2="DELETE FROM likes WHERE user_id=$user_id AND q_id=$q_id AND type='0'";
    $result2 = mysqli_query($conn, $sql2);


    header("Location: questions.php");
?>