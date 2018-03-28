<?php
   include($_SERVER['DOCUMENT_ROOT'] . "/website-cs401/session.php");
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Activities</title>
        <link href="/website-cs401/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/website-cs401/styles/activities-style.css">
    </head>
    <body class="members">
        <div id="container">
            <div class="banner">
                <div class="logo">
                    <a href="/website-cs401/home.php">
                        <img src="/website-cs401/images/brown-fam-logo-small.png" />
                    </a>
                    <a href="/website-cs401/logout.php" id="log-out-btn">Log out</a>
                </div>
            </div>
            <div class="nav-bar">
                <ul>
                    <li class="fam-activity">
                        <a href="/website-cs401/activities-main/summer.php">Summer</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/website-cs401/activities-main/winter.php">Winter</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/website-cs401/activities-main/taekwondo.php">Taekwondo</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/website-cs401/activities-main/musicals.php">Musicals</a>
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