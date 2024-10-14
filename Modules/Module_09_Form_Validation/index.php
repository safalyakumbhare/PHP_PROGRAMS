<?php
$nameErr = "";
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
    }
}
function sanitizeInput($data)
{
    $data = trim($data); // Extra spaces remove karega     
    $data = stripslashes($data); // Slashes remove karega     
    $data = htmlspecialchars($data); // Special chars ko HTML entities mein convert karega     
    return $data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> Name: <input type="text"
            name="name"> <span><?php echo $nameErr; ?></span> <br> <input type="submit" value="Submit"> </form>
</body>

</html>