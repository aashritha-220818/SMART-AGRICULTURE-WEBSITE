<?php

echo "<h2>PHP File Open Modes Demonstration</h2>";

file_put_contents("mode_demo.txt", "Initial Content\n");

echo "<h3>Mode: r (Read Only)</h3>";

$handle = fopen("mode_demo.txt", "r");
echo nl2br(fread($handle, filesize("mode_demo.txt")));
fclose($handle);



echo "<h3>Mode: w (Write Only - Erases Old Data)</h3>";

$handle = fopen("mode_demo.txt", "w");
fwrite($handle, "Old content erased.\nNew content written.");
fclose($handle);

echo nl2br(file_get_contents("mode_demo.txt"));


echo "<h3>Mode: a (Append Only)</h3>";

$handle = fopen("mode_demo.txt", "a");
fwrite($handle, "\nAppended content.");
fclose($handle);

echo nl2br(file_get_contents("mode_demo.txt"));

echo "<h3>Mode: x (Create New File - Fail if Exists)</h3>";

if(!file_exists("newfile.txt")) {
    $handle = fopen("newfile.txt", "x");
    fwrite($handle, "Created using x mode.");
    fclose($handle);
    echo "newfile.txt created successfully.<br>";
} else {
    echo "newfile.txt already exists. x mode will fail.<br>";
}


echo "<h3>Mode: r+ (Read & Write)</h3>";

$handle = fopen("mode_demo.txt", "r+");
fwrite($handle, "R+ Mode Writing\n");
rewind($handle);
echo nl2br(fread($handle, filesize("mode_demo.txt")));
fclose($handle);


echo "<h3>Mode: w+ (Read & Write - Erases Old Data)</h3>";

$handle = fopen("mode_demo.txt", "w+");
fwrite($handle, "Data written using w+ mode.");
rewind($handle);
echo nl2br(fread($handle, filesize("mode_demo.txt")));
fclose($handle);


echo "<h3>Mode: a+ (Read & Append)</h3>";

$handle = fopen("mode_demo.txt", "a+");
fwrite($handle, "\nExtra data using a+.");
rewind($handle);
echo nl2br(fread($handle, filesize("mode_demo.txt")));
fclose($handle);


echo "<h3>Mode: x+ (Create New File for Read & Write)</h3>";

if(!file_exists("another_new.txt")) {
    $handle = fopen("another_new.txt", "x+");
    fwrite($handle, "Created with x+ mode.");
    rewind($handle);
    echo nl2br(fread($handle, filesize("another_new.txt")));
    fclose($handle);
} else {
    echo "another_new.txt already exists. x+ mode fails.<br>";
}

?>
