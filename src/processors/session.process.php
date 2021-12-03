<?php
session_start();
// set timeout period in seconds
$inactive = 900;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['carId']) || isset($_SESSION['role'])) {
    if(isset($_SESSION['timeout'])) {
        $session_life = time() - $_SESSION['timeout'];
        if($session_life > $inactive)
        { session_destroy(); header("Location: login.php?session=expired"); }
    }
    $_SESSION['timeout'] = time();

}
else {
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    if($curPageName != "connect.php" and $curPageName != "login.php") {
        header("Location: connect.php");
    }


}
