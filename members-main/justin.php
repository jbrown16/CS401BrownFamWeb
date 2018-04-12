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
                        <a href="" id="member-selected">Justin</a>
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
                <p>
                    <img src="/images/justin.jpg" />
                    <span class="bio">
                            I am a full-time student at Boise State University and I work part-time as a co-op engineer at WhiteCloud Analytics.<br><br>
                            I was born in downtown Boise as the oldest of five children. My family and I moved to Middleton when I was about three years 
                                old. I have lived in Middleton ever since.<br><br>
                            I graduated from Middleton High School at age 17 in the top 20 percentile of my gratuating class. 
                                The first thing I did after graduation was obtain part-time work as a web designer/developer. Shortly after, I started 
                                college at BYU-Idaho where I studied Computer Engineering for about a year. After that year, I transferred schools to Boise 
                                State where I began studying Computer Science. I am now in my senior year and set to graduate with my bachelor's degree in December.<br><br>
                            My hobbies include: camping, movie making, computer programming, hiking, martial arts (3rd degree blackbelt in Taekwondo), and 
                                hanging out with friends.
                    </span>
                </p>
            </div>
            <div id="footer">
                thebrownfamily.com | Members | Justin's Bio
            </div>
        </div>

        <script type="text/javascript">
            $('.myMenu ul li').hover(function() {
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        </script>

    </body>
</html>