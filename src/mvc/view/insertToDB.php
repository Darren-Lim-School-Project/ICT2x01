<?php
include '../../processors/session.process.php';
require_once "../model/insertToDBClass.php";

    $uname = $_GET['name'];
    $newscore = $_GET['score'];
    $diffi = $_GET['difficulty'];
    $caridd = $_GET['carid'];

    echo $uname ;
    echo '<br>';
    echo $newscore ;
    echo '<br>';
    echo $diffi ;
    echo '<br>';
    echo $caridd ;
    echo '<br>';



    $score = new insertToDBClass();
    $score->insertScore($uname, $newscore, $diffi, $caridd);
    header("Location: leaderboard.php");
    exit();

?>

Hello World
