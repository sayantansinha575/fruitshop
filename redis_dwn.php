<?php
require 'vendor/autoload.php'; // Assuming you use Composer for Redis

use Predis\Client;

$redis = new Client();

if (isset($_POST['downloadId'])) {
    $downloadId = $_POST['downloadId'];
    $redis->rpush('download_queue', $downloadId);
    echo 'Download added to queue.';
} else {
    echo 'No download ID specified.';
}


<?php
require 'vendor/autoload.php'; // Assuming you use Composer for Redis

use Predis\Client;

$redis = new Client();

while (true) {
    $downloadId = $redis->lpop('download_queue');
    if ($downloadId) {
        // Process the download
        // For example, you might want to call download.php
        // using curl or some other method to trigger the download
    }
    sleep(1); // Sleep for a second before checking the queue again
}
?>
