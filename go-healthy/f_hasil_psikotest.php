<?php
if (isset($_POST['submit'])) {
    $soal_1 = $_POST['soal-1'];
    $soal_2 = $_POST['soal-2'];
    $soal_3 = $_POST['soal-3'];
    $soal_4 = $_POST['soal-4'];
    $soal_5 = $_POST['soal-5'];
    $soal_6 = $_POST['soal-6'];
    $soal_7 = $_POST['soal-7'];
    $soal_8 = $_POST['soal-8'];
    $soal_9 = $_POST['soal-9'];
    $soal_10 = $_POST['soal-10'];    
    $hasil = $soal_1 + $soal_2 + $soal_3 + $soal_4 + $soal_5 + $soal_6 + $soal_7 + $soal_8 + $soal_9 + $soal_10;

    var_dump($hasil);

    if ($hasil>=10 && $hasil<=15) {
        echo "<script>
            alert('Yuk Liat Hasilnya !');
            window.location = 'psikotest/tidak_stress.html';
        </script>";
    }

    elseif ($hasil>=16 && $hasil<=25) {
        echo "<script>
        alert('Yuk Liat Hasilnya !');
        window.location = 'psikotest/stress_ringan.html';
    </script>";
    }

    elseif ($hasil>=26 && $hasil<=35) {
        echo "<script>
        alert('Yuk Liat Hasilnya !');
        window.location = 'psikotest/stress_sedang.html';
    </script>";
    }
    
    elseif ($hasil>=36 && $hasil<=45) {
        echo "<script>
        alert('Yuk Liat Hasilnya !');
        window.location = 'psikotest/stress_tinggi.html';
    </script>";
    }    
    
    elseif ($hasil>=46 && $hasil<=50) {
        echo "<script>
        alert('Yuk Liat Hasilnya !');
        window.location = 'psikotest/stress_parah.html';
    </script>";
    }
}
else{
    $hasil = 0;
}
?>