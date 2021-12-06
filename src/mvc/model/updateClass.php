<?php

require_once "../mvc/model/databaseCon.php";
class updateClass extends databaseCon
{

    protected function updatePw($hashedNew, $username, $hashedOld, $newPassword)
    {
        $conn = $this->connect();
        $conn->query("UPDATE user SET password = '$hashedNew' WHERE username = '$username' AND password = '$hashedOld'");
        //Run a check
        $check = new loginController($username, $newPassword);
        if($check ->checkUser()== true){
            return true;
        } else {
            return false;
        }




    }
}