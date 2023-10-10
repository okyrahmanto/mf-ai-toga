<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/soft-ui/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/soft-ui/assets/img/togamf/logo-small-transparent.png">
  <title>
    Toga - Gambar
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url(); ?>/soft-ui/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/soft-ui/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="<?php echo base_url(); ?>/soft-ui/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo base_url(); ?>/soft-ui/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <!-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> -->
  <script src="<?php echo base_url(); ?>/qrcode/easy.qrcode.min.js" type="text/javascript" charset="utf-8"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
  
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="container-fluid">
      
      
    </div>
    <div class="container-fluid py-4">
      <div class="row">
       
        <div class="col-12 mt-4">
          <div class="card mb-4">
            
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xl-12 col-md-12 mb-xl-0 mb-4">
                  <div class="card card-blog card-plain">
                    
                    
                    <div style="margin:auto; text-align:center" class="col-auto my-auto">
                      <div class="h-100">
                        <h5 class="mb-1">
                          <?php echo $name; ?>
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                          <i><?php echo $name_latin; ?></i>
                        </p>
                      </div>
                    </div>
                    <div style="margin:auto;"class="position-relative" id="container">

		                </div>
                    
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                MF - Agroindustri - Tirta Jaya - Politeknik Negeri Tanah Laut
              </div>
            </div>
            
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="<?php echo base_url(); ?>/soft-ui/assets/js/core/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>/soft-ui/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>/soft-ui/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo base_url(); ?>/soft-ui/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url(); ?>/soft-ui/assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <script type="text/template" id="qrcodeTpl">
			<div class="imgblock">
				<div class="title">{title}</div>
				<div class="qr" id="qrcode_{i}"></div>
                <div class="text-center" id="qrcode_{i}_download">
                      <button type="button" class="btn bg-gradient-info w-100 mt-4 mb-0" onclick="downloadQRcode('qrcode_{i}')">Download</button>
                </div>
                
			</div>
		</script>
  <script type="text/javascript">
    var demoParams = [
				
				{
					title: "<?php //echo $nama; ?>",
					config: {
						text: "http://mf-ai.politala.ac.id/toga/viewqr/<?php echo $id;?>", // Content

						width: 280, // Widht
						height: 280, // Height
						colorDark: "#000000", // Dark color
						colorLight: "#ffffff", // Light color
                        
                        quietZone: 15,
                        quietZoneColor: '#ffffff',

						// === Logo
						logo: "<?php echo base_url();?>/soft-ui/assets/img/togamf/logo-mfqrscanner-tranparent.png", // LOGO
						 // LOGO
						//					logo:"http://127.0.0.1:8020/easy-qrcodejs/demo/logo.png",  
						//					logoWidth:80, 
						//					logoHeight:80,
						logoBackgroundColor: '#ffffff', // Logo backgroud color, Invalid when `logBgTransparent` is true; default is '#ffffff'
						logoBackgroundTransparent: false, // Whether use transparent image, default is false


						correctLevel: QRCode.CorrectLevel.H // L, M, Q, H

					}
				}
      ];

      var qrcodeTpl = document.getElementById("qrcodeTpl").innerHTML;
			var container = document.getElementById('container');

			for (var i = 0; i < demoParams.length; i++) {
				var qrcodeHTML = qrcodeTpl.replace(/\{title\}/, demoParams[i].title).replace(/{i}/g, i);
				container.innerHTML+=qrcodeHTML;
			}
            
            var allQRcodes={};
			for (var i = 0; i < demoParams.length; i++) {
				var qrcode = new QRCode(document.getElementById("qrcode_"+i), demoParams[i].config);
                allQRcodes["qrcode_"+i] = qrcode;
                var downloadDivs = document.getElementsByClassName("download");
                for(var j=0; j<downloadDivs.length; j++){
                    downloadDivs[j].style.display='block'
                }
			}
            
            function downloadQRcode(qrcodeId){
                var qrcode = allQRcodes[qrcodeId];
                qrcode.download(qrcodeId); 
                
            }
      
  </script>
</body>

</html>