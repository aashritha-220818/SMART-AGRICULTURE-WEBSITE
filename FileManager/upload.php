<?php

$targetDir = "uploads/";
$fileName = basename($_FILES["myfile"]["name"]);
$targetFile = $targetDir . $fileName;

if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFile)) {
    echo "File uploaded successfully!";
} else {
    echo "Error uploading file.";
}

echo "<br><a href='index.php'>Go Back</a>";

?>
