<!-- IF -->
<?php
$x=5;

if($x <= 5){
    echo"The number is 5 <br>";
}
?>

<!-- ELSEIF -->

 <?php
$x=5;

if($x < 5){
    echo "less then 5 <br>";
} elseif($x == 5){
    echo "The number is 5 <br>";
} else{
    echo "greater then 5 <br>";
}
?>

<!-- ELSE -->
 <?php
$x=5;

if($x < 5){
    echo "less then 5 <br>";
} else{
    echo "greater then 5 <br>";
}
?>

<!-- Switch -->
 <?php
$color="blue";

switch($color){
    case "red":
        echo "The color is red";
        break;
    case "green":
        echo "The color is green";
        break;
    case "blue":
        echo "The color is blue";
        break;
    default:
        echo "The color is not red, green or blue";
}

?>