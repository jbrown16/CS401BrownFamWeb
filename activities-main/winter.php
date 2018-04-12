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
                        <a href="" id="activity-selected">Winter</a>
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
                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter1.jpg">
                        <img src="/images/activities/winter-gallery/winter1.jpg" alt="winter1" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter2.jpg">
                        <img src="/images/activities/winter-gallery/winter2.jpg" alt="winter2" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter3.jpg">
                        <img src="/images/activities/winter-gallery/winter3.jpg" alt="winter3" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter4.jpg">
                        <img src="/images/activities/winter-gallery/winter4.jpg" alt="winter4" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter5.jpg">
                        <img src="/images/activities/winter-gallery/winter5.jpg" alt="winter5" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter6.jpg">
                        <img src="/images/activities/winter-gallery/winter6.jpg" alt="winter6" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter7.jpg">
                        <img src="/images/activities/winter-gallery/winter7.jpg" alt="winter7" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter8.jpg">
                        <img src="/images/activities/winter-gallery/winter8.jpg" alt="winter8" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter9.jpg">
                        <img src="/images/activities/winter-gallery/winter9.jpg" alt="winter9" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter10.jpg">
                        <img src="/images/activities/winter-gallery/winter10.jpg" alt="winter10" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter11.jpg">
                        <img src="/images/activities/winter-gallery/winter11.jpg" alt="winter11" width="300" height="200">
                    </a>
                    <div class="desc">Add a description of the image here</div>
                </div>

                <div class="gallery">
                    <a target="_blank" href="/images/activities/winter-gallery/winter12.jpg">
                        <img src="/images/activities/winter-gallery/winter12.jpg" alt="winter12" width="300" height="200">
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