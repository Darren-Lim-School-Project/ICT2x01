<?php

require_once "../mvc/model/databaseCon.php";
    class loginClass extends databaseCon
    {

        protected function getUser($username, $password)
        {

            $conn = $this->connect();
            $query = $conn->query("SELECT COUNT(*) as count FROM `user` WHERE `username`='$username' AND `password`='$password'");
            $row = $query->fetchArray();
            $count = $row['count'];

            if ($count > 0) {
                return true;
            } else {
                return false;
            }



        }
    }