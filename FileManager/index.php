<?php
$folder = "uploads/";
$files = scandir($folder);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mini File Manager</title>
</head>
<body>

<h2>Upload File</h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    Select File:
    <input type="file" name="myfile" required>
    <button type="submit">Upload</button>
</form>

<hr>

<h2>Uploaded Files</h2>

<table border="1" cellpadding="10">
<tr>
    <th>File Name</th>
    <th>Size (KB)</th>
    <th>Last Modified</th>
    <th>Action</th>
</tr>

<?php
foreach($files as $file) {
    if($file != "." && $file != "..") {
        $path = $folder . $file;
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>" . round(filesize($path)/1024,2) . " KB</td>";
        echo "<td>" . date("d-m-Y H:i:s", filemtime($path)) . "</td>";
        echo "<td>
                <a href='download.php?file=$file'>Download</a> |
                <a href='delete.php?file=$file'>Delete</a>
              </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>
