<?php

echo "<h2>PHP File Functions Demonstration</h2>";

$file = "myfile.txt";


echo "<h3>1. Writing to File</h3>";

$handle = fopen($file, "w");
fwrite($handle, "Hello Aashritha!\n");
fwrite($handle, "Learning PHP File Handling.\n");
fclose($handle);

echo "Data written successfully.<br>";


echo "<h3>2. Reading File</h3>";

$handle = fopen($file, "r");
$content = fread($handle, filesize($file));
fclose($handle);

echo nl2br($content);

echo "<h4>Using file_get_contents():</h4>";
echo nl2br(file_get_contents($file));


echo "<h4>Using file() function:</h4>";
print_r(file($file));




echo "<h3>3. File Information</h3>";

echo "File Exists: " . (file_exists($file) ? "Yes" : "No") . "<br>";
echo "File Size: " . filesize($file) . " bytes<br>";
echo "File Type: " . filetype($file) . "<br>";
echo "Last Access Time: " . date("d-m-Y H:i:s", fileatime($file)) . "<br>";
echo "Last Modified Time: " . date("d-m-Y H:i:s", filemtime($file)) . "<br>";
echo "Created Time: " . date("d-m-Y H:i:s", filectime($file)) . "<br>";
echo "Permissions: " . fileperms($file) . "<br>";
echo "Owner ID: " . fileowner($file) . "<br>";
echo "Group ID: " . filegroup($file) . "<br>";
echo "Inode: " . fileinode($file) . "<br>";


echo "<h3>4. File & Folder Management</h3>";


copy($file, "copy_demo.txt");
echo "File copied.<br>";


rename("copy_demo.txt", "renamed_demo.txt");
echo "File renamed.<br>";


if(!is_dir("test_folder")) {
    mkdir("test_folder");
    echo "Folder created.<br>";
}


echo "Is demo.txt a file? " . (is_file($file) ? "Yes" : "No") . "<br>";
echo "Is test_folder a directory? " . (is_dir("test_folder") ? "Yes" : "No") . "<br>";


echo "<h3>5. Directory Listing</h3>";

echo "Current Directory: " . getcwd() . "<br><br>";

$files = scandir(".");
echo "<strong>Using scandir():</strong><br>";
print_r($files);

echo "<br><strong>Using opendir():</strong><br>";

$dir = opendir(".");
while(($f = readdir($dir)) !== false) {
    echo $f . "<br>";
}
closedir($dir);


echo "<h3>6. File Locking (flock)</h3>";

$handle = fopen($file, "a");

if(flock($handle, LOCK_EX)) {
    fwrite($handle, "Locked writing successful.\n");
    flock($handle, LOCK_UN);
    echo "File locked and written safely.<br>";
}

fclose($handle);



unlink("renamed_demo.txt");
echo "Renamed file deleted.<br>";

rmdir("test_folder");
echo "Folder deleted.<br>";

?>
