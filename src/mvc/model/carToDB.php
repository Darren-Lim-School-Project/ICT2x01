<?php

namespace Model;
    class carToDB extends databaseCon {
        public function insertSpeed($speed) {
            $conn = $this->connect();
            $stmt = $conn->prepare("INSERT INTO car (car_id, obstacle, speed) VALUES (1, 5, 5)");
            $insertData = $stmt->execute();
        }
    }
?>