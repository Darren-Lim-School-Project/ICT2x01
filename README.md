# ICT2x01-p4-9
ICT2x01-p4-9 Software Engineering Repository

# Whitebox Testing.

The team used **WhitelistController** class for the Whitebox Testing Section of Milestone 3. The **WhitelistController** class is used to handle the interaction between the **WhitelistClass**, **DatabaseCon** Class, **Users** and **Administrators** using the Web Application.



## WhitelistController Class:
The **WhitelistController** class consists of **5** Functions and **1** Constructor.
```php
#Functions of WhitelistController Class:

public function __construct($carId);
public function addCar();
public function removeCar();
public function checkEntry();
public function getTableData($mode);
private function isEmptyInput();

```
## Control Flow Graphs

The CFGs for each function were created before coming up with the test cases / test suite.

![CFGWhitelistController](https://user-images.githubusercontent.com/28041652/144755133-a9b6be20-2a27-4c72-a679-8dd57584d85d.png)


## Test Cases:
The following tests were used in the test suite for testing **WhitelistController** and can be found in the "***WhiteboxTesting***" branch and is located at ***"tests/WhitelistTest.php"*** 

```php
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

```

## Test Case Results:

The Test Case Results of the above test suite were all successful.

![testcases (1)](https://user-images.githubusercontent.com/28041652/144755986-0e851a6f-e505-4d3c-a2f6-a025e428559a.gif)

## Code Coverage Results:

The Code Coverage statistics displayed a coverage of 100% of all of the codes in the class when running the test suite. 

![codecoverage](https://user-images.githubusercontent.com/28041652/144756010-b36bb255-e54e-40d4-9659-b73e5bd5846e.gif)

The test results were generated using PHPUnit. 

## PHPUnit: Running Test Suite and Code Coverage



The test suite and code coverage statistics were run and generated using an automated testing framework lib for PHP called **PHPUnit**. **PHPUnit** requires **Composer** to be installed and uses **XDebug** to run an automated code coverage check. 

Follow the steps below on how to set-up **PHPUnit**, **Composer** and **XDebug** to run the Test Suite and Code Coverage. 

## Running the Test Suite
### Installation and Run:
>Composer:
1) Click on this [link](https://getcomposer.org/download/) and download **Composer-Setup.exe**.
2. Run the downloaded executable and follow the steps to complete the installation.
>PHPUnit:
1. Once Composer is installed, open up your terminal/command prompt and run the following:
```javascript
composer require phpunit/phpunit ^9
```
2. To check if PHPUnit is properly installed, run the following and observer if there is an output. ***(Ensure your directory is at the root of your source codes)***:
```javascript
./vendor/bin/phpunit --version
```
3. In the root directory of your codes, create a **phpunit.xml** file and include the following:
```php
<?xml version="1.0" encoding="UTF-8" ?>
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         stopOnFailure="false">

         <testsuites>
            <testsuite name="Whitelist">
                <directory>tests</directory>
            </testsuite>
         </testsuites>

    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">src/mvc/controller/whitelistController.php</directory>
            <file>/path/to/file</file>
        </whitelist>
    </filter>
</phpunit>
```
4. To run the test suite, run the following command:
* Note that PHPUnit detects test suites that are stored in the tests directory. 
```php
./vendor/bin/phpunit --testdox
```
If you see the following output, you have successfully ran the test suite !

Example of a successful Unit Test:

![UnitTest](https://user-images.githubusercontent.com/28041652/144755534-6640dd6d-1284-43a0-93e5-0b223d45a8c7.png)

Example of a failed Unit Test:

![Screenshot 2021-12-06 004953](https://user-images.githubusercontent.com/28041652/144755642-a0cd1a7f-39c8-4a09-b3ce-279e2af7d6ec.png)


## Code Coverage
### Installation and Run:
>Xdebug:

1. After installing PHPUnit and Composer, Xdebug is required to run the code coverage command using PHPUnit. In the terminal/command prompt (In your source code root directory), run the following:
```
composer require phpunit/php-code-coverage
```
2. Install Xdebug by navigating to [here](https://xdebug.org/wizard);
3. Generate and paste your [phpinfo()](https://www.gurock.com/testrail/docs/admin/howto/running-phpinfo) source code. 
4. Follow the instructions on downloading the necessary Xdebug files.
5. In php.ini, include the 2 lines below:
```
zend_extension=xdebug
xdebug.mode=coverage
```
6. Restart your webserver/IDE and run the following command in the terminal (in your source code root directory)
```
./vendor/bin/phpunit --coverage-html coverageStats
```
This will generate several HTML files in coverageStats folder. Run the files to get your coverage results!

![Screenshot 2021-12-06 004737](https://user-images.githubusercontent.com/28041652/144755491-45cbecbb-1a37-40f9-9ffe-9c0b077e2fac.png)

After running whitelistController.php.html:

![CoverageStats](https://user-images.githubusercontent.com/28041652/144756075-20a4b665-3315-4682-8e6e-52dd7ed2d2e6.png)
    
![Code Coverage Resutls](https://user-images.githubusercontent.com/28041652/144755518-77e9655c-94e4-4758-841d-12e81124b898.png)





