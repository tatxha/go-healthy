<?php
include("function.php");
$list_dokter = read_dokter();

if (isset($_GET['id_dokter'])) {
    $id = ($_GET["id_dokter"]);
    $result = readQuery('t_dokter', 'id_dokter', $id);
    $data = mysqli_fetch_assoc($result);
    $list_dokter = read_dokter($data['id_dokter']);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='data_dokter.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='data_dokter.php';</script>";
}

if (isset($_POST['btn-edit-dokter'])) {

    //$listChef = $_POST['listChef'];
    // jalankan query tambah record baru
    $isAddSucceed = update_dokter($_POST, $_FILES);
    if ($isAddSucceed > 0) {
        // jika penambahan sukses, tampilkan alert
        echo "
            <script>
                alert('Data Berhasil di update');
                document.location.href = 'data_dokter.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert('Tidak Ada Data yang diperbarui !');
            document.location.href = 'update_dokter.php';
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
                    <h2>Tambah Data Dokter</h2>
                </div>
                <div class="container" data-aos="fade-up" style="width: fit-content;">

                    <div class="gradient-custom-1 h-100">
                        <div class="mask d-flex align-items-center h-100">
                            <div class="container">
                                <form action="#" method="POST" id="form-add" enctype="multipart/form-data">
                                    <input type="hidden" name="id" id="id" value="<?= $data['id_dokter'] ?>">

                                    <div class="mb-3"> <!-- NAMA DOKTER -->
                                        <label for="nama_dokter" class="form-label">Nama Dokter</label>
                                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?= $data['nama_dokter'] ?>" required>
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
                                        <input type="tel" class="form-control" id="notelp_dokter" name="notelp_dokter" value="<?= $data['notelp_dokter'] ?>" required>
                                    </div>
                                    <div class="mb-3"> <!-- ALAMAT DOKTER -->
                                        <label for="alamat_dokter" class="form-label">Alamat Dokter</label>
                                        <input type="text" class="form-control" id="alamat_dokter" name="alamat_dokter" value="<?= $data['alamat_dokter'] ?>" required>
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
                                        <input type="text" class="form-control" id="deskripsi_dokter" name="deskripsi_dokter" value="<?= $data['deskripsi_dokter'] ?>" required>
                                    </div>
                                    <div class="mb-3"> <!-- LINK INFORMASI DOKTER -->
                                        <label for="link_dokter" class="form-label">Link Informasi</label>
                                        <input type="url" class="form-control" id="link_dokter" name="link_dokter" value="<?= $data['link_dokter'] ?>" required>
                                    </div>
                                    <div class="mb-3"> <!-- FOTO DOKTER -->
                                        <label for="foto_dokter" class="form-label">Foto</label><br>
                                        <img src="assets/img/doctors/<?= $data['foto_dokter'] ?>" alt="" width="50%"><br><br>
                                        <input class="form-control" type="file" id="foto_dokter" name="foto_dokter">
                                    </div><br>

                                    <a href="data_dokter.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                                    <button type="submit" class="btn btn-info text-white" style="background-color: #3B6E8D" name="btn-edit-dokter" id="btn-edit-dokter" form="form-add">Update Data Dokter</button>
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>