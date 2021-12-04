<?php

if(isset($_POST["addcar"])) {

    // Grabbing the data
    $carId = $_POST["carId"];

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $addCar = new whitelistController($carId);

    // Running error Handlers and Adding of Car
    if($addCar->addCar() == true){
        header("location: ../mvc/view/whitelistAdd.php?result=success");
    }
    else
    {
        header("location: ../mvc/view/whitelistAdd.php?result=unsuccessful");
    }


}
