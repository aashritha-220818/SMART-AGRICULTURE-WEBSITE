<?php

if(isset($_GET['file'])) {
    $file = "uploads/" . $_GET['file'];

    if(file_exists($file)) {
        unlink($file);
        echo "File deleted successfully!";
    } else {
        echo "File not found.";
    }
}

echo "<br><a href='index.php'>Go Back</a>";

?>
