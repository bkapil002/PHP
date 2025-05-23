<!-- Start a Session -->

<?php
session_start();

$_SESSION["username"] = "john";

echo "Session started successfully ".$_SESSION["username"];
?>


<!-- Access Session on Another Page -->

<?php
session_start();

if(isset($_SESSION["username"])){
    echo "Welcome, ".$_SESSION["username"];
}else{
    echo "Session not started";
}
?>

<!-- Destroy a Session (Logout) -->

<?php
session_start();
session_unset();
session_destroy();
echo"You have been logged out";
?>