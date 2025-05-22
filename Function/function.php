<!-- function declation -->

<?php
  function hello(){
    echo "Hello world <br>";
  }
  hello();
?>

<!-- function with parameter -->


<?php
  function greet($name){
    echo "Hello ". $name."<br>";
  }
  greet("John Doe");
?>

<!-- function with return value -->

<?php
 function sum($a , $b){
    return $a + $b;
 }     
 $allsum = sum(5, 10);
 echo $allsum;
 
?>

<!-- function with default value -->

<?php
 function greet2($name = "Guest"){
    echo "Hello ". $name."<br>";
 }
 greet2();
 greet2("John Doe");
?>