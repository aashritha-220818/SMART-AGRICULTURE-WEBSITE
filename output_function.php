<?php
echo "<h2>PART D: Output Functions</h2>";


echo "This is output using echo <br>";

print "This is output using print <br>";
$age = 15;

if ($age < 18) {
    die("Execution stopped using die(): Age must be 18 or above");
}

echo "This line will not be executed";
?>
