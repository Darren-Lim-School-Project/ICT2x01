<?php
namespace Model;

class dashboard extends databaseCon {
    private  bool $isConnected = True;
    private int $gameLevel = 20;

    public function cardbconnection($carid) {

        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM car WHERE car_id = " . $carid . " ORDER BY id desc");
        $car = $stmt->execute();
        //$car = $result->fetchArray(SQLITE3_ASSOC);
        return $car;
    }
    public function gamedbconnection($carid) {
        $sql = "SELECT TOP 1 * FROM game WHERE car_id = " . $carid;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $car = $stmt->get_result();
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
    function getIsConnected() {
        return $this->isConnected;
    }

    function setIsConnected($isConnected) {
        $this->isConnected =$isConnected;
    }
    public function getWins($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['wins'];
    }
    public function getLosses($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['losses'];
    }
    function getGameLevel() {
        return $this->gameLevel;
    }
    public function getCompletion($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['completion'];
    }
    public function getEasy($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['easy'];
    }
    public function getMedium($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['medium'];
    }
    public function getDifficult($carid) {
        $car = $this->gamedbconnection($carid);
        return $car['difficult'];
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