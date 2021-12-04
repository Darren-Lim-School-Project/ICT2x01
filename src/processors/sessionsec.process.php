<?php

if(!isset($_SESSION['role'])){
    header('Location: ../view/login.php' . $_SESSION['role']);
    die();
}
