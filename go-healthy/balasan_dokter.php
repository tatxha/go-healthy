<?php
    include('function.php');

    if(isset($_GET['id_kendala'])){
        $id_kendala    = $_GET['id_kendala'];
    }
    else {
        die ("Error. No ID Selected!");    
    }

    $t_kendala = balasan_dokter($id_kendala);
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
        <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="bi bi-phone"></i> +1 5589 55488 55
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">GO HEALTHY!</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Admin Page of  HEALTHY!</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Panduan Pemakaian Obat Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Data Dokter</h2>
        </div>
                  <div class="container" data-aos="fade-up" style="width: fit-content;">
            
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <form action="tambah_dokter.php" method="POST" id="form-add" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                
                                <?php?>
                                <?php?>
                                <div class="mb-3"> <!-- Tampilin Nama User -->
                                 <p><?=$t_kendala['nama_user']?></p> 
                                 <!-- <label for="nama_dokter" class="form-label">Nama Dokter</label> -->
                                </div> 
                                <div class="mb-3"> <!-- Tampilin Kendala User -->
                                <p><?=$t_kendala['kendala_user']?></p> 
                                    <!-- <label for="nama_dokter" class="form-label">Nama Dokter</label> -->
                                </div> 
                                <?php?>

                                <div class="mb-3"> <!-- Pilih Dokter yang membalas -->
                                    <select class="form-select" aria-label="Category" id="" name="" required>

                                    </select>
                                    <!-- <label for="nama_dokter" class="form-label">Nama Dokter</label> -->
                                </div> 
                                <div class="mb-3"> <!-- SPESIALIASI DOKTER -->
                                    <label for="id_spesialisasi_dokter">Spesialisasi</label>
                                    <br>
                                    <select class="form-select" aria-label="Category" id="id_spesialisasi_dokter" name="id_spesialisasi_dokter" required>
                                        <option value="1">Dokter Kandungan</option>
                                        <option value="2">Dokter Anak</option>
                                        <option value="3">Dokter THT</option>
                                        <option value="4">Dokter Mata</option>
                                        <option value="5">Dokter Paru</option>
                                        <option value="6">Dokter Kulit</option>
                                        <option value="7">Dokter Penyakit Dalam</option>
                                        <option value="8">Dokter Psikiater</option>
                                    </select>
                                </div>
                                <div class="mb-3"> <!-- NO TELP DOKTER -->
                                    <label for="notelp_dokter" class="form-label">Nomor Telpon Dokter</label>
                                    <input type="tel" class="form-control" id="notelp_dokter" name="notelp_dokter" required>
                                </div>
                                <div class="mb-3"> <!-- ALAMAT DOKTER -->
                                    <label for="alamat_dokter" class="form-label">Alamat Dokter</label>
                                    <input type="text" class="form-control" id="alamat_dokter" name="alamat_dokter" required>
                                </div>
                                <div class="mb-3"> <!-- JENIS KELAMIN DOKTER -->
                                    <label for="id_jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-select" aria-label="Category" id="id_jenis_kelamin" name="id_jenis_kelamin" required>
                                        <option value="1">Laki-Laki</option>
                                        <option value="2">Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3"> <!-- DESKRIPSI DOKTER -->
                                    <label for="deskripsi_dokter" class="form-label">Deskripsi Singkat</label>
                                    <input type="text" class="form-control" id="deskripsi_dokter" name="deskripsi_dokter" required>
                                </div>
                                <div class="mb-3"> <!-- LINK INFORMASI DOKTER -->
                                    <label for="link_dokter" class="form-label">Link Informasi</label>
                                    <input type="url" class="form-control" id="link_dokter" name="link_dokter" required>
                                </div>
                                <div class="mb-3"> <!-- FOTO DOKTER -->
                                    <label for="foto_dokter" class="form-label">Foto</label>
                                    <input class="form-control" type="file" id="foto_dokter" name="foto_dokter" required>
                                </div><br>
                                
                                <a href="data_dokter.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                <button type="submit" class="btn btn-info text-white" style="background-color: #1977cc;" name="btn-add" id="btn-add" form="form-add">Tambahkan Data Dokter</button>
                            </form>
                            
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
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GO HEALTHY!</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>GO HEALTHY!</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>