<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    // echo $message;
    $filePath = 'Brain\pqr.txt';

    // Open the file in append mode and write the message
    $file = fopen($filePath, 'w');
    if ($file) {
        fwrite($file, $message . PHP_EOL); // Write the message and a new line
        fclose($file);
        // echo 'File has been written successfully.';
    } else {
        echo 'Error opening file.';
    }
}
?>
