<?php
   include('session.php');
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Vacations</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/styles/vacations-style.css">
    </head>
    <body class="members">
        <div id="container">
            <div class="banner">
                <div class="logo">
                    <a href="/home.php">
                        <img src="/images/brown-fam-logo-small.png" />
                    </a>
                    <a href="/logout.php" id="log-out-btn">Log out</a>
                </div>
            </div>
            <div class="nav-bar">
                <ul>
                    <li class="fam-vacation">
                        <a href="#">California Trip</a>
                    </li>
                    <li class="fam-vacation">
                        <a href="#">Camping Trips</a>
                    </li>
                    <li class="fam-vacation">
                        <a href="#">Utah Trips</a>
                    </li>
                    <li class="fam-vacation">
                        <a href="#">Misc.</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <p id="dev-tag">
                    Content under development!
                </p>
            </div>
            <div id="footer">
                thebrownfamily.com | Vacations
            </div>
        </div>
    </body>
</html>