<?php
session_start();
session_destroy();
header('Location: ../mvc/view/login.php');
exit;
?>