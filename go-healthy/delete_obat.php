<?php
    include('function.php');


    $id = $_GET['id'];
    if ($id > 0) {
        $isDeleteSucceed = delete_obat($id);  
        if ($isDeleteSucceed > 0) {
        echo "
        <script>
        alert('Delete Success !');
        document.location.href = 'data_obat.php';
        </script>
        ";
        } else {
        echo "
        <script>
        alert('Delete Failed !');
        document.location.href = 'data_obat.php';
        </script>
        ";
    }
    }
?>
