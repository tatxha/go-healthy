<?php
    include('function.php');

    $id = $_GET['id_dokter'];
    if ($id > 0) {
        $isDeleteSucceed = delete_dokter($id);  
        if ($isDeleteSucceed > 0) {
        echo "
        <script>
        alert('Delete Success !');
        document.location.href = 'data_dokter.php';
        </script>
        ";
        } else {
        echo "
        <script>
        alert('Delete Failed !');
        document.location.href = 'data_dokter.php';
        </script>
        ";
    }
    }
?>
