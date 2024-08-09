<?php
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Define the path to the file or use a lookup to get the file
    $filePath = 'https://0fec905c-f435-4138-8774-61e7f299ad41.e1-us-cdp-2.choreoapps.dev/file/' . $fileId . '.txt';

    // Ensure the file exists
    if (file_exists($filePath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));
        flush(); // Flush system output buffer
        readfile($filePath);
        exit;
    } else {
        echo 'File does not exist.';
    }
} else {
    echo 'No file specified.';
}
