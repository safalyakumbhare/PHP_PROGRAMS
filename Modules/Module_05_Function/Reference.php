<?php
    function ref(&$num)
    {
        $num += 10;
    }

    $number = 90;
    echo "Before reference: $number\n";
    ref($number);
    echo "After reference: $number";
?>