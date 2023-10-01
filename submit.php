<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $data = "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message;
    
    $file = fopen("data.txt", "a");
    fwrite($file, $data . "\n\n");
    fclose($file);
    
    echo "Data saved successfully.";
}
?>

