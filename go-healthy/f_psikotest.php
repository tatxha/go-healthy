<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GOWON! GO HEALTHY!</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous">
  </script>

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
    <section section id="faq" class="faq section-bg" style="background-color: white; align-items: left;">

      <div class="container">
        <div class="row">
          <div class="col-12" style="align-items: left;">
            <div class="section-title">
              <h2>Test Psikologi</h2>
            </div>
            <div class="container" data-aos="fade-up" style="width: fit-content;" >
              
              <form action="f_hasil_psikotest.php" style="padding-left: 10%; padding-right: 10%;" method="POST" id="form-add" enctype="multipart/form-data">
                  <input type="hidden" name="id" id="id">
            
                  <div class="mb-3"> <!-- Pertanyaan 1 -->
                    <h1 style="font-size: 19px;"><b>Apakah Anda sering merasa cemas dan khawatir tanpa alasan yang jelas?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-1" name="soal-1" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-1">Sangat jarang atau tidak pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-1" name="soal-1" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-1">Jarang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-1" name="soal-1" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-1">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-1" name="soal-1" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-1">Sering</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-1" name="soal-1" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-1">Sangat Sering</label>
                    </div>
                  </div> <!-- End Pertanyaan 1 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 2 -->
                    <h1 style="font-size: 19px;"><b>Bagaimana Anda merespons ketika menghadapi situasi yang menegangkan?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-2" name="soal-2" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-2">Tetap tenang dan terkendali</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-2" name="soal-2" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-2">Agak tegang, tetapi tetap mengatasinya dengan baik</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-2" name="soal-2" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-2">Cemas dan sulit mengendalikan emosi</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-2" name="soal-2" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-2">Stres berlebihan dan kesulitan menghadapi situasi
                            tersebut</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-2" name="soal-2" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-2">Terlalu cemas dan kewalahan dalam menghadapi situasi yang
                            menegangkan</label>
                    </div>
                  </div> <!-- End Pertanyaan 2 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 3 -->
                    <h1 style="font-size: 19px;"><b>Apakah Anda merasa sulit untuk tidur karena terus memikirkan masalah atau kekhawatiran?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-3" name="soal-3" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-3">Tidak Pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-3" name="soal-3" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-3">Jarang sekali</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-3" name="soal-3" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-3">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-3" name="soal-3" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-3">Sering</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-3" name="soal-3" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-3">Hampir Setiap Hari</label>
                    </div>
                  </div> <!-- End Pertanyaan 3 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 4 -->
                    <h1 style="font-size: 19px;"><b>Bagaimana Anda merespons terhadap perubahan atau situasi yang tidak terduga?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-4" name="soal-4" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-4"> Mudah menyesuaikan diri dan mampu mengatasi perubahan
                          dengan baik</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-4" name="soal-4" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-4"> Agak kesulitan menyesuaikan diri, tetapi masih bisa
                            mengatasi</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-4" name="soal-4" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban3-4">Cemas dan stres dalam menghadapi perubahan atau situasi
                            yang tidak terduga</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-4" name="soal-4" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-4">Sangat cemas dan kesulitan mengatasi perubahan atau situasi
                            yang tidak terduga</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-4" name="soal-4" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-4">Merasa kewalahan dan sulit beradaptasi dengan perubahan
                            atau situasi yang tidak terduga</label>
                    </div>
                  </div> <!-- End Pertanyaan 4 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan  5-->
                    <h1 style="font-size: 19px;"><b>Apakah Anda sering merasa lelah dan kehilangan energi secara fisik dan mental?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-5" name="soal-5" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-5">Tidak Pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-5" name="soal-5" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-5">Jarang sekali</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-5" name="soal-5" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-5">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-5" name="soal-5" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-5">Sering</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-5" name="soal-5" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-5">Hampir Setiap Hari</label>
                    </div>
                  </div> <!-- End Pertanyaan 5 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan  6-->
                    <h1 style="font-size: 19px;"><b>Bagaimana Anda mengatasi stres dalam kehidupan sehari-hari?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-6" name="soal-6" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-6">Dengan baik dan efektif</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-6" name="soal-6" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-6">Agak efektif, tetapi kadang masih kesulitan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-6" name="soal-6" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-6">Dengan kesulitan dan tidak selalu efektif</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-6" name="soal-6" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-6">Dengan kesulitan dan tidak ada strategi yang efektif</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-6" name="soal-6" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-6">Tidak mampu mengatasi stres secara efektif</label>
                    </div>
                  </div> <!-- End Pertanyaan 6 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 7 -->
                    <h1 style="font-size: 19px;"><b>Apakah Anda merasa cemas atau tegang secara konstan?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-7" name="soal-7" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-7">Tidak pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-7" name="soal-7" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-7">Jarang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-7" name="soal-7" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-7">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-7" name="soal-7" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-7">Sering</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-7" name="soal-7" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-7">Hampir Setiap Saat</label>
                    </div>
                  </div> <!-- End Pertanyaan 7 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 8 -->
                    <h1 style="font-size: 19px;"><b>Bagaimana Anda mengelola tekanan kerja atau tuntutan yang tinggi?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-8" name="soal-8" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-8">Dengan baik dan efisien</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-8" name="soal-8" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-8">Agak efektif, tetapi terkadang masih terbebani</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-8" name="soal-8" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-8">Merasa terbebani dan kesulitan mengatasi tekanan kerja</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-8" name="soal-8" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-8">Sangat terbebani dan kesulitan mengatasi tuntutan yang tinggi</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-8" name="soal-8" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-8">Merasa kewalahan dan sulit mengelola tekanan kerja atau tuntutan yang tinggi</label>
                    </div>
                  </div> <!-- End Pertanyaan 8 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 9 -->
                    <h1 style="font-size: 19px;"><b>Apakah Anda mengalami gangguan tidur seperti sulit tidur, terbangun di tengah malam, atau mimpi buruk?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-9" name="soal-9" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-9">Tidak pernah</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-9" name="soal-9" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-9">Jarang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-9" name="soal-9" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-9">Kadang-Kadang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-9" name="soal-9" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-9">Sering</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-9" name="soal-9" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-9">Hampir Setiap Malam</label>
                    </div>
                  </div> <!-- End Pertanyaan 9 -->
                  
                  <div class="mb-3"> <!-- Pertanyaan 10 -->
                    <h1 style="font-size: 19px;"><b>Bagaimana Anda merasa mengenai kehidupan sehari-hari Anda secara keseluruhan?</b></h1>
                    <div class="custom-control custom-radio">
                      <input type="radio" id="jawaban1-10" name="soal-10" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="jawaban1-10">Baik dan seimbang</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban2-10" name="soal-10" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="jawaban2-10">Agak baik, tetapi ada beberapa aspek yang stres</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban3-10" name="soal-10" class="custom-control-input" value="3">
                        <label class="custom-control-label" for="jawaban3-10">Cukup stres dan merasa tertekan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban4-10" name="soal-10" class="custom-control-input" value="4">
                        <label class="custom-control-label" for="jawaban4-10">Sangat stres dan merasa kewalahan</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jawaban5-10" name="soal-10" class="custom-control-input" value="5">
                        <label class="custom-control-label" for="jawaban5-10">Sangat stres dan merasa tidak dapat menghadapinya dengan baik</label>
                    </div>
                  </div> <!-- End Pertanyaan 10 -->
                  
                  <div class='text-center'>
                    <br>
                    <button type="submit" name="submit" value="submit" class="btn btn-info text-white" style="background-color: #1977cc;" name="btn-add" id="btn-add" form="form-add">Send</button>
                    <a href="index.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                  </div>
    
              </form>      
            </div>
          </div>
        </div>
      </div>
    </section>

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


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