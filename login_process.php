<?php
require_once 'conn.php';
include 'sessionManager.php';


    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($conn)) {
        $query = $conn->query("SELECT COUNT(*) as count FROM `user` WHERE `username`='$username' AND `password`='$password'");
    }
    $row = $query->fetchArray();
    $count = $row['count'];

    if ($count > 0) {
        $_SESSION['role'] = "Admin";
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger'>Invalid username or password</div>";
    }
?>