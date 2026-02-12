<?php

// $password = "Dkp@97095";
// $user = "hrntechs_DHARMENDRA_97095";
// $host = "localhost";
// $database = "hrntechs_real_state";

$host = "localhost";
$user = "root";
$password = "";
$database = "real_state";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
