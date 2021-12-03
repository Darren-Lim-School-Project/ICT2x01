<?php

require_once "../mvc/model/databaseCon.php";
class updateClass extends databaseCon
{

    protected function updatePw($newPassword, $username, $password )
    {
        $conn = $this->connect();
        $stmt = $conn->query("UPDATE `user` SET `password` = '$newPassword' WHERE `username` = '$username' AND `password` = '$password'");
        $conn->exec($stmt);
        //Run a check
        $check = new loginController($username, $newPassword);
        if($check ->checkUser()== true){
                return true;
        } else {
                return false;
        }




    }
}