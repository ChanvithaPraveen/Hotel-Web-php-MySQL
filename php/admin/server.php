<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is db_hotel_management
$database = 'db_hotel_management';

// Server is localhost with
$servername = 'localhost';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// SQL query to select data from database
$userssql = " SELECT * FROM login_table ORDER BY user_id ASC";
$result_one = $mysqli->query($userssql);

$reservationsql = " SELECT * FROM reservation_table ORDER BY reservation_id ASC";
$result_two = $mysqli->query($reservationsql);

$subscriberssql = " SELECT * FROM subscribers_table ORDER BY subscriber_id ASC";
$result_three = $mysqli->query($subscriberssql);


$mysqli->close();

?>