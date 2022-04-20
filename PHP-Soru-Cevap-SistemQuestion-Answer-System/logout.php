<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

session_unset();


session_destroy();
?>
<hr>
<a href="index.php">Çıkış Yapıldı</a>
</body>
</html>