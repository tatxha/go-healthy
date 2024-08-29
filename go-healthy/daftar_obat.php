<?php
    include('function.php');

    $list_penyakit = read_penyakit();
    $list_obat = daftar_obat();
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
          <li><a class="nav-link scrollto" href="adminpage.html">Admin Page</a></li>
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

      <a href="#kendala" class="appointment-btn scrollto"><span class="d-none d-md-inline">Ceritakan</span> Kendala mu</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to GO HEALTHY!</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Doctors Section ======= -->
    <section id="penyakit" class="faq section-bg">
      
      <div class="container">

        <div class="section-title">
          <h2>Data Obat</h2>
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
                  <th scope="col">
                          Nama Obat
                  </th>
                  <th scope="col">
                      Mencegah/Mengobati
                  </th>
                </tr>
              </div>
            </thead>

            <?php
              foreach($list_obat as $t_obat)
              {
                $list_obat_penyakit = read_obat_penyakit($t_obat['id_obat'])
            ?>

            <tbody>
            <tr>
              <th scope="col">
                  <a href="<?=$t_obat['link_obat']?>"><?=$t_obat['nama_obat']?></a>
              </th>
              <th scope="col" style="font-weight: normal">
              <?php
                    foreach ($list_obat_penyakit as $t_obat_penyakit)
                    {
                      echo $t_obat_penyakit['nama_penyakit'].", ";
                    }
                    ?>
              </th>
            </tr>
            </tbody>

            <?php
              }
            ?>

          </table>
                      
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

        </div>
      </div>

    </section>


      <!-- ======= Panduan Pemakaian Obat Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Panduan Menggunakan Obat</h2>
            <p>Perhatikan beberapa hal berikut untuk mencegah hal-hal yang tidak diinginkan!</p>
          </div>
  
          <div class="faq-list">
            <ul>
  
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Baca kandungan, aturan, dan petunjuk penggunaan obat sebelum menggunakan obat. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Baca kandungan, aturan, dan petunjuk penggunaan obat sebelum menggunakan obat, biasanya terletak pada kemasan obat, atau bisa searching di Internet.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Hati-hati jika Anda memiliki alergi apapun. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Selalu diskusikan dengan dokter mengenai alergi yang Anda miliki, sebelum mulai mengonsumsi obat apa pun.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Perhatikan juga obat yang sedang Anda konsumsi saat ini. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Selalu diskusikan dengan dokter mengenai obat-obatan yang sedang Anda konsumsi, sebelum mulai mengonsumsi obat baru.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Cek riwayat kesehatan sebelum menggunakan suatu obat. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Selalu diskusikan dengan dokter mengenai riwayat kesehatan Anda, sebelum mulai mengonsumsi obat baru.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="600">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Konsultasi kepada dokter jika Anda memiliki alergi. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Jangan mengonsumsi suatu obat jika alergi terhadap obat tersebut atau sejenisnya, sebelum membicarakannya dengan dokter.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="700">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Selalu konsultasi ke dokter. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Konsultasikan dengan dokter jika ragu mengenai pemakaian obat.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="800">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Jauhkan obat dari jangkauan anak-anak. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Jauhkan obat-obatan dari jangkauan anak-anak untuk menghindari resiko obat pecah atau terkontaminasi dan sebagainya.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="900">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Perhatikan cara menyimpan obat yang benar. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Perhatikan pada kemasan obat bagaimana cara menyimpan obat yang benar, seperti menyimpan jauh dari paparan matahari langsung atau simpan di tempat sejuk dan kering.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="1000">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Cek tanggal kadaluarsa obat. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Perhatikan tanggal kedaluwarsa obat pada kemasan obat, dan buang obat jika telah melewati tanggal kedaluwarsa.
                  </p>
                </div>
              </li>
              
              <li data-aos="fade-up" data-aos-delay="1100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed">Jika sakit berlanjut, segera hubungi dokter. <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Jika sakit tetap berlanjut, konsultasikan ke dokter.
                  </p>
                </div>
              </li>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
      <!-- ======= kendala Section ======= -->

      <!-- ======= Kendala Section ======= -->
    <section id="kendala" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Memiliki Masalah Kesehatan?<br>Tanyakan kepada Dokter!</h2>
          <p > Dengan GO HEALTHY! kalian bisa menceritakan masalah kesehatan yang dialami dan dapat memilih spesialisasi Dokter yang dibutuhkan.</p>
        </div>

        <form action="index.php" method="POST" role="form" class="php-email-form">
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
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="kendala_user" id="kendala_user" rows="5" placeholder="Kendala" required></textarea>
          </div>

          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Berhasil dikirim.</div>
          </div>
          <div class="text-center"><button type="submit">Send</button></div>
        </form>

      </div>
    </section><!-- End Kendala Section -->
   
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
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>