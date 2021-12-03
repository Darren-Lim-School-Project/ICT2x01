<?php

    use mysql_xdevapi\Exception;

    class databaseCon {

        protected function connect() {
            try {
                $conn = new \SQLite3(dirname(__DIR__) . '../../../db/db_user');
                return $conn;
            }
            catch (Exception $e){
                //throw $th
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function selectWhitelist($mode)
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
            }
            return true;
        }
    }


