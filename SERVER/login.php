<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json");

include 'server.php';

$data = json_decode(file_get_contents("php://input"),true);

$email = $data['email'];
$password = $data['password'];

$spl = "SELECT * FROM user WHERE email='$email'";
$return = $conn -> query($spl);

if ($return -> num_rows > 0) {
    $user = $return ->fetch_assoc();
      $user = $result->fetch_assoc();
  if (password_verify($password, $user['password'])) {
    echo json_encode(["status" => "success", "message" => "Login successful", "name" => $user['name']]);
  } else {
    echo json_encode(["status" => "error", "message" => "Invalid password"]);
  }
} else {
  echo json_encode(["status" => "error", "message" => "User not found"]);
}

$conn -> close();
?>