<?php

require_once "../mvc/model/loginClass.php";

class loginController extends loginClass {
    private $username;
    private $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    public function loginUser(){
        if($this->isEmptyInput() == true){
            //echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        $getUserRes = $this->getUser($this->username, $this->password);
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
        return $this->getUser($this->username, $this->password);
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
