<?php 
setcookie('user','', time() + (20), "/"); 
unset($_COOKIE['userdata']);
header("Location:index.php");
?>