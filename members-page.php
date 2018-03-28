<?php
   include('session.php');
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Members</title>
        <link href="/website-cs401/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/website-cs401/styles/members-style.css">
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
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/dad.php">Dad</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/mom.php">Mom</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/justin.php">Justin</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/chad.php">Chad</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/candace.php">Candace</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/trevor.php">Trevor</a>
                    </li>
                    <li class="fam-member">
                        <a href="/website-cs401/members-main/cameron.php">Cameron</a>
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
    </body>
</html>