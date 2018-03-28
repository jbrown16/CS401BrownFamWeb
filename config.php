<?php
    define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');
    define('DB_USER', 'bbaac7e7ce49c5');
    define('DB_PASS', '807aaa72');
    define('DB_NAME', 'heroku_d417b8df002fb68');
    // Attempt to connect to MySQL
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if ($db === false) {
        die("Failed to connect to MySQL: " . mysql_error());
    }
?>