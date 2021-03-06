<?php

if(isset($_POST["login"])) {

    // Grabbing the data
    $username = sanitize_input($_POST["username"]);
    $password = $_POST["password"];

    // Instantiate Class
    include "../mvc/controller/loginController.php";
    $login = new LoginController($username,$password);
    echo $login->loginUser();
    // Running error Handlers and user login
    if($login->loginUser() == 1){
        //Going back to the front page
        header("location: ../mvc/view/index.php?login=success");
    }
    else
    {
        //Going back to the login page
        header("location: ../mvc/view/login.php?login=false");
    }


} else {
    header("location: ../mvc/view/index.php");
}

function sanitize_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}