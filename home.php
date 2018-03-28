<?php
   include("session.php");
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>The Brown Family</title>
		<link href="/images/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="/styles/home-style.css">
	</head>
	<body class="home" align="center">
		<div id="container">
			<header id="main-header" role="banner">
				<div id="main-header-content">
					<nav id="main-nav" role="navigation">
						<h1 class="logo">
							<img src="/images/brown-fam-logo-medium.png" alt="The Brown Family">
						</h1>
						<ul id="main-menu" class="menu">
							<li id="menu-item-1" class="menu-item">
								<a href="/members-page.php">Members</a>
							</li>
							<li id="menu-item-2" class="menu-item">
								<a href="/activities-page.php">Activities</a>
							</li>
							<li id="menu-item-3" class="menu-item">
								<a href="/vacations-page.php">Vacations</a>
							</li>
							<li id="menu-item-4" class="menu-item">
								<a href="/logout.php" id="logout-button">[ Logout ]</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
		</div>
	</body>
</html>
