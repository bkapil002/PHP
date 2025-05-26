<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$passwords = $_POST['passwords'];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $stmt = $conn->prepare("SELECT passwords FROM myGuests WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($db_password);
        $stmt->fetch();

        if (password_verify($passwords, $db_password)) {
            echo "Login successful";
            header("location:home.php");
            
        } else {
            echo "Wrong password";
        }
    } else {
        echo "Email not found";
    }

    $stmt->close();
} else {
    echo "Invalid email format";
}

$conn->close();
?>
