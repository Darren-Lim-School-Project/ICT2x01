<?php

namespace Model;

    class loginModel extends databaseCon {
        private $username;
        private $password;

        public function loginUser($username, $password) {
            $conn = $this->connect();
            $query = $conn->query("SELECT COUNT(*) as count FROM `user` WHERE `username`='$username' AND `password`='$password'");
            $row = $query->fetchArray();
            $count = $row['count'];
            return $count;
        }
    }

?>