<?php

require_once "../mvc/model/databaseCon.php";
    class whitelistClass extends databaseCon
    {
        protected function getStatus($carId): bool
        {
            $conn = $this->connect();
            $query = $conn->query("SELECT COUNT(*) as count FROM `whitelist` WHERE `carId`='$carId'");
            $row = $query->fetchArray();
            $count = $row['count'];
            if ($count > 0) {
                return true;
            } else {
                return false;
            }
        }

        protected function addCarEntry($carId): bool
        {
            $conn = $this->connect();
            $query = $conn->query("INSERT INTO `whitelist` (carId) VALUES ('$carId')");
            $conn->exec($query);
            /* Check if Insert was successful */
            $check = new whitelistController($carId);
            if ($check->checkEntryForAdding() == true) {
                return true;
            } else {
                return false;
            }
        }

        protected function removeCarEntry($carId): bool
        {
            /* Check if there is an Entry */
            $check = new whitelistController($carId);
            $conn = $this->connect();
            $query = $conn->query("DELETE FROM `whitelist` WHERE `carId`='$carId'");
            $conn->exec($query);
            /* Check if deleted the Entry */
            if ($check->checkEntryForRemoving() == false) {
                return true;
            }
            /* Else Something Went Wrong and Entry is still there */
            return false;
        }
    }