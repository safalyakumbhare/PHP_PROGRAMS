<?php

$file = fopen("sample.txt", 'r');
// $filesize = filesize($file);


if ($file) {
    $filesize = filesize("sample.txt");
    $content = fread($file, $filesize);
    echo "$content";
}
?>