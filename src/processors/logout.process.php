<?php
session_start();
unset($_SESSION['role']);
header('Location: ../mvc/view/login.php');
exit;
