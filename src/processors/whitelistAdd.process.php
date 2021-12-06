<?php
include 'session.process.php';
include 'sessionsec.process.php';
if(isset($_POST["addcar"])) {

    // Grabbing the data
    $carId = sanitize_input($_POST["carId"]);

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $addCar = new whitelistController($carId);
    $result = "";
    // Running error Handlers and Adding of Car
    $result = $addCar->addCar();

    if($result == "duplicateEntry"){
        header("location: ../mvc/view/whitelistAdd.php?result=duplicateEntry");
    } else if($result == "emptyInput"){
        header("location: ../mvc/view/whitelistAdd.php?error=emptyinput");
    }
    else if($result == "true"){
        header("location: ../mvc/view/whitelistAdd.php?result=success");
    }
    else
    {
        header("location: ../mvc/view/whitelistAdd.php?result=unsuccessful");
    }


}
function sanitize_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
