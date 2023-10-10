<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Psikotest App</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url();	?>/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo base_url();	?>/assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="#">Psikotest</a></h1>
						
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Masuk</h2>
						</div>
						<div class="inner">
							<form method="post" style="margin-left:30%; max-width: 40%;" action="<?php echo base_url("auth/login")?>">
								<div class="row gtr-uniform">
	
									<div class="col-12">
										<input type="text" name="identity" id="identity" value="" placeholder="username" />
									</div>
									<div class="col-12">
										<input type="password" name="password" id="password" value="" placeholder="Password" />
									</div>
									<div class="col-12" >
										<ul class="actions">
											<li> <input type="checkbox" id="remember" name="remember" checked="">
												<label for="remember">Remember me</label> </li>
										</ul>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li> <input type="submit" value="Masuk" class="button primary"/> </li>
											<li><!--<input type="submit" value="Login" class="primary" />--></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>

						</div>
						
						<!-- <a href="#one" class="more scrolly">Learn More</a> -->
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="<?php echo base_url();	?>/assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/browser.min.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/util.js"></script>
			<script src="<?php echo base_url();	?>/assets/js/main.js"></script>

	</body>
</html>