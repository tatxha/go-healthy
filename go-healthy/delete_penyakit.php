<?php
    include('function.php');

    $id = $_GET['id_penyakit'];
    if ($id > 0) {
        $isDeleteSucceed = delete_penyakit($id);  
        if ($isDeleteSucceed > 0) {
        echo "
        <script>
        alert('Delete Success !');
        document.location.href = 'data_penyakit.php';
        </script>
        ";
        } else {
        echo "
        <script>
        alert('Delete Failed !');
        document.location.href = 'data_penyakit.php';
        </script>
        ";
    }
    }
?>
