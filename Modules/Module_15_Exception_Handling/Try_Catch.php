<?php try {
    // Example: File ko open karne ki koshish kar rahe hain     
    $file = fopen("somefile.txt", "r");
    if (!$file) {
        throw new Exception("File not found!"); // Agar file nahi milti, toh exception throw ki     
    }
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage(); // Exception ko handle kiya
}
?>