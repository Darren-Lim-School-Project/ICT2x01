<?php

namespace Controller;

require '../../../vendor/autoload.php';
session_start();

    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $login = new \Model\loginModel();
        $status = $login->loginUser($username, $password);

        if ($status > 0) {
            $_SESSION['role'] = "Admin";
            header("Location: ../view/index.php");
        } else {
            echo "Incorrect login credential";
        }

    } else {
        echo "Error";
    }
?>