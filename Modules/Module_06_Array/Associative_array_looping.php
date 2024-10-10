<?php
     $laptop = array(
        "brand" => "Asus",
        "modal" => "Vivobook",
        "Price" => 120000,
        "Processor" => "Intel i7 13th Gen",
        "RAM" => "32GB",
        "SSD" => "1TB"
    );

    foreach($laptop as $key => $value){
        echo $key . " : " . $value . "<br>";
    }

?>