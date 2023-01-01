<?php
// (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "db_hotel_management");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");
 
// (B) CONNECT TO DATABASE
$pdo = new PDO(
  "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
  DB_USER, DB_PASSWORD, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

// (C) SEARCH
// $stmt = $pdo->prepare("SELECT * FROM `login_table` WHERE `username` LIKE ? OR `email` LIKE ?");
// $stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
// $results = $stmt->fetchAll();
// if (isset($_POST["ajax"])) { echo json_encode($results); }