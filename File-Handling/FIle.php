<!-- create file -->

<?php
$filee = fopen("demo.txt","w");
if($filee){
    echo "File created successfully.";
    fclose($filee);
};
?>

<!-- write to file -->

<?php
$filee = fopen("demo.txt","w");
fwrite($filee , "hello brahm");
fclose($filee);
?>

<!-- read to file -->

<?php
$filee = fopen("demo.txt","r");
$constant = fread($filee , filesize('demo.txt'));
echo $constant;
fclose($filee)
?>

<!-- exist to file -->

<?php
if(file_exists("demo.txt"))
{
    echo "File exists.";
} else {
    echo "File does not exist";
};
?>

<!-- delete to file -->

<?php
if(file_exists("demo.txt")){
    unlink("demo.txt");
    echo "File deleted successfully.";
}
?>