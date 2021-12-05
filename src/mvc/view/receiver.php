<?php
    require_once "../model/carToDBClass.php";

    if ($_GET["speed"]) {

        $speed = new carToDBClass();
        $speed->insertSpeed($_GET["speed"]);
        exit();
    }
?>