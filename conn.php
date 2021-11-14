<?php
$conn = new SQLite3('db/db_user') or die("Unable to open database!");
$query = "CREATE TABLE IF NOT EXISTS `user`(user_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, username TEXT, password TEXT, name TEXT)";
$conn->exec($query);

$query = $conn->query("SELECT COUNT(*) as count FROM `user`");
$row = $query->fetchArray();
$countRow = $row['count'];

if ($countRow == 0) {
    $conn->exec("INSERT INTO `user` (username, password, name) VALUES('admin', 'admin', 'Administrator')");
}
?>