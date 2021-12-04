<?php
include 'session.process.php';
include 'sessionsec.process.php';
if(isset($_POST["removecar"])) {

    // Grabbing the data
    $carId = $_POST["carId"];

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $removeCar = new whitelistController($carId);

    // Running error Handlers and Removal of Car
    if($removeCar->removeCar() == true){
        header("location: ../mvc/view/whitelistRemove.php?result=success");
    }
    else
    {
        header("location: ../mvc/view/whitelistRemove.php?result=unsuccessful");
    }


}
