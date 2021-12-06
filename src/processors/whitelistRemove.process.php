<?php
include 'session.process.php';
include 'sessionsec.process.php';
if(isset($_POST["removecar"])) {

    // Grabbing the data
    $carId = sanitize_input($_POST["carId"]);

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $removeCar = new whitelistController($carId);
    $result = $removeCar->removeCar();
    // Running error Handlers and Removal of Car
    if($result == "noEntry"){
        header("location: ../mvc/view/whitelistRemove.php?result=noEntry");
    } else if($result == "emptyInput"){
        header("location: ../mvc/view/whitelistRemove.php?error=emptyinput");
    }else if($result == "true"){
        header("location: ../mvc/view/whitelistRemove.php?result=success");
    }
    else
    {
        header("location: ../mvc/view/whitelistRemove.php?result=unsuccessful");
    }


}
function sanitize_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
