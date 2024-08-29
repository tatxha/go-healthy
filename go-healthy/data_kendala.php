<?php

    session_start();
    include('function.php');

    $list_kendala_privat = read_kendala_privat();
    $list_kendala_publik = read_kendala_publik();

    if (isset($_SESSION['admin_logged_in']) || isset($_SESSION['dokter_logged_in'])) {
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
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to DATA KENDALA</h1>
      <h2>Para dokter bisa mengirim pesan balasan atas kendala yang dialami user.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="faq" class="faq section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Data Kendala</h2>
        </div>

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#privat">
              <h4><b>Balasan Privat</b></h4>
            </a>
          </li><!-- End tab nav item -->

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#publik">
              <h4><b>Balasan Publik</b></h4>
            </a><!-- End tab nav item -->

        </ul>

        <div class="tab-content align-item-center" data-aos="fade-up" data-aos-delay="300">
          <!-- BALASAN PRIVAT MELALUI EMAIL -->
          <div class="tab-pane fade active show" id="privat">
            <br><br><br>

            <div class="row gy-5">
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
                              <th scope="col" class="text-center">ID</th>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jenis Kelamin</th>
                              <th scope="col" class="text-center">Umur</th>
                              <th scope="col" class="text-center">Email</th>
                              <th scope="col" class="text-center">Pilihan Dokter</th>
                              <th scope="col" class="text-center">Pilihan Balasan</th>
                              <th scope="col" class="text-center">Kendala</th>
                              <th scope="col" class="text-center">Kirim Balasan</th>
                          </tr>
                          </div>
                        </thead>

                        <?php
                          $no_kendala = 1;
                          foreach($list_kendala_privat as $v_kendala_privat)
                          {
                        ?>
                        <tbody>
                          <tr>
                            <td class="text-center"><?=$no_kendala?></td>
                            <td><?=$v_kendala_privat['nama_user']?></td>
                            <td class="text-center"><?=$v_kendala_privat['kelamin']?></td>
                            <td class="text-center"><?=$v_kendala_privat['umur_user']?> </td>
                            <td class="text-center"><?=$v_kendala_privat['email_user']?></td>
                            <td class="text-center"><?=$v_kendala_privat['nama_spesialisasi']?></td>
                            <td class="text-center"><?=$v_kendala_privat['jenis']?></td>
                            <td class="text-center"><?=$v_kendala_privat['kendala_user']?></td>
                            <td class="text-center"><a href="mailto:<?=$v_kendala_privat['email_user']?>?subject=Hi <?=$v_kendala_privat['nama_user']?>, I am <?=$v_kendala_privat['nama_spesialisasi']?> from GO HEALTHY!">Kirim Balasan</a></td>
                          </tr>
                        </tbody>
                        <?php
                          $no_kendala++;
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

          </div><!-- End Kendala dengan Balasan Privat -->
          
          <!-- BALASAN PUBLIK YANG DITAMPILKAN -->
          <div class="tab-pane fade" id="publik">
            <br><br><br>

            <div class="row gy-5">
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
                              <th scope="col" class="text-center">ID</th>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jenis Kelamin</th>
                              <th scope="col" class="text-center">Umur</th>
                              <th scope="col" class="text-center">Pilihan Dokter</th>
                              <th scope="col" class="text-center">Pilihan Balasan</th>
                              <th scope="col" class="text-center">Kendala</th>
                              <th scope="col" class="text-center">Balasan</th>
                              <!-- <th scope="col">Kirim Balasan</th> -->
                          </tr>
                          </div>
                        </thead>

                        <?php
                          // $no_kendala = 1;
                          foreach($list_kendala_publik as $v_kendala_publik)
                          {
                            $list_kendala_publik = read_kendala_publik($v_kendala_publik['id_kendala']);
                            $list_balasan = balasan_kendala($v_kendala_publik['id_kendala']);
                        ?>
                        <tbody>
                          <tr>
                            <!-- <td><?=$no_kendala?></td> -->
                            <td class="text-center"><?=$v_kendala_publik['id_kendala']?></td>
                            <td><?=$v_kendala_publik['nama_user']?></td>
                            <td class="text-center"><?=$v_kendala_publik['kelamin']?></td>
                            <td class="text-center"><?=$v_kendala_publik['umur_user']?> </td>
                            <td class="text-center"><?=$v_kendala_publik['nama_spesialisasi']?></td>
                            <td class="text-center"><?=$v_kendala_publik['jenis']?></td>
                            <td class="text-center"><?=$v_kendala_publik['kendala_user']?></td>
                            <?php
                            if(isset($list_balasan['balasan_kendala'])) //kalau ada balasan
                            {
                            
                              ?>

                            <td><?=$list_balasan['balasan_kendala']?></td><!-- tampil --> 
                            <?php
                            }
                          else{ // kalau gada balasan
                            ?>
                            <!-- ada tombol utk kirim balasan -->
                            <td class="text-center"><a href="isi_balasan.php?id_kendala=<?=$v_kendala_publik['id_kendala']?>">Kirim Balasan</a></td>
                            <?php
                            }?>

                            <!-- <td><a href="delete_kendalaPB.php?id_kendala=<?=$v_kendala_publik['id_kendala']?>">
                            <button type='button' class='btn text-white' style='background-color: #DC3545'>Delete</button>
                            </a></td> -->
                          </tr>
                        </tbody>
                        <?php
                          // $no_kendala++;
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

          </div><!-- End Kendala dengan Balasan Publik -->
        </div>

      </div>
    </section><!-- End Menu Section -->
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
<?php
}
else
{
  header('Location:login/loginpage.php');
}
?>