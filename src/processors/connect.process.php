<?php


if (isset($_POST["connect"])) {

    // Grabbing the data
    $carId = $_POST["carId"];

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $connect = new whitelistController($carId);

    // Running error Handlers and Adding of Car
    if($connect->checkWhitelisted() == true){
        /* Run Connect Car Script
        if true navigate to play game / Index. Else deny
        */
        session_start();
        $_SESSION['carId'] = $carId;
        header("location: ../mvc/view/index.php");
    }
    else
    {
        header("location: ../mvc/view/connect.php?result=unsuccessful");
        die();
    }


}
