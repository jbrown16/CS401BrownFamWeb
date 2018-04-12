<?php
   include("session.php");
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>Family Activities</title>
        <link href="/images/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="/styles/activities-style.css">
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
                    <li class="fam-activity">
                        <a href="/activities-main/summer.php">Summer</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/activities-main/winter.php">Winter</a>
                    </li>
                    <li class="fam-activity">
                        <a href="" id="activity-selected">Taekwondo</a>
                    </li>
                    <li class="fam-activity">
                        <a href="/activities-main/musicals.php">Musicals</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer1.jpg">
                        <img src="/images/activities/summer-gallery/summer1.jpg" alt="summer1" width="600" height="400">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer2.jpg">
                        <img src="/images/activities/summer-gallery/summer2.jpg" alt="summer3" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer3.jpg">
                        <img src="/images/activities/summer-gallery/summer3.jpg" alt="summer3" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer4.jpg">
                        <img src="/images/activities/summer-gallery/summer4.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer5.jpg">
                        <img src="/images/activities/summer-gallery/summer5.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer6.jpg">
                        <img src="/images/activities/summer-gallery/summer6.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer7.jpg">
                        <img src="/images/activities/summer-gallery/summer7.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer8.jpg">
                        <img src="/images/activities/summer-gallery/summer8.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer9.jpg">
                        <img src="/images/activities/summer-gallery/summer9.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer10.jpg">
                        <img src="/images/activities/summer-gallery/summer10.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer11.jpg">
                        <img src="/images/activities/summer-gallery/summer11.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/summer-gallery/summer12.jpg">
                        <img src="/images/activities/summer-gallery/summer12.jpg" alt="summer4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>
            </div>
            <div id="footer">
                thebrownfamily.com | Activities
            </div>
        </div>

        <script type="text/javascript">
            $('.myMenu ul li').hover(function() {
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        </script>

    </body>
</html>