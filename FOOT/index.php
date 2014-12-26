<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Helios by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.onvisible.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header">
						
				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="index.php" id="logo">Helios</a></h1>
							<hr />
							<p>Another fine freebie by HTML5 UP</p>
						</header>
						<footer>
							<a href="#banner" class="button circled scrolly">Start</a>
						</footer>
					</div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li>
								<a href="">Dropdown</a>
 							</li>
							<li><a href="left-sidebar.html">Left Sidebar</a></li>
							<li><a href="indexblog.php">Blog</a></li>
							<li><a href="no-sidebar.php">No Sidebar</a></li>
						</ul>
					</nav>

			</div>
			
		<!-- Banner -->
			<section id="banner">
				<header>
					<h2>Les équipes <strong>de LIGUE 1</strong>.</h2>
					<p>
						A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
						Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
					</p>
				</header>
			</section>

		<!-- Carousel -->
		<form action="palyer.php" method="post">
			<section class="carousel">
				<div class="reel">

					<article>
						<a href="team.php" class="image featured"><img src="images/2.png" alt="" id="photo" value="1"/></a>
						<header>
							<h3><a href="#">Pulvinar sagittis congue</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="team.php" class="image featured"><img src="images/3.png" alt="" id="photo" value="2"/></a>
						<header>
							<h3><a href="#">Fermentum sagittis proin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="team.php" class="image featured"><img src="images/1.png" alt="" id="photo" value="3" /></a>
						<header>
							<h3><a href="#">Sed quis rhoncus placerat</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="team.php" class="image featured"><img src="images/4.png" alt="" id="photo" value="4" /></a>
						<header>
							<h3><a href="#">Ultrices urna sit lobortis</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>
				
					<article>
						<a href="#" class="image featured"><img src="images/se.png" alt="" /></a>
						<header>
							<h3><a href="#">Varius magnis sollicitudin</a></h3>
						</header>
						<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>							
					</article>

							</form>

				</div>
			</section>
	
		<!-- Main -->
			<div class="wrapper style2">

				<article id="main" class="container special">
					
					<header>
						<h2><a href="#">News</a></h2>
						<p>
							les news de ligue 1 
						</p>
					</header>
					<p>
					<?php include('flux_foot.php'); ?>
					</p>
					
				</article>

			</div>


	
							
							<!-- Copyright -->
								<div class="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							
						</div>
					
					</div>
				</div>
			</div>

	</body>
</html>