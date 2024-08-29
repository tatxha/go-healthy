<?php
  include('function.php');

  $list_high_nutrisi= read_high_nutrisi();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GOWON! GO HEALTHY!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope"></i> <a href="mailto:tatthamaharany@upi.edu">go_healthy@won.com</a>
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
      <a href="https://www.instagram.com/go.won_go.healthy/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">GO HEALTHY!</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="tanya_dokter.php">Tanya Dokter</a></li>
          <li><a class="nav-link scrollto" href="daftar_dokter.php">Dokter</a></li>
          <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="daftar_obat2.php">Daftar Obat</a></li>
              <li><a href="daftar_penyakit.php">Daftar Penyakit</a></li>
              <li><a href="daftar_nutrisi.php">Daftar Nutrisi Makanan</a></li>
              <li><a href="isi_artikel.php">Artikel</a></li>
            </ul>
          </li>
          <li><a href="f_psikotest.php">Tes Psikologi</a></li>

          <?php
          session_start();
          if (isset($_SESSION['admin_logged_in'])) {
            echo '<li><a class="nav-link scrollto" href="adminpage.php">Admin Page</a></li>';
          } else if (isset($_SESSION['dokter_logged_in'])) {
            echo '<li><a class="nav-link scrollto" href="data_kendala.php">Cek Kendala</a></li>';
          }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
      if (isset($_SESSION['admin_logged_in'])) {
        echo '<a href="login/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Logout</a>';
      } else if (isset($_SESSION['dokter_logged_in'])) {
        echo '<a href="login/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Logout</a>';
      } else if (isset($_SESSION['user_logged_in'])) {
        echo '<a href="login/logout.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Logout</a>';
      } else {
        echo '<a href="login/loginpage.php" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Login</a>';
      }
      ?>
      <!-- <a href="#kendala" class="appointment-btn scrollto"><span class="d-none d-md-inline">Ceritakan</span> Kendala mu</a> -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to GO HEALTHY!</h1>
      <h2>We are GO WON, we will help you for your healthy life!</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Panduan Pemakaian Obat Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Data Nutrisi Makanan Tertinggi di GO HEALTHY</h2>
        </div>
                  <div class="container" data-aos="fade-up" style="width: fit-content;">
            
                      <div class="gradient-custom-1 h-100">
            
                            <div class="mask d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="table-responsive bg-white">
                                    <table class="table mb-0 table-bordered">
                                        <thead>
                                        <div class="gradient-custom-1 h-100">
                                        <tr>
                                            <th scope="col" class="text-center">
                                                Asal
                                            </th>
                                            <th scope="col" class="text-center">Protein</th>
                                        </tr>
                                      </div>
                                        </thead>
                                        <?php
                                          foreach($list_high_nutrisi as $t_nutrisi_makanan)
                                          {
                                            // $list_high_nutrisi= read_high_nutrisi($t_nutrisi_makanan['id_nutrisi']);
                                            // $nutrisi = ($t_nutrisi_makanan['k_karbo'] + $t_nutrisi_makanan['k_protein'] + $t_nutrisi_makanan['k_lemak'] + $t_nutrisi_makanan['k_vit'] + $t_nutrisi_makanan['k_kalsium']);
                                            // echo count($nutrisi);
                                        ?>
                                        <tbody>
                                          <tr>
                                            <td class="text-center"><?=$t_nutrisi_makanan['asal_nutrisi']?></td>
                                            <td class="text-center"><?=$t_nutrisi_makanan['k_protein']?>%</td>
                                            </tr>
                                        </tbody>
                                        <?php
                                          }
                                        ?>
                                    </table>
                                    
                                  </div>
                                  <br><h4>Kandungan Nutrisi Mujahir Goreng</h4>
                                  <p>Menurut Data Komposisi Pangan Indonesia, kandungan nutrisi yang terdapat pada 100 gram (g) ikan mujair goreng yaitu:
                                  <ul>
                                    <li>Energi: 416 kalori (Kal)</li>
                                    <li>Protein: 46.9 g</li>
                                    <li>Lemak: 23.9 g</li>
                                    <li>Kalsium: 346 miligram (mg)</li>
                                    <li>Fosfor: 654 mg</li>
                                    <li>Natrium: 54 mg</li>
                                    <li>Kalium: 278.9 mg</li>
                                    <li>Retinol (Vitamin A): 12 mikrogram (mcg)</li>
                                  </ul>
                                    </p>
                                  <br><h4>Kandungan Nutrisi Dada Ayam Mentah</h4>
                                  <p>Berdasarkan data USDA (U.S. Department of Agriculture), untuk 100 gram "Tender dada ayam, mentah" mengandung:
                                  <ul>
                                    <li>0,205 mg tembaga</li>
                                    <li>0,211 mg tiamina</li>
                                    <li>5,710 mg niasin</li>
                                    <li>96 mg kolina</li>
                                    <li>0,78 mg seng</li>
                                    <li>6,480 gram lemak tak jenuh tunggal</li>
                                    <li>Kalium: 278.9 mg</li>
                                    <li>3,340 gram lemak tak jenuh jamak </li>
                                    <li>211 mg fosfo</li>
                                  </ul>
                                    </p>


                                </div>
                                </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  
        
        
      </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Appointment Section ======= -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row" >

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GO HEALTHY!</h3>
            <p>
              by GO WON <br>
              Universitas Pendidikan Indonesia<br>
              Bandung 2023 <br><br>
            </p>
          </div>
          
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Fitur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#kendala">Ceritakan Kendala</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Our Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Fitur</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="tanya_dokter.php">Tanya Dokter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="daftar_dokter.php">Daftar Dokter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="daftar_obat2.php">Daftar Obat</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="daftar_penyakit.php">Daftar Penyakit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="daftar_nutrisi.php">Daftar Nutrisi Makanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="f_psikotest.php">Tes Psikologi</a></li>
            </ul>
          </div>
          
          
          <div class="col-lg-3 col-md-6 footer-links">

            <h1>GO HEALTHY<br> is your healthy bestie</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>GO HEALTHY!</span></strong> All Healthy Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">GO WON</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
       
        <a href="https://www.instagram.com/go.won_go.healthy/" class="instagram"><i class="bx bxl-instagram"></i></a>
       
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>