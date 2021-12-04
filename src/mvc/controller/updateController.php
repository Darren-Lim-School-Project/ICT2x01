<?php
require_once "../mvc/model/updateClass.php";
require_once "loginController.php";
class updateController extends updateClass
{
    private $username;
    private $password;
    private $newPassword;
    private $salt;
    private $hashedNew;
    private $hashedOld;

    public function __construct($newPassword, $username, $password )
    {
        $this->username = $username;
        $this->password = $password;
        $this->newPassword = $newPassword;
        $this->salt = "ICT2201isFun";
        $this->hashedNew = hash("sha256", $this->newPassword . $this->salt);
        $this->hashedOld = hash("sha256", $this->password . $this->salt);
    }
    public function updatePassword()
    {

        if ($this->isEmptyInput() == true) {
            //echo "Empty Input!";
            header("location: ../updateAdmin.php?error=emptyinput");
            exit();
        }
        if ($this->isValidPassword() == true) {
            if ($this->updatePw($this->hashedNew, $this->username, $this->hashedOld, $this->newPassword) == true) {
                return true;
            } else {
                header("location: ../updateAdmin.php?error=unsuccessful");
                exit();
            }
        }
        header("location: ../mvc/view/updateAdmin.php?error=wrongpassword");
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
        if(empty($this->username) || empty($this->password) || empty($this->newPassword)){
            return true;
        }
        else{
            return false;
        }
    }
}