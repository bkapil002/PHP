<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$email = $_POST['email'];
$passwords = $_POST['passwords'];

$stmt= $conn->prepare("SELECT passwords FROM myGuests WHERE email = ?");

$stmt->bind_param("s", $email);

$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($db_password);
    $stmt->fetch();

    if (password_verify($passwords, $db_password)) {
        echo "Login successful";
    } else {
        echo "Wrong password";
    }
}else{
    echo "Email not found";
}

$stmt->close();

$conn->close();
?>
