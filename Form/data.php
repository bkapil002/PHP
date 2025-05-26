<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$stmt = $conn->prepare("INSERT INTO myGuests (firstname, lastname, email, passwords) VALUES (?, ?, ?, ?)");
if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("ssss", $firstname, $lastname, $email, $passwords);

// Set parameters
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$passwords = $_POST['passwords']; 


if ($stmt->execute()) {
    echo "New records created successfully";
} else {
    echo "Execute failed: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
