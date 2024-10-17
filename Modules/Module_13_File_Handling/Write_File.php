<?php
    $file = fopen("new_safalya.txt","w");

    fwrite($file, "Hello, this is a new file created using PHP");
    fclose($file);

?>