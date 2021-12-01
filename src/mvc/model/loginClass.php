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
                echo "<div class='alert alert-success'>Login successful</div>";
                session_start();
                $_SESSION['role'] = "Admin";
                return $row['count'];
            } else {
                echo "<div class='alert alert-danger'>Invalid username or password</div>";
                return $row['count'];
            }



        }
    }