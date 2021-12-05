<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
if($curPageName == "whitelistView.php") {
    include "../model/whitelistClass.php";
    include "../../interfaces/IDatabase.php";
} else if($curPageName == "whitelistAdd.process.php" || $curPageName == "connect.process.php" || $curPageName == "whitelistRemove.process.php") {
    require_once "../mvc/model/whitelistClass.php";
    include "../interfaces/IDatabase.php";
} else {
    require_once "src/mvc/model/whitelistClass.php";
    include "src/interfaces/IDatabase.php";
}

class whitelistController extends whitelistClass implements IDatabase {
    private $carId;

    public function __construct($carId)
    {
        $this->carId = $carId;
    }

    /** Check if there is already an entry */
    public function addCar(){
        if($this->checkEntry() == "true"){
            return "duplicateEntry";
        }
        return $this->addCarEntry($this->carId);
    }

    /** Check if there is an entry */
    public function removeCar(){
        if($this->checkEntry() == "false"){
            return "noEntry";
        }
        return $this->removeCarEntry($this->carId);
    }

    /** Check if there is already a car with the same entry */
    public function checkEntry(){
        if($this->isEmptyInput() == true){
            return "emptyInput";
        }
        $getEntryRes = $this->getStatus($this->carId);
        if($getEntryRes == "true"){
            return "true";
        }
        return "false";
    }

    /** Check if input is Empty */
    private function isEmptyInput(): bool {
        if(empty($this->carId)){
            return true;
        }
        else{
            return false;
        }
    }

    /** Get Necessary Data in Array format depending on the Data needed */
    public function getTableData($mode){
        if($this->getArrayData($mode) == false){
            return false;
        }
        else {
            return $this->getArrayData($mode);
        }
    }
}
