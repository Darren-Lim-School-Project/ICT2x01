<?php
require_once "../mvc/model/updateClass.php";
require_once "loginController.php";
class updateController extends updateClass
{
    private $username;
    private $password;
    private $newPassword;

    public function __construct($newPassword, $username, $password )
    {
        $this->username = $username;
        $this->password = $password;
        $this->newPassword = $newPassword;
    }
    public function updatePassword()
    {

        if ($this->isEmptyInput() == true) {
            //echo "Empty Input!";
            header("location: ../updatepw.php?error=emptyinput");
            exit();
        }
        if ($this->isValidPassword() == true) {
            if ($this->updatePw($this->newPassword, $this->username, $this->password) == true) {
                return true;
            } else {
                header("location: ../updatepw.php?error=unsuccessful");
                exit();
            }
        }
        header("location: ../mvc/view/updatepw.php?error=wrongpassword");
        exit();
    }





    private function isValidPassword(): bool
    {
        $check = new loginController($this->username,$this->password);

        if($check ->checkUser() == true){
            return true;
        }
        else
        {
            return false;
        }
    }
    private function isEmptyInput(): bool
    {
        $result =false;

        if(empty($this->username) || empty($this->password) || empty($this->newPassword)){
            $results = true;
            return $result;
        }
        else{
            $result = false;
            return $result;
        }
    }
}