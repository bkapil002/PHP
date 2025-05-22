<!-- Searching & Replacing -->

<?php
$str = "hello world";

echo strlen($str);
echo strrev($str);
echo strtolower($str);
echo strtoupper($str);
?>

<!-- Substrings -->
 <?php
echo substr("abcdef", 1);      // bcdef
echo substr("abcdef", 1, 3);   // bcd
?>

<!-- Trimming and Removing Whitespaces -->

<?php
$str = "   Hello PHP!   ";

echo trim($str);    // "Hello PHP!"
echo ltrim($str);   // "Hello PHP!   "
echo rtrim($str);   // "   Hello PHP!"
?>