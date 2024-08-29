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
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors">
        <div class="container">

        <div class="section-title">
          <h2>Obat</h2>
          <p>Pada GO HEALTHY! Kalian bisa melihat obat obatan dan bagaimana fungsinya.</p>
        </div>
        <div class="container" data-aos="fade-up" style="width: fit-content;">
              <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
        <form action="daftar_obat2.php" method="get">
          <div class="input-group mb-3">
            <span class="input-group-text"  style="width: 45%" id="basic-addon1">Cari Obat untuk Penyakit :</span>
            <input type="text" style="width: 25%" class="form-control" value="<?= @$_GET['cari'] ?>" name="cari">
            <input class="btn btn-primary" style="min-width: 80px" type="submit" value="Cari">
          </div>
          </form><br><br><br>
                </div>
              </div>
            </div>
          </div>

        <div class="row justify-content-center">
          <table class="table mb-0 table-bordered" style="width: 50%">
            <thead>
            <div class="gradient-custom-1 h-100">
              <tr>
                <th  class='text-center' scope="col">
                    No
                </th>
                <th class='text-center'  scope="col">
                    Nama Obat
                </th>
                <th class='text-center'  scope="col">
                    Jenis Obat
                </th>

            </tr>
          </div>
            </thead>
            <?php
            include "config.php";
            $query = "select * from t_obat
                JOIN t_jenis_obat ON t_obat.id_jenis_obat = t_jenis_obat.id_jenis_obat
                JOIN t_obat_penyakit ON t_obat_penyakit.id_obat = t_obat.id_obat
                JOIN t_penyakit ON t_penyakit.id_penyakit = t_obat_penyakit.id_penyakit
                ";
            if(isset($_GET['cari'])){
              $search = $_GET['cari'];
              $query .= " where t_penyakit.nama_penyakit like '%".$search."%'";
            }
            $no = 1;
            $tampil = mysqli_query($conn, $query);


            while ($data = mysqli_fetch_array($tampil)) {
                echo "<tr>
                        <td class='text-center' >$no</td>
                        <td> <a href='$data[link_obat]'>$data[nama_obat]</a> 
                        </td>
                        <td class='text-center' >$data[obat_jenis]</td>
                    </tr>";
                $no++;
            }

            ?>

        </table>
        </div>
        </div>

      </div>
    </section><!-- End Doctors Section -->


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