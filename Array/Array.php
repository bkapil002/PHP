<!-- indexed Array -->

<?php
  $colers = ["red","blue" , "pink" , "yellow"];

//   echo $colers[0];

  foreach($colers as $color){
    echo"this is the coler:" .$color. "<br>";
  }
?>

<!-- Associative Array -->

<?php
$person =[
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

echo $person["name"]. "<br>";

foreach($person as $key => $value){
    echo $key. ":". $value. "<br>";
}
?>

<!-- Multidimensional Array -->

<?php
$student =[
    ["kapil" , 20],
    ["Ravi" , 22],
    ["John" , 25]
];

for($i =0 ; $i < count($student); $i++){
    echo "Name: ". $student[$i][0]. ", Age: ". $student[$i][1]. "<br>";
}
?>