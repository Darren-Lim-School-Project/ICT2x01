<?php

class updateAccModel{
    private $username;
    private $password;
    private $newPassword;
    private $newPasswordRepeat;

    public function __construct($username, $password, $newPassword, $newPasswordRepeat)
    {
        $this->username = $username;
        $this->password = $password;
        $this->newPassword = $newPassword;
        $this->newPasswordRepeat = $newPasswordRepeat;
    }

    // Check if input is empty
    private function emptyInput() {
        $result = false;
        if(empty($this->username) || empty($this->password) || empty($this->newPassword) || empty($this->newPasswordRepeat)){
            $results = false;
        }
        else{
            $result = true;
        }
        return $result;
    }

    private function pwdMatch(){
        $result = false;
        if($this->newPassword !== $this->newPasswordRepeat)
        {
            $result ==false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}
