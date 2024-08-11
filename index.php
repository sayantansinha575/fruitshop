<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Queue</title>
    <script>
        function startCountdown(downloadId) {
            let countdown = 5; // countdown in seconds
            const countdownInterval = setInterval(function() {
                document.getElementById('countdown').innerText = countdown;
                countdown--;
                if (countdown < 0) {
                    clearInterval(countdownInterval);
                    window.location.href = '/php/process.php?id=' + downloadId; // Redirect to download
                }
            }, 1000);
        }

        function addToQueue(downloadId) {
            // Show alert and start countdown
            alert('Your download has been added to the queue.');
            document.getElementById('countdown-container').style.display = 'block';
            startCountdown(downloadId);
        }
    </script>
</head>

<body>
    <button onclick="addToQueue(123)">Download File 123</button>
    <div id="countdown-container" style="display: none;">
        Download will start in <span id="countdown">5</span> seconds.
    </div>

    <div class="img" style="margin-top: 10px;">
        <?php define('SITE_URL','https://0fec905c-f435-4138-8774-61e7f299ad41.e1-us-cdp-2.choreoapps.dev')?>
        <?php define('IMG_PATH', './file/') ?>
        <img src="<?= SITE_URL.'/file/img.jpg'?>" alt="<?= htmlentities('flowerimg.jpg') ?>">
    </div>
</body>

</html>
