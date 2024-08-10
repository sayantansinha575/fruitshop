<?php
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Define the path to the file or use a lookup to get the file
    // $filePath = './file/' . $fileId . '.txt';
    if ($fileId == 123) {
        $filePath = 'https://img.freepik.com/premium-photo/natures-beauty-captured-colorful-flower-close-up-generative-ai_1038396-47.jpg';
    }
    // Ensure the file exists
    if (($filePath)) {
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
