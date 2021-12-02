<?php

if(!isset($_SESSION['role'])){
    header('Location: ../mvc/view/login.php' . $_SESSION['role']);
    die();
}
