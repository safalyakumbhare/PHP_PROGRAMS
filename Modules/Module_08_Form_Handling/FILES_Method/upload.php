<?php $targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
    echo "File " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
} ?>