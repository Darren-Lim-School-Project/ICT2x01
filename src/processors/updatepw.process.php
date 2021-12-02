<?php
include 'session.process.php';
include 'sessionsec.process.php';
if(isset($_POST["updatepw"])) {

    // Grabbing the data
    $username = $_SESSION["username"];
    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST['newPassword'];
    $repeatPassword = $_POST['repeatPassword'];
    echo $username;

    // Instantiate Class
    include "../mvc/controller/updateController.php";
    if($newPassword == $repeatPassword){
        $update = new updateController($newPassword, $username,$currentPassword);
    }
    else
    {
        header("location: ../mvc/view/updatepw.php?result=nomatch");
    }
    // Running error Handlers and user login
    if($update->updatePassword() == true){
        //Going back to the front page
        header("location: ../mvc/view/updatepw.php?result=success");
    }
    else
    {
        //Going back to the login page
        header("location: ../mvc/view/updatepw.php?result=unsuccessful2");
    }


}
