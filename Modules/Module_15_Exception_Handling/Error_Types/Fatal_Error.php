<?php        

try{
    include("nonexistentfile.php");

}
catch(Exception $e)
{
    echo "An error occurred: ". $e->getMessage();
    exit();  // Programme ko stop karega, next line nahi execute hoga.
}
  // Agar file exist nahi karti toh fatal error hoga  
     ?> 