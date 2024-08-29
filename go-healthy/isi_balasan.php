<?php
include("function.php");
if(isset($_GET['id_kendala']))
{
  $id_kendala = $_GET['id_kendala'];
}
else if (isset($_POST['isi_balasan'])) {
    // jalankan query tambah record baru
      $isAddSucceed = add_balasan($_POST, $_FILES);
      if ($isAddSucceed > 0) {
      // jika penambahan sukses, tampilkan alert
      echo "
      <script>
          alert('Data Berhasil Ditambahkan');
          document.location.href = 'data_kendala.php';
      </script>";
    } else {
      echo "
      <script>
      alert('Gagal menambahkan Data !');
      document.location.href = 'data_kendala.php';
      </script>
      ";
    }
  }
else
{
  die("Error. No ID Selected!");
}

$list_dokter = read_dokter();
$v_kendala_publik = balasan_dokter($id_kendala); // ngebales sesuai id kendala yang diklik
?>



<!DOCTYPE html>
<html>

<head>
    <title>GOWON! GO HEALTHY!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
    <section id="faq" class="faq section-bg">
        <div class="container">


                <div class="container" data-aos="fade-up" style="width: fit-content;">
                <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
                <div class="container">
            
                <form action="isi_balasan.php" method="POST" id="form-add" enctype="multipart/form-data">
                    <div class="section-title">
                    <h2>Kirim Balasan</h2>
                    </div>
                    <input type="hidden" name="id_kendala" id="id_kendala" value="<?=$id_kendala?>">

                        <div class="mb-3"> <!--  Nampilin nama user dulu-->
                        <label for="nama_user" class="form-label">Nama User</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user"
                        value="<?= $v_kendala_publik['nama_user'] ?>" required>
                      </div>
                        <div class="mb-3"> <!--  Nampilin pertanyaan user dulu-->
                            <label for="kendala_user" class="form-label">Kendala</label>
                            <input type="text" class="form-control" id="kendala_user" name="kendala_user"
                                value="<?= $v_kendala_publik['kendala_user'] ?>" required>
                        </div>

                        <div class="mb-3"> <!-- Di sini dokter milih id nya -->
                            <label for="jenis" class="form-label">Pilih Dokter</label>
                            <select class="form-select" aria-label="Category" id="id_dokter" name="id_dokter" required>
                                <?php
                                  foreach($list_dokter as $t_dokter)
                                  {
                                ?>
                                <option value="<?=$t_dokter['id_dokter']?>">
                                  <?=$t_dokter['nama_dokter']?>
                                </option>
                                <?php
                                  }
                                ?>
                            </select>
                        </div>
                       

                        <div class="mb-3">
                            <label for="balasan" class="form-label">Balasan</label>
                            <textarea class="form-control" name="balasan_kendala" id="balasan_kendala" rows="5" placeholder="Balasan" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-info text-white" name="isi_balasan" id="btn-edit-menu"value="simpan"
                            form="form-add" style="background-color: #1977cc">Update</button>
                            <a href="data_nutrisi.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                        </div>
                </form>
                    
                                            
                </div>
                </div>
                </div>
                </div>
                                    
                            
                            
        </div>
        </section>

    </main>
    <!-- <form action="" method="POST" id="form-add" enctype="multipart/form-data" class="container-sm">
    <h1>Form Update Data</h1>

        <div class="mb-3">
            <label for="asal_nutrisi" class="form-label">Asal Nutrisi</label>
            <input type="text" class="form-control" id="asal_nutrisi" name="asal_nutrisi"
                value="<?= $data['asal_nutrisi'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Nutrisi</label>
            <select class="form-select" aria-label="Category" id="id_jenis_nutrisi" name="id_jenis_nutrisi" value="<?= $data['id_jenis_nutrisi'] ?>"required>
                <option value="1">Makanan Pokok</option>
                <option value="2">Lauk Pauk</option>
                <option value="3">Sayur-Sayuran</option>
                <option value="4">Buah-Buahan</option>
                <option value="5">Susu</option>
            </select>
             <input type="text" class="form-control" id="id_jenis_nutrisi" name="id_jenis_nutrisi"
                value="<?= $data['id_jenis_nutrisi'] ?>" required> 
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Karbohidrat</label>
            <input type="text" class="form-control" id="deskripsi" name="k_karbo" value="<?= $data['k_karbo'] ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="harga_menu" class="form-label">Protein</label>
            <input type="text" class="form-control" id="harga_menu" name="k_protein" value="<?= $data['k_protein'] ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="harga_menu" class="form-label">Lemak</label>
            <input type="text" class="form-control" id="harga_menu" name="k_lemak" value="<?= $data['k_lemak'] ?>"
                required>
        </div>
        <div class="mb-3">
            <label for="harga_menu" class="form-label">Vitamin</label>
            <input type="text" class="form-control" id="harga_menu" name="k_vit" value="<?= $data['k_vit'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="harga_menu" class="form-label">Kalsium</label>
            <input type="text" class="form-control" id="harga_menu" name="k_kalsium" value="<?= $data['k_kalsium'] ?>"
                required>

        </div>

        <a href="data_nutrisi.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
        <button type="submit" class="btn btn-info text-white" name="update" id="btn-edit-menu"value="simpan"
            form="form-add">Update data</button>
    </form> -->

    <!-- <?php
        
        include "config.php";
        if (isset($_POST['update'])) {
            mysqli_query($conn, "UPDATE t_nutrisi_makanan SET
            asal_nutrisi = '$_POST[asal_nutrisi]',
            id_jenis_nutrisi = '$_POST[id_jenis_nutrisi]',
            k_karbo = '$_POST[k_karbo]',
            k_protein = '$_POST[k_protein]',
            k_lemak = '$_POST[k_lemak]',
            k_vit = '$_POST[k_vit]',
            k_kalsium = '$_POST[k_kalsium]'
            WHERE id_nutrisi = '$_GET[kode_update]'
            ");
    
                echo "<script>
                alert('Data Berhasil Di Update');
                window.location = 'data_nutrisi.php';
                </script>";
        }

    ?> -->

</body>

</html>