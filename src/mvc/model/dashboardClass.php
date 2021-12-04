<?php

require_once "../model/databaseCon.php";
class dashboardClass extends databaseCon {
    private  bool $isConnected = True;
    private int $gameLevel = 20;

    public function cardbconnection($carid) {

        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM car WHERE carId = '" . $carid . "' ORDER BY id desc");
        $car = $stmt->execute();
        //$car = $result->fetchArray(SQLITE3_ASSOC);
        return $car;
    }
    public function gamedbconnection($carid) {
        $sql = "SELECT * FROM game WHERE carId = '" . $carid . "'";
        $stmt = $this->connect()->prepare($sql);
        $car = $stmt->execute();
        return $car;
    }
    public function getSpeed($carid) {
        $car = $this->cardbconnection($carid);
        $speed = 0;
        $row = $car->fetchArray(SQLITE3_ASSOC);

        if ($row != "") {
            $speed = $row['speed'];
        }
        return $speed;
    }
    public function getObstacle($carid) {
        $car = $this->cardbconnection($carid);
        $speed = 0;
        $row = $car->fetchArray(SQLITE3_ASSOC);

        if ($row != "") {
            $speed = $row['obstacle'];
        }

        return $speed;
    }
    function getIsConnected($carid) {
        $sql = $this->cardbconnection($carid);
        $row = $sql->fetchArray(SQLITE3_ASSOC);
        if($row['carId'] == "Unset"){
            return false;
        }
        return $this->isConnected;

    }

    function setIsConnected($isConnected) {
        $this->isConnected =$isConnected;
    }
    public function getWins($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['wins'];
    }
    public function getLosses($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['losses'];
    }
    function getGameLevel() {
        return $this->gameLevel;
    }
    public function getCompletion($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['completion'];
    }
    public function getEasy($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['easy'];
    }
    public function getMedium($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['medium'];
    }
    public function getDifficult($carid) {
        $car = $this->gamedbconnection($carid);
        $row = $car->fetchArray(SQLITE3_ASSOC);
        return $row['difficult'];
    }

    /*public function getConnection($carid) {
        $sql = "SELECT * FROM car WHERE car_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($carid);
        $car = $stmt->fetchall();
        foreach ($car as $carinfo) {
            echo $carinfo['speed'];
        }
    }*/

    /*public function getObstacle($carid) {
        $sql = "SELECT * FROM car WHERE car_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($carid);
        $car = $stmt->fetchall();
        foreach ($car as $carinfo) {
            echo $carinfo['obstacle'];
        }
    }*/
}
?>