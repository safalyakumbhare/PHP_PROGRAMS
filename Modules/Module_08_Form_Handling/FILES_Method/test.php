<?php

$conn = mysqli_connect("localhost", "root", "", "image_test");

if ($conn) {
    // echo "Connected Successfully";
} else {
    die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $filename = $_FILES["fileupload"];
    $tempname = $_FILES["fileupload"]["tmp_name"];

    // print_r($filename);
    $folder = "/upload";
    move_uploaded_file($tempname,$folder);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Select File:</label>
        <input type="file" id="file" name="fileupload">
        <input type="submit" value="Upload" name="submit">
    </form>
</body>

</html>