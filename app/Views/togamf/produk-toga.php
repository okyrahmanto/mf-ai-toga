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
    Toga - View
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
</head>
<?php
  //print_r($toga['name']);
?>
<script>
    let lang="IDN";
    const name="<?= $toga['name'] ?>";
    const name_en="<?= $toga['name_en'] ?>";
    const name_latin="<?= $toga['name_latin'] ?>";
    const bahan_berkhasiat="<?= $toga['bahan_berkhasiat'] ?>";
    const bahan_berkhasiat_en="<?= $toga['bahan_berkhasiat_en'] ?>";
    const khasiat="<?= trim($toga['khasiat']," ") ?>";
    const khasiat_en="<?= $toga['khasiat_en'] ?>";
    const head_khasiat_en = "efficacy";
    const head_bahan_berkhasiat_en = "The useful part";
    const head_khasiat = "Khasiat";
    const head_bahan_berkhasiat = "Bahan berkhasiat";
    const head_deskripsi_lainnya = "Deskripsi lainnya";
    const head_deskripsi_lainnya_en = "Description";
    const deskripsi_lainnya = "<?= $toga['deskripsi_lainnya'] ?>";
    const deskripsi_lainnya_en = "<?= htmlspecialchars($toga['deskripsi_lainnya_en']) ?>";

    function toogleLang() {
      if (lang=="IDN") {
        lang="ENG";
        document.getElementById("toga-name").innerHTML = name_en;
        document.getElementById("toga-name-latin").innerHTML = name_latin;
        document.getElementById("toga-head-bahan-berkhasiat").innerHTML = head_bahan_berkhasiat_en;
        document.getElementById("toga-bahan-berkhasiat").innerHTML = bahan_berkhasiat_en;
        document.getElementById("toga-head-khasiat").innerHTML = head_khasiat_en;
        document.getElementById("toga-khasiat").innerHTML= khasiat_en;
        document.getElementById("toga-head-deskripsi").innerHTML= head_deskripsi_lainnya_en;
        document.getElementById("toga-deskripsi").innerHTML= deskripsi_lainnya_en;
      } else {
        lang="IDN";
        document.getElementById("toga-name").innerHTML = name;
        document.getElementById("toga-name-latin").innerHTML = name_latin;
        document.getElementById("toga-head-bahan-berkhasiat").innerHTML = head_bahan_berkhasiat;
        document.getElementById("toga-bahan-berkhasiat").innerHTML = bahan_berkhasiat;
        document.getElementById("toga-head-khasiat").innerHTML = head_khasiat;
        document.getElementById("toga-khasiat").innerHTML= khasiat;
        document.getElementById("toga-head-deskripsi").innerHTML= head_deskripsi_lainnya;
        document.getElementById("toga-deskripsi").innerHTML= deskripsi_lainnya;
      }
    }


    
  </script>
<body class="g-sidenav-show bg-gray-100">
  
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    
    <!-- End Navbar -->
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?php echo base_url(); ?>/uploads/<?= $gambar[0]['url']; ?>'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-1"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          
          <div style="margin:auto; text-align:center" class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1" id="toga-name">
                <?php echo $toga['name']?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                <i id="toga-name-latin"><?php echo $toga['name_latin']?></i>
              </p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item">
                  <!-- <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>settings</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(304.000000, 151.000000)">
                              <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                              </polygon>
                              <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                              <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                              </path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">Settings</span>
                  </a> -->
                  <div class="form-check form-switch">
                  <input style="float:none;" onclick="toogleLang()" class="form-check-input" type="checkbox" id="toggleLanguage">
                      <label class="form-check-label" for="toggleLanguage">IND - ENG</label>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
       
        <div class="col-12 mt-4">
          <div class="card mb-4">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-1" id="toga-head-bahan-berkhasiat">Bahan berkhasiat</h6>
              <p class="text-sm" id="toga-bahan-berkhasiat"><?php echo $toga['bahan_berkhasiat']?></p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-xl-4 mb-4">
                  <div class="card card-blog card-plain">
                    <div class="position-relative">
                      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <?php
                            $number = 0;
                            foreach ($gambar as $imgRow) {
                              if ($number == 0) {
                                echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$number.'" class="active" aria-current="true" aria-label="Slide '.($number+1).'"></button>';
                              } else {
                                echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="'.$number.'" aria-label="Slide '.($number+1).'"></button>';
                              }
                              $number++;

                            }
                          ?>
                          <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                        </div>
                        <div class="carousel-inner">
                          <?php
                            $number = 0;
                            foreach ($gambar as $imgRow) {
                              if ($number == 0) {
                                echo '<div class="text-center carousel-item active"> <img  style="object-fit: cover; height: 400px; !important; " src="'.base_url().'/uploads/'.$imgRow['url'].'" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl center-block"></div>';
                              } else {
                                echo '<div class="text-center carousel-item"><img  style="object-fit: cover; height: 400px; !important; " src="'.base_url().'/uploads/'.$imgRow['url'].'" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl center-block"></div>';
                              }
                              $number++;
                            }
                          ?>
                          <!-- <div class="carousel-item active">
                          <img src="<?php echo base_url(); ?>/soft-ui/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </div>
                          <div class="carousel-item">
                          <img src="<?php echo base_url(); ?>/soft-ui/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </div>
                          <div class="carousel-item">
                          <img src="<?php echo base_url(); ?>/soft-ui/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    </div>
                    <div class="card-body px-1 pb-0">
                      
                        <h5 id="toga-head-khasiat">
                          Khasiat
                        </h5>
                      
                      <p class="mb-4 text-sm text-justify" id="toga-khasiat">
                      <?php echo $toga['khasiat']?>
                      </p>

                      <h5 id="toga-head-deskripsi">
                          Deskripsi Lainnya
                        </h5>
                      
                      <p class="mb-4 text-sm text-justify" id="toga-deskripsi">
                      <?php echo $toga['khasiat']?>
                      </p>
                      <!-- <div class="d-flex align-items-center justify-content-between">
                        <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>/soft-ui/assets/img/team-1.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>/soft-ui/assets/img/team-2.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>/soft-ui/assets/img/team-3.jpg">
                          </a>
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                            <img alt="Image placeholder" src="<?php echo base_url(); ?>/soft-ui/assets/img/team-4.jpg">
                          </a>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
                <!-- <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                  <div class="card h-100 card-plain border">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <a href="javascript:;">
                        <i class="fa fa-plus text-secondary mb-3"></i>
                        <h5 class=" text-secondary"> New project </h5>
                      </a>
                    </div>
                  </div>
                </div> -->
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
  
</body>

</html>