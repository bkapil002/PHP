<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kapil";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";

$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$passwords = $_POST['passwords'];
  

$check  = $conn->prepare("SELECT email FROM MyGuests WHERE email = ?");
$check ->bind_param("s", $email);
$check ->execute();
$check  ->store_result();

if($check ->num_rows > 0){

    echo "Email already exists";

}else{

    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname,email,passwords)VALUE(?,?,?,?)");
    $stmt->bind_param("ssss",$firstname , $lastname, $email , $passwords);


    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: login.html");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$check  -> close();
$conn->close();
?>