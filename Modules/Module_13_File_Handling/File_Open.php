<?php

    $file = fopen("sample.txt",'r');

    if($file){
        echo "File opened successfully";
    }
    else{
    echo "Unable to open file";
}

?>