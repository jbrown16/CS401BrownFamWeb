<?php
   include('session.php');
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Vacations</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="/styles/vacations-style.css">
        <script type="text/javascript" src="/jquery-src/jquery-3.3.1.min.js"></script>
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
            <div class="nav-bar myMenu">
                <ul class="dropDownMenu">
                    <li class="fam-vacation">
                        <a href="#">MAIN</a>
                            <ul>
                                <li><a href="/members-page.php">Members</a></li>
                                <li><a href="/activities-page.php">Activities</a></li>
                                <li><a href="/vacations-page.php">Vacations</a></li>
                            </ul>
                    </li>
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

        <script type="text/javascript">
            $('.myMenu ul li').hover(function() {
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        </script>

    </body>
</html>