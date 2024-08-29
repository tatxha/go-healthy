<?php
  include('function.php');

  $list_nutrisi_makanan = read_nutrisi_makanan();
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
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <a href="tambah_nutrisi.php" class="appointment-btn scrollto">Add Data</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to DATA NUTRISI</h1>
      <h2>Admin bisa melihat, menambahkan, mengganti atau menghapus data nutirisi</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Panduan Pemakaian Obat Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Data Nutrisi Makanan</h2>
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
                                                ID
                                            </th>
                                            <th scope="col" class="text-center">
                                                Asal
                                            </th>
                                            <th scope="col" class="text-center">Jenis</th>
                                            <th scope="col" class="text-center">Karbo</th>
                                            <th scope="col" class="text-center">Protein</th>
                                            <th scope="col" class="text-center">Lemak</th>
                                            <th scope="col" class="text-center">Vitamin</th>
                                            <th scope="col" class="text-center">Kalsium</th>
                                            <th scope="col" class="text-center">Update/Delete</th>
                                        </tr>
                                      </div>
                                        </thead>
                                        <?php
                                          include "config.php";
                                              $no = 1;
                                              $ambil_data = mysqli_query($conn,"SELECT * FROM t_nutrisi_makanan
                                              JOIN t_jenis_sumber_nutrisi ON t_jenis_sumber_nutrisi.id_jenis_nutrisi = t_nutrisi_makanan.id_jenis_nutrisi");
                                              while ($tampil = mysqli_fetch_array($ambil_data)) {
                                                echo "
                                                <tr>
                                                    <td class='text-center'>$no</td>
                                                    <td>$tampil[asal_nutrisi]</td>
                                                    <td class='text-center'>$tampil[jenis_sumber_nutrisi]</td>
                                                    <td class='text-center'>$tampil[k_karbo]%</td>
                                                    <td class='text-center'>$tampil[k_protein]%</td>
                                                    <td class='text-center'>$tampil[k_lemak]%</td>
                                                    <td class='text-center'>$tampil[k_vit]%</td>
                                                    <td class='text-center'>$tampil[k_kalsium]%</td>

                                                    <td class='text-center'>
                                                    <a href='update_nutrisi.php?kode_update=$tampil[id_nutrisi]'><button type='button' class='btn text-white' style='background-color: #3B6E8D'>Update</button></a>
                                                    <a href='?kode_delete=$tampil[id_nutrisi]'><button type='button' class='btn text-white' style='background-color: #DC3545'>Delete</button></a>
                                                    </td>
                                                </tr>";
                                                $no++;
                                              }
                                          ?>
                                        
                                        <!-- <?php
                                          foreach($list_nutrisi_makanan as $t_nutrisi_makanan)
                                          {
                                            $list_nutrisi_makanan = read_nutrisi_makanan($t_nutrisi_makanan['id_nutrisi'])
                                        ?>
                                        <tbody>
                                          <tr>
                                            <td><?=$t_nutrisi_makanan['id_nutrisi']?></td>
                                            <td><?=$t_nutrisi_makanan['asal_nutrisi']?></td>
                                            <td><?=$t_nutrisi_makanan['jenis_sumber_nutrisi']?></td>
                                            <td><?=$t_nutrisi_makanan['k_karbo']?>%</td>
                                            <td><?=$t_nutrisi_makanan['k_protein']?>%</td>
                                            <td><?=$t_nutrisi_makanan['k_lemak']?>%</td>
                                            <td><?=$t_nutrisi_makanan['k_vit']?>%</td>
                                            <td><?=$t_nutrisi_makanan['k_kalsium']?>%</td>
                                            </tr>
                                        </tbody>
                                        <?php
                                          }
                                        ?> -->
                                    </table>
                                    <?php
                                      if (isset($_GET['kode_delete'])) {
                                        mysqli_query($conn,"DELETE FROM t_nutrisi_makanan WHERE id_nutrisi = '$_GET[kode_delete]'");
                                        echo "<script>
                                        alert('Data Berhasil Dihapus');
                                        window.location = 'data_nutrisi.php';
                                      </script>";
                                      }
                                  ?>
                                    
                                    </div>
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