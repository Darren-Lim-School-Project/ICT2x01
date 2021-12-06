<?php
$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
if($curPageName == "leaderboard.php") {
    include "../model/leaderboardClass.php";
    include "../../interfaces/IDatabase.php";
} else {
    require_once "../mvc/model/leaderboardClass.php";
    include "../interfaces/IDatabase.php";
}
class leaderboardController extends leaderboardClass implements IDatabase
{
    
    public function getTableData($mode)
    {
        return $this->getArrayData($mode);
    }
}