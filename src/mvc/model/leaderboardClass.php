<?php
include "databaseCon.php";
class leaderboardClass extends databaseCon
{
    public function getArrayData($mode)
    {
        $id = [];
        $username = [];
        $score = [];
        $carId = [];
        $difficulty = [];
        $conn = $this->connect();
        $query = $conn->query("SELECT * FROM scoreboard");
        while ($row = $query->fetchArray()) {
            $id[] = $row['id'];
            $username[] = $row['username'];
            $score[] = $row['score'];
            $carId[] = $row['carId'];
            $difficulty[] = $row['difficulty'];
        }
        if($mode == 1){
            return $id;
        }
        elseif ($mode == 2){
            return $username;
        }
        elseif ($mode == 3){
            return $score;
        }
        elseif ($mode == 4){
            return $carId;
        }
        elseif ($mode == 5){
            return $difficulty;
        }
        return true;
    }
}