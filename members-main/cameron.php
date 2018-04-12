<?php
   include("/session.php");
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Members</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="/styles/members-style.css">
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
                    <li class="fam-member">
                        <a href="#">MAIN</a>
                            <ul>
                                <li><a href="/members-page.php">Members</a></li>
                                <li><a href="/activities-page.php">Activities</a></li>
                                <li><a href="/vacations-page.php">Vacations</a></li>
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
                        <a href="" id="member-selected">Cameron</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <p>
                    <img src="/images/justin.jpg" />
                    <span class="bio">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non imperdiet justo, ac tincidunt tortor. Nullam dapibus felis ut ullamcorper blandit.<br><br>
                        Mauris id odio tincidunt, pretium sapien at, semper mauris. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br><br>
                        Sed scelerisque posuere justo quis eleifend. Donec id libero est. In efficitur mauris non leo ultrices ultrices at sed elit. Aliquam erat volutpat.<br><br>
                        Nullam interdum varius pharetra. Integer eget velit eu arcu vestibulum commodo sollicitudin a quam. Integer nibh lorem, aliquam ac orci eget, tempor pulvinar odio.<br><br>
                        Mauris sem leo, dapibus ut arcu id, commodo fermentum purus. In hac habitasse platea dictumst. Ut dignissim ipsum ac risus interdum venenatis.<br><br>
                    </span>
                </p>
            </div>
            <div id="footer">
                thebrownfamily.com | Members | Cameron's Bio
            </div>
        </div>

        <script type="text/javascript">
            $('.myMenu ul li').hover(function() {
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        </script>

    </body>
</html>