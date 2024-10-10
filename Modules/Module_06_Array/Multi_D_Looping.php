<?php

$college = array(
    array("Raisoni", "Wadi", "1412"),
    array("Raisoni", "Sadar", "1422"),
    array("Raisoni", "Lokmanya Nagar", "1515")
);



for ($i = 0; $i < count($students); $i++) {
    for ($j = 0; $j < count($students[$i]); $j++) {
        echo $students[$i][$j] . " ";
    }
    echo "<br>";
}
?>