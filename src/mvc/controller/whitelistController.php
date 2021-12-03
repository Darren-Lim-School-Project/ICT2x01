<?php

require_once "../mvc/model/whitelistClass.php";

class whitelistController extends whitelistClass {
    private $carId;

    public function __construct($carId)
    {
        $this->carId = $carId;
    }

    public function addCar(){
        /* Check if there is already an entry */
        if($this->checkEntryForAdding() == true){
            header("location: ../mvc/view/whitelistAdd.php?result=duplicateEntry");
            exit();
        }
        return $this->addCarEntry($this->carId);
    }

    public function removeCar(){
        /* Check if there is an entry */
        if($this->checkEntryForRemoving() == false){
            header("location: ../mvc/view/whitelistRemove.php?result=noEntry");
            exit();
        }
        return $this->removeCarEntry($this->carId);
    }


    /* Check Car Entry Functions */
    public function checkEntryForAdding(){
        if($this->isEmptyInput() == true){
            header("location: ../mvc/view/whitelistAdd.php?error=emptyinput");
            exit();
        }
        /* Check if there is already a car with the same entry */
        $getEntryRes = $this->getStatus($this->carId);
        if($getEntryRes == true){
            return true;
        }
        return false;

    }

    public function checkEntryForRemoving(){
        if($this->isEmptyInput() == true){
            header("location: ../mvc/view/whitelistRemove.php?error=emptyinput");
            exit();
        }
        /* Check if there is already a car with the same entry */
        $getEntryRes = $this->getStatus($this->carId);
        if($getEntryRes == true){
            return true;
        }
        return false;

    }

    public function checkWhitelisted(){
        if($this->isEmptyInput() == true){
            header("location: ../mvc/view/connect.php?result=emptyinput");
            exit();
        }
        /* Check if car is whitelisted */
        return $this->getStatus($this->carId);
    }

    private function isEmptyInput(): bool
    {
        if(empty($this->carId)){
            return true;
        }
        else{
            return false;
        }

    }
}
