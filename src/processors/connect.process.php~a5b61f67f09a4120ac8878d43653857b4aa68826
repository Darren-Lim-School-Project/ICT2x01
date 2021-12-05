<?php


if (isset($_POST["connect"])) {

    // Grabbing the data
    $carId = sanitize_input($_POST["carId"]);

    // Instantiate Class
    include "../mvc/controller/whitelistController.php";
    $connect = new whitelistController($carId);

    // Running error Handlers and Adding of Car
    if($connect->checkEntry() == "true"){
        /* Run Connect Car Script
        if true navigate to play game / Index. Else deny
        */
        session_start();
        $_SESSION['carId'] = $carId;
        header("location: ../mvc/view/index.php");
    } else if ($connect->checkEntry() == "emptyInput"){
        header("location: ../mvc/view/connect.php?result=emptyInput");
        die();
    }
    else
    {
        header("location: ../mvc/view/connect.php?result=unsuccessful");
        die();
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
