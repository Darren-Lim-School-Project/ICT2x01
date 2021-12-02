<?php
namespace Model;

    class databaseCon {
        protected $conn;
        protected function connect() {
            $conn = new \SQLite3(dirname(__DIR__) . '../../../db/db_user.db') or die("Unable to open database!");
            return $conn;
        }
    }

?>