<?php
function divide($numerator, $denominator)
{
    if ($denominator == 0) {
        throw new Exception("Division by zero error!"); // Error throw kiya     
    }
    return $numerator / $denominator;
}
try {
    echo divide(10, 0); // Error throw hoga kyunki denominator zero hai
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage(); // Exception ko handle kiya 
}
?>