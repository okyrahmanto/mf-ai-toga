<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>Plagiarism App - User Management</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="<?php echo base_url(); ?>/backend-asset/plugins/simplebar/simplebar.css" rel="stylesheet" /> -->
    <link href="<?php echo base_url(); ?>/backend-asset/plugins/nprogress/nprogress.css" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <?php 
    $output = $grocery_crud['output'];
    foreach($output->{'css_files'} as $file): ?>
      <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    
    
    
    
    
    
    
    
    
    

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="<?php echo base_url(); ?>/backend-asset/css/sleek.css" />
  
    <!-- FAVICON -->
    <link href="<?php echo base_url(); ?>/backend-asset/img/logo_plagiarism.png" rel="shortcut icon" />
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url(); ?>/backend-asset/plugins/nprogress/nprogress.js"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

      <!-- Github Link -->
      <!--<a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
        <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
          <defs>
            <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
              <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
            </linearGradient>
          </defs>
          <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
        </svg>
        <i class="mdi mdi-github-circle"></i>
      </a> -->




        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
       
        <?php echo view('plagiarism/sidebar'); ?>


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">
          
          <!-- Header -->
          

          <?php echo view('plagiarism/header'); ?>

          
          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">


<!----- isi ada disini ----->
<?php echo $output->{'output'};?>

<!--
<div class="error-wrapper rounded border bg-white px-5">
	<div class="row justify-content-center align-items-center text-center">
		<div class="col-xl-4">
			<h1 class="text-primary bold error-title">404</h1>
			<p class="pt-4 pb-5 error-subtitle">Looks like something went wrong.</p>
			<a href="index.html" class="btn btn-primary btn-pill">Back to Home</a>
		</div>
		
		<div class="col-xl-6 pt-5 pt-xl-0 text-center">
			<img src="assets/img/lightenning.png" class="img-fluid" alt="Error Page Image">
		</div>
	</div>
</div>

    -->



      </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
    
    
    <!-- Footer -->
    <footer class="footer mt-auto">
      <div class="copyright bg-white">
        <p>
          &copy; <span id="copy-year"></span> Copyright  <a class="text-primary"
            href="#" target="_blank">Developer</a>.
        </p>
      </div>
      <script>
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById("copy-year").innerHTML = year;
      </script>
    </footer>

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="<?php echo base_url(); ?>/backend-asset/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/backend-asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>/backend-asset/plugins/simplebar/simplebar.min.js"></script> -->

    <script src="<?php echo base_url(); ?>/backend-asset/js/sleek.js"></script>
    <!-- <link href="<?php echo base_url(); ?>/backend-asset/options/optionswitch.css" rel="stylesheet"> -->
    <!-- <script src="<?php echo base_url(); ?>/backend-asset/options/optionswitcher.js"></script> -->
    <?php foreach($output->{'js_files'} as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>

