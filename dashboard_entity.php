<?php
class dashboard_entity {
    private float $speed = 200;
    private  bool $isConnected = False;

    function getSpeed() {
        return $this-> speed;
    }

    function setSpeed($speed) {
        $this->speed =$speed;
    }

    function getIsConnected() {
        return $this->isConnected;
    }

    function setIsConnected($isConnected) {
        $this->isConnected =$isConnected;
    }
}
?>
