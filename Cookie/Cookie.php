 <!-- Set a Cookie -->

 <?php
 setcookie("user" , "johnDoe" , time() + (86400 * 7));
 echo "Cookie set successfully";
 ?>


<!-- Access a Cookie -->

<?php
if(isset($_COOKIE["user"])){
    echo "Welcome ". $_COOKIE["user"];
}else{
    echo "Cookie not set";
}
?>


 <!-- Delete a Cookie -->

 <?php
 setcookie("user","",time() - 3600);
 echo "Cookie deleted successfully";
 ?>
