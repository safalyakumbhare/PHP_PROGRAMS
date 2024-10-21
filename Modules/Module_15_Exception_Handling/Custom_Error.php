<?php    
 // Custom error handler function    
  function customErrorHandler($errno, $errstr, $errfile, $errline) 
  {         echo "<b>Error:</b> [$errno] $errstr - $errfile:$errline<br>";         
  echo "Ending Script";         
  die();     
  }      // Set custom error handler     
  set_error_handler("customErrorHandler");      // Intentional error     
  echo 100 / 0; // Division by zero error 
  ?> 