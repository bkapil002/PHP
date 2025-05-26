<!-- Remember that  when you complete the fist step the remove then come to second and same as in third step -->
<!-- fist step -->
<!-- how to connect -->

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}

echo "Connected successfully";
?>





<!-- second step -->
 <!-- how to create database -->

<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
echo "Connected successfully";


$sql = "CREATE DATABASE kapil";

if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". mysqli_error($conn);
}

mysqli_close($conn);

?>




<!-- third step -->
 <!-- how to create table -->

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

$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
passwords  VARCHAR(200) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ";

if(mysqli_query($conn,$sql)){
    echo "Database created successfully";
}else{
    echo "Error creating database: ". mysqli_error($conn);
}

mysqli_close($conn);
?>