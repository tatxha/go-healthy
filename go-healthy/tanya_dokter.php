<?php
    include("function.php");
    $list_kendala_publik = read_kendala_publik();
    session_start();

    if (isset($_POST['btn-add'])) {
      // jalankan query tambah record baru
      $isAddSucceed = add_kendala($_POST, $_FILES);
      if ($isAddSucceed > 0) {
       // jika penambahan sukses, tampilkan alert
       echo "
       <script>
           alert('Berhasil mengirimkan pesan');
           document.location.href = 'tanya_dokter.php';
       </script>";
   } else {
       echo "
       <script>
       alert('Gagal mengirimkan pesan !');
       document.location.href = 'tanya_dokter.php';
       </script>
       ";
   }
}
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

  <style>
    .kendala-btn {
  align-items: center;
  background: #1977cc;
  color: #fff;
  border-radius: 50px;
  padding: 8px 25px;
  white-space: nowrap;
  transition: 0.3s;
  font-size: 14px;
  display: inline-block;
}


.kendala-btn:hover {
  background: #166ab5;
  color: #fff;
}
  </style>

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
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Panduan Pemakaian Obat Section ======= -->
    <section id="faq" class="faq section-bg">
      <section id="testimonials" class="testimonials">
      <div class="container">
        <div class="section-title">
          <h2>Tanya Jawab</h2>
          <p>Selamat datang di tanya jawab dokter dengan GO HEALTHY</p><br>
          <a href="#kendala" class="kendala-btn"> Tanya Dokter</a>
        </div>
      </div>
      
        <div class="container">
  
          <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <?php
                foreach($list_kendala_publik as $v_kendala_publik)
                {
                  $list_balasandokter = balasan_kendala($v_kendala_publik['id_kendala']);
                  if(isset($list_balasandokter))
                  {

                    $list_spesialisasi = join_spesialisasi($list_balasandokter['id_dokter'], $v_kendala_publik['id_kendala']);
                  }
                  ?>


            <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <h3><?=$v_kendala_publik['nama_user']?></h3>
                    <p>
                      <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                      <?=$v_kendala_publik['kendala_user']?>
                      <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <?php
                  if(isset($list_balasandokter)){
                  ?>
                    <h3><?= $list_balasandokter['nama_dokter'] ? $list_balasandokter['nama_dokter'] : " "?></h3>
                    <a href="<?=$list_balasandokter['link_dokter'] ? $list_balasandokter['link_dokter'] : " "?>">
                      <img src="assets/img/doctors/<?=$list_balasandokter['foto_dokter'] ? $list_balasandokter['foto_dokter'] : " "?>" class="testimonial-img" alt="">
                    </a>
                    <h4><?=$list_spesialisasi['nama_spesialisasi'] ? $list_spesialisasi['nama_spesialisasi'] : " "?></h4>
                    <p class="bx bxs-quote-alt-left quote-icon-left"></p>
                    <?=$list_balasandokter['balasan_kendala'] ? $list_balasandokter['balasan_kendala'] : " "?>
                    <p class="bx bxs-quote-alt-right quote-icon-right"></p>
                    <?php
                  }
                    ?>

                  </div>
                </div>
            </div><!-- End testimonial item -->
            <?php
                }
            ?>
            
            <div class="swiper-pagination"></div>
            </div>
  
        </div>
      </section>
    </section>

   <!-- ======= Kendala Section ======= -->
   <section id="kendala" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Memiliki Masalah Kesehatan?<br>Tanyakan kepada Dokter!</h2>
          <p>Dengan GO HEALTHY! kalian bisa menceritakan masalah kesehatan yang dialami dan dapat memilih spesialisasi Dokter yang dibutuhkan.</p>
        </div>

        <div class="row justify-content-center">
        <form action="tanya_dokter.php" method="POST" role="form" class="php-email-form" id="form-add" enctype="multipart/form-data" style="width:80%">
          <div class="row">
            <input type="hidden" name="id" id="id">
            <div class="col-md-4 form-group"> <!-- NAMA PENGUNJUNG -->
              <input type="text" name="nama_user" class="form-control" id="nama_user" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
    
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0"> <!-- KELAMIN PENGUNJUNG -->
              <select name="id_jenis_kelamin_user" id="id_jenis_kelamin_user" class="form-select" required>
                <option value="1">Laki-Laki</option>
                <option value="2">Perempuan</option>
              </select>
    
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0"> <!-- UMUR PENGUNJUNG -->
              <input type="number" class="form-control" name="umur_user" id="umur_user" placeholder="Umur" data-rule="email" data-msg="Please enter a valid email" required>

            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0"> <!-- EMAIL PENGUNJUNG -->
              <input type="email" class="form-control" name="email_user" id="email_user" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" required>
            </div>

          <div class="col-md-4 form-group mt-3 mt-md-0"> <!-- PILIH DOKTER -->
              <select name="id_pilih_dokter" id="id_pilih_dokter" class="form-select" required>
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
          <div class="col-md-4 form-group mt-3 mt-md-0"> <!-- PILIH BALASAN -->
          <select name="pilihanbalasan" id="pilihanbalasan" class="form-select" required>
            <option value="1">Privat</option>
            <option value="2">Publik</option>
          </select>
          <p style="text-align: right; font-size: 10px;">Balasan privat akan langsung dikirim melalui E-Mail*</p>
          
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="kendala_user" id="kendala_user" rows="5" placeholder="Kendala" required></textarea>
          </div>
          </div>
          


          <br>
          <div class="text-center"><button type="submit" id="btn-add" name="btn-add" form="form-add">Send</button></div>
        </form>
        </div>
        <!-- submit  id="btn-add" name="btn-add" form="form-add"-->

      </div>
    </section><!-- End Kendala Section -->

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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>