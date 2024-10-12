<?php

$code = "I code in Python";

echo "Before : $code <br>";
$change = str_replace("Python", "PHP", $code);
// here we firstly mention the word from which we want to replace and then we write the actual word and the string variable 

echo "After : $change";

?>