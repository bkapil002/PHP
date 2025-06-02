<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = 'brahm';



$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "DB connection failed."]));
}




?>
