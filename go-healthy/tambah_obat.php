<?php
    include("function.php");
    $list_penyakit = read_penyakit();

    if (isset($_POST['btn-add'])) {
        // jalankan query tambah record baru
        $list_penyakit = $_POST['t_penyakit'];
        $isAddSucceed = add_obat($_POST, $_FILES, $list_penyakit);
        if ($isAddSucceed > 0) {
         // jika penambahan sukses, tampilkan alert
         echo "
         <script>
             alert('Data Berhasil Ditambahkan');
             document.location.href = 'data_obat.php';
         </script>";
     } else {
         echo "
         <script>
         alert('Gagal menambahkan Data !');
         document.location.href = 'data_obat.php';
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
                            <form action="tambah_obat.php" method="POST" id="form-add" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                
                                <div class="mb-3"> <!-- NAMA OBAT-->
                                    <label for="nama_obat" class="form-label">Nama Obat</label>
                                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" required>
                                </div> 
                                <div class="mb-3"> <!-- JENIS OBAT -->
                                    <label for="id_jenis_obat">Jenis Obat</label>
                                    <br>
                                    <select class="form-select" aria-label="Category" id="id_jenis_obat" name="id_jenis_obat" required>
                                        <option value="1">Tablet</option>
                                        <option value="2">Kaplsul</option>
                                        <option value="3">Kaplet</option>
                                        <option value="4">Pil</option>
                                        <option value="5">Serbuk/Puyer</option>
                                        <option value="6">Suppositoria</option>
                                        <option value="7">Obat Oles</option>
                                        <option value="8">Obat Tetes</option>
                                        <option value="9">Obat Suntik</option>
                                    </select>
                                </div>
                                <div class="mb-3"> <!-- FUNGSI OBAT -->
                                    <label for="t_penyakit" class="form-label">Untuk Penyakit</label>
                                    <!-- <select class="form-select" aria-label="Category" id="t_penyakit" name="t_penyakit" required>
                                    <?php
                                    foreach($list_penyakit as $t_penyakit)
                                    {
                                        echo "<option value=$t_penyakit[id_penyakit]>" . $t_penyakit['nama_penyakit'] . "</option>";
                                    } 
                                ?>
                                    </select> -->
                                    <?php
                                        foreach($list_penyakit as $t_penyakit)
                                        {
                                    ?>
                                        <div class="col-md-3">
                                        <input type="checkbox" name="t_penyakit[]" value="<?=$t_penyakit['id_penyakit']?>">
                                        <label><?=$t_penyakit['nama_penyakit']?></label>
                                        </div>
                                    <?php
                                        }
                                    ?>
                                    <!-- <input type="text" class="form-control" id="fungsi_obat" name="fungsi_obat" required> -->
                                </div>
                                <div class="mb-3"> <!-- LINK INFORMASI TENTANG OBAT -->
                                    <label for="link_obat" class="form-label">Link Informasi Obat</label>
                                    <input type="url" class="form-control" id="link_obat" name="link_obat" required>
                                </div><br>
                                
                                <a href="data_obat.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                <button type="submit" class="btn btn-info text-white" style="background-color: #3B6E8D" name="btn-add" id="btn-add" form="form-add">Tambahkan Data Obat</button>
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