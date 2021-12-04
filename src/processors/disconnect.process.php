<?php

include 'session.process.php';

    // Possible car disconnecting script(?)

    // Instantiate Class

    // Running error Handlers and Disconnecting of Car

    // Destroying the session or sending it back to the connect page
if(isset($_SESSION['role'])){
    unset($_SESSION['carId']);
} else {
    session_destroy();

}
header("location: ../mvc/view/connect.php?disconnect=true");



