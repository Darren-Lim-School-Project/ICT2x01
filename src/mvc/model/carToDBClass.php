<?php
require_once "databaseCon.php";
    class carToDBClass extends databaseCon {
        public function insertSpeed($speed) {
            $conn = $this->connect();
            $stmt = $conn->prepare("INSERT INTO car (carId, obstacle, speed) VALUES ('IRAcer0x121', 5, 5)");
            $insertData = $stmt->execute();
        }
    }
?>