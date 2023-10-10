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
						<h1><a href="#">Psikotest App</a></h1>
						
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Daftar</h2>
						</div>
						<div class="inner">
							<form method="post" style="margin-left:30%; max-width: 40%;" action="#">
								<div class="row gtr-uniform">
									<div class="col-12">
										<input type="text" name="demo-email" id="demo-email" value="" placeholder="Nama" />
									</div>
									<div class="col-12">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email / surel" />
									</div>
									<div class="col-12">
										<input type="password" name="demo-email" id="demo-email" value="" placeholder="Password" />
									</div>
									<div class="col-12">
										<input type="password" name="demo-email" id="demo-email" value="" placeholder="Retype Password" />
									</div>
									<div class="col-12">
										<textarea name="demo-text" id="demo-text" value="" placeholder="Retype Password" > </textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" value="Daftar" class="primary" /></li>
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
			<script src="<?php echo base_url();	?>/assets/grocery_crud/texteditor/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
			<script type="text/javascript">

			
				tinymce.init({
					selector: '#demo-text',
					plugins: 'image code charmap',
					toolbar: 'undo redo | image code | charmap',

					/* without images_upload_url set, Upload tab won't show up*/
					images_upload_url: '<?php echo base_url()?>/signup/postAcceptor',

					/* we override default upload handler to simulate successful upload*/
					images_upload_handler : function(blobInfo, success, failure) {
						var xhr, formData;

						xhr = new XMLHttpRequest();
						xhr.withCredentials = false;
						xhr.open('POST', '<?php echo base_url()?>/signup/postAcceptor');

						xhr.onload = function() {
							var json;

							if (xhr.status != 200) {
								failure('HTTP Error: ' + xhr.status);
								return;
							}
							console.log(xhr.responseText);
							json = JSON.parse(xhr.responseText);

							if (!json || typeof json.file_path != 'string') {
								failure('Invalid JSON: ' + xhr.responseText);
								return;
							}

							success(json.file_path);
						};

						formData = new FormData();
						formData.append('file', blobInfo.blob(), blobInfo.filename());

						xhr.send(formData);
					},
					content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

				});


			</script>
	</body>
</html>