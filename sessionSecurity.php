<?php

if(!isset($_SESSION['role'])){
    header('Location: login.php');
    die();
}
?>