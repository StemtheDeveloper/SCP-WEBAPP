<?php
$user = "a30046405_LemonStem";
$db = "a30046405_SCPapp";
$pw = "LemonData1";

// Database connection
$connection = new mysqli('localhost', $user, $pw, $db);

// Check for connection errors
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
