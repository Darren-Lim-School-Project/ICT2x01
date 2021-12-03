<?php
    require '../../../vendor/autoload.php';

    if ($_GET["speed"]) {

        $speed = new \Model\carToDB();
        $speed->insertSpeed($_GET["speed"]);
        exit();
    }
?>