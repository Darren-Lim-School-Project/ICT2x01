# ICT2x01-p4-9
ICT2x01-p4-9 Software Engineering Repository

-----------------------------------------------------------------------------------------------------------------------------------------------------------------

# How to run
Before you start anything, do ensure that you had installed PHP and it is running the latest version, v8.0.13.

Once you had installed PHP, navigate to the PHP folder and open up ```php.ini``` to make the following configuration:

```extension=pdo_sqlite```

```extension=sqlite3```

```
[sqlite3]
; Directory pointing to SQLite3 extensions
; http://php.net/sqlite3.extension-dir
sqlite3.extension_dir = INSERT THE DIRECTORY OF YOUR PHP EXT PATH (Example: C:\xampp\php\ext)
```

## Prerequisite
PHP: ```https://www.php.net/downloads.php#v8.0.13```

## Steps to run IRAcer (For Windows)
1. Clone ```ICT2x01-p4-9```
2. Go to the parent directory of the project folder
3. Shift + Right Click and select ```Open Powershell Windows Here```
4. Enter ```php -S localhost:8000``` at Powershell Windows
5. Open web browser and access ```htttp://localhost:8000/src/mvc/view/login.php```

## Steps to run IRAcer (For Mac)
1. Clone ```ICT2x01-p4-9```
2. Open Terminal and change the directory to the parent directory of the project folder
3. Enter ```php -S localhost:8000```
4. Open web browser and access ```htttp://localhost:8000/src/mvc/view/login.php```

# Development workflow

The team utilised various Git/Github features throughout the course of this SE project. Each member has their own development branch for pushing updates to and when those updates are validated and tested, it will be merged with ```main```. The development branches run along side the ```main``` branch and provides the team the most updated development changes.

## Setting up the project

1. Clone the project
	```https://github.com/hakimrazalee/ICT2x01-p4-9.git```
2. From here onwards, developers have the option use use CLI git or the Github Desktop application for their development needs

## Workflow

1. Ensure that you have the latest codes from ```main```
2. Create a new branch for development
3. Code your features and ensure that it works by testing your code
4. Push your code to Github
5. Submit a merge request via the Github webpage
6. Wait until the techleads has tested your feature and approves the merge

## Commit rules

1. Changes to the repository must be first done in the team members dev branch.
	- Naming convention for said branch will be as followed ```<name>-dev```.
2. Once changes are finalised on the users own branch, they will contact the group and the techleads for the team will run test before merging the commits to ```main```
3. Pull request to merge should be done through GitHub’s UI

Best practice: Commit changes regularly 

## Adding features

1. Any feature recommendations will be pinned onto the project board prior to group discussion during our meetings
2. If your features rely on someone else's work, please open an issue and tag that user to keep everyone updated to avoid code conflict

## Issue Management

1. Issue titles need to follow the following naming convention ```<feauture>/<feature_name>``` 
2. Issues must be tagged to <b><u>at least one</u></b> team member 
4. Issues <b><u>MUST</u></b> be ```closed``` before it can be merged into main

# UAT

## Updated Use Case Diagram & System State Diagram
### System State Diagram
Generally, the SSD remains the same, with the transition from one state to the other being the same. Only the transtion from Car Connected Console to Leaderboards has changed and the View Car Whitelisted state has been newly added, as highlighted below. The event[conditions]/actions has also been changed to match the functions used in the implementation.
![SSD](https://user-images.githubusercontent.com/71870881/144865312-5297b3fb-662e-42bc-95b2-f563cdd5250e.png)


## Embedded Video
https://user-images.githubusercontent.com/10690912/144833758-5ea092a1-0556-4fff-9f9b-a6a215fb4377.mp4



# Whitebox Testing

The team used **WhitelistController** class for the Whitebox Testing Section of Milestone 3. The `WhitelistController` class is used to handle the interaction between the `WhitelistClass`, `DatabaseCon` Class, **Users** and **Administrators** using the Web Application. Its main purpose is to check if a car is whitelisted and handle the adding or removal of cars from the whitelist.



## WhitelistController Class:
The `WhitelistController` class consists of **5** Functions and **1** Constructor.
```php
#Functions of WhitelistController Class:

public function __construct($carId);
public function addCar();
public function removeCar();
public function checkEntry();
public function getTableData($mode);
private function isEmptyInput();

```
## Path Coverage
We have decided to use Path Coverage for our testing as it is considered to be the most comprehensive and robust way to eliminate possible bugs or glitches in our Web Application. Since our Web Application will be used by students, we have to ensure that a comprehensive test is conducted so that the students will enjoy using our web application with a friendly user interface and limited bugs. To complement the path coverage approach, we have also used the Basis Path Testing method to ensure that we have sufficient coverage to uncover most bugs that will affect our system. This method makes use of the Cyclomatic Complexity to come up with the tests cases below.

```python
Cyclomatic Complexity Formula:
V(G) = edges(e) + nodes(n) + (2 * Connected components[p])
or
V(G) = e - n + 2(p)
```

## Control Flow Graphs

The CFGs for each function were created and the cyclomatic complexity were calculated before coming up with the test cases / test suite to ensure sufficient coverage in our testing.

![CFGWhitelistController](https://user-images.githubusercontent.com/28041652/144755133-a9b6be20-2a27-4c72-a679-8dd57584d85d.png)

### Testing Paths:

![InkedCFGWhitelistController](https://user-images.githubusercontent.com/28041652/144818985-6256bccd-b239-4480-b09b-501bdfd76fcf.jpg)

## Test Cases:
After calculating the Cyclomatic Complexity, the following tests were used in the test suite for testing `WhitelistController`. The test suite can be found in `master` branch and is located at `tests/WhitelistTest.php` from the repo root directory.

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

## Test Case Execution:

 After numerous refractoring and testing to ensure that the functions behave as intended, the test cases were all succesful.
 
### How Testing Was Executed [Demo]:

![testcases (1)](https://user-images.githubusercontent.com/28041652/144755986-0e851a6f-e505-4d3c-a2f6-a025e428559a.gif)

### Test Suite Result:

![UnitTest](https://user-images.githubusercontent.com/28041652/144755534-6640dd6d-1284-43a0-93e5-0b223d45a8c7.png)

## Code Coverage Execution:

The Code Coverage statistics displayed a coverage of 100% of all of the codes in the class when running the complete test suite. The coverage test results were generated using `PHPUnit`.  The code coverage results can be found in `master` branch and is located at `coverageStats/whitelistController.php.html` from the repo root directory.

### How Code Coverage Was Executed [Demo]

![codecoverage](https://user-images.githubusercontent.com/28041652/144756010-b36bb255-e54e-40d4-9659-b73e5bd5846e.gif)

## Code Coverage Statistics:

![CoverageStats](https://user-images.githubusercontent.com/28041652/144756075-20a4b665-3315-4682-8e6e-52dd7ed2d2e6.png)

Hovering over the green-highlighted code lines will also show us which test case covered the code:

![2021-12-06 16-17-37 (1)](https://user-images.githubusercontent.com/28041652/144811743-52871665-911f-437a-9da0-df9dfc3a74cd.gif)

### In CFG form:

![InkedCFGWhitelistController222](https://user-images.githubusercontent.com/28041652/144818771-56d0fad8-79a3-4c3e-9d33-639968990720.jpg)


## PHPUnit: Running Test Suite and Code Coverage

The test suite and code coverage statistics were run and generated using an automated testing framework library for PHP called **PHPUnit**. **PHPUnit** requires **Composer**, a tool for dependency management in PHP, to be installed and uses **XDebug**, a php extension that provides debugging options,  to run an automated code coverage check. 

The team decided to use this framework as it is well known for its accuracy and easy implementation into projects. Despite being known for its accuracy, the team also double checked by manually calculating the code coverages. Since the results are the same, we confirmed that PHPUnit should be used for our code coverages and our testing.

Follow the steps below on how to set-up **PHPUnit**, **Composer** and **XDebug** to run the Test Suite and Code Coverage. 

## Running the Test Suite

**Ensure to clone our repository before doing the following:**

### Installation and Run:
`Composer:`
1) Click on this [link](https://getcomposer.org/download/) and download **Composer-Setup.exe**.
2. Run the downloaded executable and follow the steps to complete the installation.

`PHPUnit:`
1. Once Composer is installed, open up your terminal/command prompt and run the following:
```javascript
composer require phpunit/phpunit ^9
```
2. To check if PHPUnit is properly installed, run the following and observe if there is an output. ***(Run command prompt or cd (change directory) of your command prompt to the same directory as your source codes)***:
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
* Note that PHPUnit automatically detects test suites that are stored in the **/tests** directory. 
```php
./vendor/bin/phpunit --testdox
```
If you see the following outputs, you have successfully ran the test suite !

Example of a successful Unit Test:

![UnitTest](https://user-images.githubusercontent.com/28041652/144755534-6640dd6d-1284-43a0-93e5-0b223d45a8c7.png)

Example of a failed Unit Test:

![Screenshot 2021-12-06 004953](https://user-images.githubusercontent.com/28041652/144755642-a0cd1a7f-39c8-4a09-b3ce-279e2af7d6ec.png)


## Code Coverage
### Installation and Run:
`Xdebug:`

1. After installing PHPUnit and Composer, Xdebug is required to run the code coverage command using PHPUnit. In the terminal/command prompt ***(Run command prompt or cd (change directory) of your command prompt to the same directory as your source codes)***, run the following:
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

----------------------------------------------------------------------------------------------------------------------------------------------------

# Personal Reflections

The team's personal reflection can be found in the `reflections` folder from the root directory.




