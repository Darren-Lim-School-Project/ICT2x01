<?php

    #use mysql_xdevapi\Exception;
    namespace Model;
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
    }
