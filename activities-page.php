<?php
   include("session.php");
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Activities</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/styles/activities-style.css">
    </head>
    <body class="members">
        <div id="container">
            <div class="banner">
                <div class="logo">
                    <a href="/home.php">
                        <img src="/images/brown-fam-logo-small.png" />
                    </a>
                    <a href="logout.php" id="log-out-btn">Log out</a>
                </div>
            </div>
            <div class="nav-bar">
                <ul>
                    <li class="fam-activity">
                        <a href="/activities-main/summer.php">Summer</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/activities-main/winter.php">Winter</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/activities-main/taekwondo.php">Taekwondo</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/activities-main/musicals.php">Musicals</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <p id="dev-tag">
                    Content under development!
                </p>
            </div>
            <div id="footer">
                thebrownfamily.com | Activities
            </div>
        </div>
    </body>
</html>