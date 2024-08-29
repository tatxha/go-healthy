<?php
include "config.php";
$sql = mysqli_query($conn, "SELECT * FROM t_artikel WHERE id_artikel = '$_GET[kode_update]'");
$data = mysqli_fetch_array($sql);
// print_r("<pre>");
// print_r($data);
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
    <section id="faq" class="faq section-bg">
        <div class="container">


                <div class="container" data-aos="fade-up" style="width: fit-content;">
                <div class="gradient-custom-1 h-100">
                <div class="mask d-flex align-items-center h-100">
                <div class="container">
            
                <form action="" method="POST" id="form-add" enctype="multipart/form-data">
                    <div class="section-title">
                    <h2>Update Data Nutrisi</h2>
                    </div>
                    <input type="hidden" name="id" id="id">

                    <div class="mb-3"> <!-- GAMBAR ARTIKEL -->
                        <label for="foto_artikel" class="form-label">Gambar</label><br>
                        <img src="assets/img/articles/<?= $data['foto_artikel'] ?>" alt="" width="50%"><br><br>
                        <input class="form-control" type="file" id="foto_artikel" name="foto_artikel">
                    </div>
                    <div class="mb-3"> <!-- Judul Artikel -->
                        <label for="judul_artikel" class="form-label">Judul Artikel</label>
                        <input type="text" class="form-control" id="judul_artikel" name="judul_artikel"  value="<?= $data['judul_artikel'] ?>" required>
                    </div>
                    <div class="mb-3"> <!-- JENIS ARTIKEL -->
                        <label for="id_jenis_artikel">Jenis Artikel</label>
                        <br>
                        <select class="form-select" aria-label="Category" id="id_jenis_artikel" name="id_jenis_artikel" value= "<?= $data['jenis_artikel'] ?>" required>
                            <option value="1">Hidup Sehat</option>
                            <option value="2">Keluarga</option>
                            <option value="3">Kesehatan</option>
                        </select>
                    </div>
                    <div class="mb-3"> <!-- LINK ARTIKEL -->
                        <label for="ket_singkat" class="form-label">Link Informasi Artikel</label>
                        <input type="text" class="form-control" id="ket_singkat" name="ket_singkat" value="<?= $data['ket_singkat'] ?>" required>
                    </div>
                    <div class="mb-3"> <!-- LINK ARTIKEL -->
                        <label for="link_artikel" class="form-label">Link Informasi Artikel</label>
                        <input type="url" class="form-control" id="link_artikel" name="link_artikel"value="<?= $data['link_artikel'] ?>" required>
                    </div><br>

                    <div class="text-center">
                        <button type="submit" class="btn btn-info text-white" name="update" id="btn-edit-menu"value="simpan"
                        form="form-add" style="background-color: #3B6E8D">Update</button>
                        <a href="data_artikel.php"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button></a>
                    </div>

                </form>
                    
                <?php
                    include "config.php";
                    
                    if (isset($_POST['update'])) {
                        $file = $_FILES['foto_artikel']['name'];
                        $direktori = 'assets/img/articles/' . $file;
                        $isMoved = move_uploaded_file($_FILES['foto_artikel']['tmp_name'], $direktori);
                        if (!$isMoved) {
                            $_FILES['foto_artikel']['name'] = 'default.jpg';
                        }
                        mysqli_query($conn, "UPDATE t_artikel SET
                        foto_artikel = '$file',
                        judul_artikel = '$_POST[judul_artikel]',
                        id_jenis_artikel = '$_POST[id_jenis_artikel]',
                        ket_singkat = '$_POST[ket_singkat]',
                        link_artikel = '$_POST[link_artikel]'
                        WHERE id_artikel = $_GET[kode_update]
                        ");


                            echo "<script>
                            alert('Data Berhasil Di Update');
                            window.location = 'data_artikel.php';
                            </script>";
                    }

                ?>
                                            
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

</body>

</html>