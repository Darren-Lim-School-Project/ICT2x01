<?php

if(isset($_POST["login"])) {

    // Grabbing the data
    $username = $_POST["username"];
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
        //Going back to the front page
        header("location: ../mvc/view/index.php?login=false");
    }


}
