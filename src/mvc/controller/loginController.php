<?php

require_once "../mvc/model/loginClass.php";

class loginController extends loginClass {
    private $username;
    private $password;
    private $hashed;
    private $salt;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->salt = "ICT2201isFun";
        $this->hashed = hash("sha256", $this->password . $this->salt);
    }
    public function loginUser(){
        if($this->isEmptyInput() == true){
            //echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }

        $getUserRes = $this->getUser($this->username, $this->hashed);
        if($getUserRes == true){
            session_start();
            $_SESSION['role'] = "Admin";
            $_SESSION['username'] = "admin";
            return true;
        }
        return false;

    }

    public function checkUser(){

        if($this->isEmptyInput() == true){
            //echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        return $this->getUser($this->username, $this->hashed);
    }

    private function isEmptyInput(): bool
    {
        if(empty($this->username) || empty($this->password)){
            return true;
        }
        else{
            return false;
        }

    }
}
