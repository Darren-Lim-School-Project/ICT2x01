<?php


include "databaseCon.php";

    class whitelistClass extends databaseCon
    {
        protected function getStatus($carId)
        {
            $conn = $this->connect();
            $query = $conn->query("SELECT COUNT(*) as count FROM `whitelist` WHERE `carId`='$carId'");
            $row = $query->fetchArray();
            $count = $row['count'];
            if ($count > 0) {
                return "true";
            } else {
                return "false";
            }
        }

        protected function addCarEntry($carId)
        {
            $conn = $this->connect();
            $conn->query("INSERT INTO `whitelist` (carId) VALUES ('$carId')");
            /* Check if Insert was successful */
            $check = new whitelistController($carId);
            if ($check->checkEntry() == "true") {
                return "true";
            } else {
                return "false";
            }
        }

        protected function removeCarEntry($carId)
        {
            /* Check if there is an Entry */
            $check = new whitelistController($carId);
            $conn = $this->connect();
            $conn->query("DELETE FROM `whitelist` WHERE `carId`='$carId'");
            /* Check if deleted the Entry */
            if ($check->checkEntry() == "false") {
                return "true";
            }
            /* Else Something Went Wrong and Entry is still there */
            return "false";
        }

        protected function getArrayData($mode)
        {
            $id = [];
            $carId = [];
            $conn = $this->connect();
            $query = $conn->query("SELECT * FROM whitelist");
            while($row = $query->fetchArray()){
                $id[] = $row['id'];
                $carId[] = $row['carId'];
            }
            if($mode == 1){
                return $id;
            }
            else if($mode == 2){
                return $carId;
            } else {
                return false;
            }

        }


    }