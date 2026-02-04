<?php
echo "<h2>PART A: Variables & Variable Scope</h2>";


$stringVar = "Smart Agriculture";
$intVar = 2025;
$floatVar = 7.5;
$boolVar = true;
$arrayVar = array("PHP", "MySQL", "HTML");

echo "<h3>Datatypes</h3>";
echo "String: $stringVar <br>";
echo "Integer: $intVar <br>";
echo "Float: $floatVar <br>";
echo "Boolean: $boolVar <br>";
echo "Array: ";
print_r($arrayVar);
echo "<br><br>";


function localScopeExample() {
    $localVar = "I am local";
    echo "Local Scope Variable: $localVar <br>";
}
localScopeExample();


$globalVar = "I am global";

function globalScopeExample() {
    global $globalVar;
    echo "Global Scope Variable: $globalVar <br>";
}
globalScopeExample();

function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Variable Value: $count <br>";
}

echo "<h3>Static Scope (Refresh page to see change)</h3>";
staticScopeExample();
staticScopeExample();
staticScopeExample();
?>
