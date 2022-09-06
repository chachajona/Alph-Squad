<?php
session_start();
unset($_SESSION['username']);
session_unset();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
header("Location: index.php");
exit()
?>