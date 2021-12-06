<?php
include "src/mvc/controller/whitelistController.php";
class WhitelistTest extends \PHPUnit\Framework\TestCase {

    /** Add New Car for Test Environment */
    public function testDatabaseSetUp() {

        $whitelist = new whitelistController("DuplicateCar");
        $result= $whitelist->addCar();
        $this->assertEquals("true", $result);
    }

    public function testAddCarDuplicate() {

        $whitelist = new whitelistController("DuplicateCar");
        $result = $whitelist->addCar();
        $this->assertEquals("duplicateEntry",$result);
    }

    public function testAddCarNew() {

        $whitelist = new whitelistController("NewCar");
        $result = $whitelist->addCar();
        $this->assertEquals("true", $result);
    }

    public function testRemoveCarEntryPresent() {
        $whitelist = new whitelistController("NewCar");
        $result = $whitelist->removeCar();
        $this->assertEquals("true", $result);
    }

    public function testRemoveCarNoEntry() {
        $whitelist = new whitelistController("NewCar");
        $result = $whitelist->removeCar();
        $this->assertEquals("noEntry",$result);

    }
    public function testCheckEntryEmptyInput(){
        $whitelist = new whitelistController("");
        $result = $whitelist->checkEntry();
        $this->assertEquals("emptyInput",$result);
    }

    public function testCheckEntryIsTrue(){
        $whitelist = new whitelistController("DuplicateCar");
        $result = $whitelist->checkEntry();
        $this->assertEquals("true", $result);
    }

    public function testCheckEntryIsFalse(){
        $whitelist = new whitelistController("NoSuchCar");
        $result = $whitelist->checkEntry();
        $this->assertEquals("false", $result);
    }

    public function testGetWhitelistIdArray(){
        $whitelist = new whitelistController("");
        $mode = 1;
        $result = $whitelist->getTableData($mode);
        $this->assertIsArray($result);
    }

    public function testGetWhitelistCarCodeArray(){
        $whitelist = new whitelistController("");
        $mode = 2;
        $result = $whitelist->getTableData($mode);
        $this->assertIsArray($result);
    }

    public function testGetWhitelistNoValidModeInputted(){
        $whitelist = new whitelistController("");
        $mode = 3;
        $result = $whitelist->getTableData($mode);
        $this->assertFalse($result ,"Assert False when it is not mode 1 or 2");
    }

    /** For Removal of Test Environment */
    public function testDatabaseRemoval() {

        $whitelist = new whitelistController("DuplicateCar");
        $result=$whitelist->removeCar();
        $this->assertEquals("true", $result);;
    }
}