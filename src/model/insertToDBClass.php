<?php
require_once "../../mvc/model/databaseCon.php";
    class insertToDBClass extends databaseCon {
    public function insertScore($uname, $newscore, $diffi, $caridd ) {
        $intscore = intval($newscore);
        $newuname = strval($uname);
        $newcarid = strval($caridd);

        $conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO scoreboard (carId, username, difficulty, score) VALUES ( '$newcarid', '$newuname', '$diffi', '$intscore' )");
        //$stmt = $conn->prepare("INSERT INTO scoreboard (carId, username, difficulty, score) VALUES ( ?, ? , ? , ? )");
        //$stmt->bind_param(, $uname, $diffi, $newscore );
        $insert = $stmt->execute();
        return $insert;

    }
}
?>