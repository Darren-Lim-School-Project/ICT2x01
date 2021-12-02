<?php
namespace Model;

class dashboard extends databaseCon {
    private  bool $isConnected = False;

    public function cardbconnection($carid) {
        $sql = "SELECT * FROM car WHERE car_id = ? ORDER BY id desc";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($carid);
        $car = $stmt->fetch();
        return $car;
    }
    public function gamedbconnection($carid) {
        $sql = "SELECT * FROM game WHERE car_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute($carid);
        $car = $stmt->fetchall();
        return $car;
    }
    public function getSpeed($carid) {
        $car = $this->cardbconnection($carid);
        echo $car['speed'];
    }
    public function getObstacle($carid) {
        $car = $this->cardbconnection($carid);
        echo $car['obstacle'];
    }
    function getIsConnected() {
        return $this->isConnected;
    }

    function setIsConnected($isConnected) {
        $this->isConnected =$isConnected;
    }
    public function getWins($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['wins'];
    }
    public function getLosses($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['losses'];
    }
    public function getCompletion($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['completion'];
    }
    public function getEasy($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['easy'];
    }
    public function getMedium($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['medium'];
    }
    public function getDifficult($carid) {
        $car = $this->gamedbconnection($carid);
        echo $car['difficult'];
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

$dashboard = new dashboard();
$dashboard->getSpeed(1);
?>