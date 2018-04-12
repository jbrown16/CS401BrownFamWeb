<?php
   include('session.php');
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Members</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/styles/members-style.css">
        <script type="text/javascript" src="/jquery-src/jquery-3.3.1.min.js"></script>
        <!-- <script type="text/javascript" src="/jquery-src/jsor-jcarousel-0.3.1-0-g6720a8f/jsor-jcarousel-a3b8ae0/dist/jquery.jcarousel.js"></script> -->
    </head>
    <body class="members">
        <div id="container">
            <div class="banner">
                <div class="logo">
                    <a href="home.php">
                        <img src="/images/brown-fam-logo-small.png" />
                    </a>
                    <a href="logout.php" id="log-out-btn">Log out</a>
                </div>
            </div>
            <div class="nav-bar myMenu">
                <ul>
                    <li class="fam-member dropDownMenu">
                        <a href="#">Dad</a>
                            <ul>
                                <li><a href="#">Members</a></li>
                                <li><a href="#">Activities</a></li>
                                <li><a href="#">Vacations</a></li>
                            </ul>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/dad.php">Dad</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/mom.php">Mom</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/justin.php">Justin</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/chad.php">Chad</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/candace.php">Candace</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/trevor.php">Trevor</a>
                    </li>
                    <li class="fam-member">
                        <a href="/members-main/cameron.php">Cameron</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <p id="dev-tag">
                    Content under development!
                </p>
            </div>
            <div id="footer">
                thebrownfamily.com | Members
            </div>
        </div>

        <script type="text/javascript">
            $('.myMenu ul li').hover(function() {
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        </script>

    </body>
</html>