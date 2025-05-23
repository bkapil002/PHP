<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars( $_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);

    echo"Email: ".$email."<br>";
    echo"Name: ".$name."<br>";
    echo"Phone: ".$phone."<br>";
}else{
    echo "Invalid request method";
}

?>