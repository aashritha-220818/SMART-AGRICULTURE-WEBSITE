<?php 

echo "<h2>PART B: String Functions</h2>";


$hardString = "  Hello PHP World  ";
$userString = "smart agriculture project";

echo "Length: " . strlen($hardString) . "<br>";
echo "Word Count: " . str_word_count($hardString) . "<br>";
echo "Reverse: " . strrev($hardString) . "<br><br>";


echo strtoupper($userString) . "<br>";
echo strtolower($userString) . "<br>";
echo ucfirst($userString) . "<br>";
echo ucwords($userString) . "<br><br>";


echo "Position of 'PHP': " . strpos($hardString, "PHP") . "<br>";
echo str_replace("World", "Students", $hardString) . "<br><br>";

echo "Substring: " . substr($userString, 0, 5) . "<br>";
echo "Trim: '" . trim($hardString) . "'<br>";
echo "Left Trim: '" . ltrim($hardString) . "'<br>";
echo "Right Trim: '" . rtrim($hardString) . "'<br><br>";


echo "strcmp: " . strcmp("Admin", "admin") . "<br>";
echo "strcasecmp: " . strcasecmp("Admin", "admin") . "<br><br>";


$special = "<script>alert('Hi')</script>";
echo "htmlspecialchars: " . htmlspecialchars($special) . "<br>";
echo "addslashes: " . addslashes("O'Reilly") . "<br>";
?>
