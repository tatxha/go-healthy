<?php
    include("function.php");
    $list_nutrisi_makanan = read_nutrisi_makanan();

    if (isset($_POST['btn-add'])) {
        // jalankan query tambah record baru
        $isAddSucceed = add_nutrisi_makanan($_POST, $_FILES);
        if ($isAddSucceed > 0) {
         // jika penambahan sukses, tampilkan alert
         echo "
         <script>
             alert('Data Berhasil Ditambahkan');
             document.location.href = 'data_nutrisi.php';
         </script>";
     } else {
         echo "
         <script>
         alert('Gagal menambahkan Data !');
         document.location.href = 'data_nutrisi.php';
         </script>";
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

    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">GO HEALTHY!</a></h1>
      
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Panduan Pemakaian Obat Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Tambah Data Obat</h2>
        </div>
                  <div class="container" data-aos="fade-up" style="width: fit-content;">
            
                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                        <div class="container">
                            <form action="tambah_dokter.php" method="POST" id="form-add" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                
                                <div class="mb-3"> <!-- ASAL NUTRISI -->
                                    <label for="asal_nutrisi" class="form-label">Asal Nutrisi</label>
                                    <input type="text" class="form-control" id="asal_nutrisi" name="asal_nutrisi" required>
                                </div> 
                                <div class="mb-3"> <!-- JENIS NUTRISI -->
                                    <label for="id_jenis_nutrisi">Jenis Nutrisi</label>
                                    <br>
                                    <select class="form-select" aria-label="Category" id="id_jenis_nutrisi" name="id_jenis_nutrisi" required>
                                        <option value="1">Makanan Pokok</option>
                                        <option value="2">Lauk Pauk</option>
                                        <option value="3">Sayur-Sayuran</option>
                                        <option value="4">Buah-Buahan</option>
                                        <option value="5">Susu</option>
                                    </select>
                                </div>
                                <div class="mb-3"> <!-- KANDUNGAN KARBOHIDRAT -->
                                    <label for="k_karbo" class="form-label">Kandungan Karbohidrat</label>
                                    <input type="text" step="any" class="form-control" id="k_karbo" name="k_karbo" required>
                                </div>
                                <div class="mb-3"> <!-- KANDUNGAN PROTEIN -->
                                    <label for="k_protein" class="form-label">Kandungan Protein</label>
                                    <input type="text" step="any" class="form-control" id="k_protein" name="k_protein" required>
                                </div>
                                <div class="mb-3"> <!-- KANDUNGAN LEMAK -->
                                    <label for="k_lemak" class="form-label">Kandungan Lemak</label>
                                    <input type="text" step="any" class="form-control" id="k_lemak" name="k_lemak" required>
                                </div>
                                <div class="mb-3"> <!-- KANDUNGAN VITAMIN -->
                                    <label for="k_vit" class="form-label">Kandungan Vitamin</label>
                                    <input type="text" step="any" class="form-control" id="k_vit" name="k_vit" required>
                                </div>
                                <div class="mb-3"> <!-- KANDUNGAN KALSIUM -->
                                    <label for="k_kalsium" class="form-label">Kandungan Kalsium</label>
                                    <input type="text" step="any" class="form-control" id="k_kalsium" name="k_kalsium" required>
                                </div><br>
                                
                                <a href="data_nutrisi.html"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                <button type="submit" class="btn btn-info text-white" style="background-color: #3B6E8D" name="btn-add" id="btn-add" form="form-add">Tambahkan Data Nutrisi</button>
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