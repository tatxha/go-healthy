<?php
    include('config.php');
    
    function read_high_nutrisi() // SUBQ
    {
        global $conn;
        $query = "SELECT asal_nutrisi, k_protein FROM t_nutrisi_makanan
        WHERE k_protein > (SELECT avg(k_protein) FROM t_nutrisi_makanan) LIMIT 5;";
        
        $eksekusi = mysqli_query($conn, $query);
        
        return $eksekusi;   
    }
    function read_query($table, $id, $find) // membaca query setiap tabel
    {
        global $conn;

        $query = "SELECT * FROM ".$table." WHERE ".$id."=".$find;
        $result = mysqli_query($conn, $query);

        return $result;
    }
    // KHUSUS ADMIN PAGE
    function read_kendala_privat() // baca data kendala
    {
        global $conn; // disamain dengan yang di config

        $query = "select `t_kendala`.`id_kendala` AS `id_kendala`,`t_kendala`.`nama_user` AS `nama_user`,`t_jenis_kelamin`.`kelamin` AS `kelamin`,`t_kendala`.`umur_user` AS `umur_user`,`t_kendala`.`email_user` AS `email_user`,`t_jenis_spesialisasi_dokter`.`nama_spesialisasi` AS `nama_spesialisasi`,`t_jenis_kendala`.`jenis` AS `jenis`,`t_kendala`.`kendala_user` AS `kendala_user` from (((`t_kendala` join `t_jenis_kelamin` on(`t_jenis_kelamin`.`id_kelamin` = `t_kendala`.`id_jenis_kelamin_user`)) join `t_jenis_spesialisasi_dokter` on(`t_jenis_spesialisasi_dokter`.`id_jenis_spesialisasi_dokter` = `t_kendala`.`id_pilih_dokter`)) join `t_jenis_kendala` on(`t_jenis_kendala`.`id_pilihanbalasan` = `t_kendala`.`pilihanbalasan`)) where `t_jenis_kendala`.`jenis` = 'Privat'";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function read_kendala_publik() // baca data kendala
    {
        global $conn; // disamain dengan yang di config

        $query = "SELECT t_kendala.id_kendala, t_kendala.nama_user, t_jenis_kelamin.kelamin, t_kendala.umur_user,
        t_jenis_spesialisasi_dokter.nama_spesialisasi, t_jenis_kendala.jenis, t_kendala.kendala_user
        FROM t_kendala
        JOIN t_jenis_kelamin ON t_jenis_kelamin.id_kelamin = t_kendala.id_jenis_kelamin_user
        JOIN t_jenis_spesialisasi_dokter ON t_jenis_spesialisasi_dokter.id_jenis_spesialisasi_dokter = t_kendala.id_pilih_dokter
        JOIN t_jenis_kendala ON t_jenis_kendala.id_pilihanbalasan = t_kendala.pilihanbalasan
        WHERE t_jenis_kendala.jenis = 'Publik';";
        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function read_obat() // baca data obat
    {
        global $conn;
        $query = "SELECT * FROM t_obat
        JOIN t_jenis_obat ON t_jenis_obat.id_jenis_obat = t_obat.id_jenis_obat
        ORDER BY t_obat.nama_obat ASC;";

        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function read_id_obat($id_obat) // baca id obat
    {
        global $conn;
        $query = "SELECT * FROM t_obat 
        WHERE t_obat.id_obat = '$id_obat';";

        $eksekusi = mysqli_fetch_assoc(mysqli_query($conn, $query));

        return $eksekusi;
    }
    function read_dokter() // baca data dokter
    {
        global $conn;
        $query = "SELECT t_dokter.*, t_jenis_spesialisasi_dokter.*, t_jenis_kelamin.* FROM t_dokter
        JOIN t_jenis_spesialisasi_dokter ON t_jenis_spesialisasi_dokter.id_jenis_spesialisasi_dokter = t_dokter.id_spesialisasi_dokter
        JOIN t_jenis_kelamin ON t_jenis_kelamin.id_kelamin = t_dokter.id_jenis_kelamin;";

        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function join_spesialisasi($id_dokter, $id_kendala) // menggabungkan tabel spesialisasi dokter
    {
        global $conn;
        $query = "SELECT t_dokter.nama_dokter, t_jenis_spesialisasi_dokter.nama_spesialisasi
        FROM t_dokter
        JOIN t_jenis_spesialisasi_dokter ON t_jenis_spesialisasi_dokter.id_jenis_spesialisasi_dokter = t_dokter.id_spesialisasi_dokter
        JOIN t_tanya_dokter ON t_tanya_dokter
        .id_dokter = t_dokter.id_dokter
        WHERE t_dokter.id_dokter = $id_dokter 
        AND t_tanya_dokter.id_kendala = $id_kendala;";

        $eksekusi = mysqli_fetch_assoc(mysqli_query($conn, $query));
    
        return $eksekusi;

    }
    function read_artikel() // baca data artikel
    {
        global $conn;
        $query = "SELECT * FROM t_artikel
        JOIN t_jenis_artikel ON t_jenis_artikel.id_jenis_artikel = t_artikel.id_jenis_artikel;";

        $eksekusi = mysqli_query($conn, $query);
        
        return $eksekusi;
    }
    function read_penyakit() // baca data penyakit
    {
        global $conn;
        
        $query = "SELECT * FROM t_penyakit;";
        
        $eksekusi = mysqli_query($conn, $query);
        return $eksekusi;
    }
    function read_nutrisi_makanan() // baca data nutrisi makanan
    {
        global $conn;
        $query = "SELECT * FROM t_nutrisi_makanan
        JOIN t_jenis_sumber_nutrisi ON t_jenis_sumber_nutrisi.id_jenis_nutrisi = t_nutrisi_makanan.id_jenis_nutrisi;";

        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function read_obat_penyakit($obat) // baca data tabel obat penyakit
    {
        global $conn;

        $query = "SELECT t_obat_penyakit.id_penyakit, t_penyakit.nama_penyakit, t_obat_penyakit.id_obat_penyakit
        FROM t_obat_penyakit 
        JOIN t_penyakit ON t_obat_penyakit.id_penyakit = t_penyakit.id_penyakit 
        WHERE t_obat_penyakit.id_obat = $obat";

        $eksekusi = mysqli_query($conn, $query);
                
        return $eksekusi;
    }
    function add_obat($data, $file, $list_penyakit) // tambahin data obat
    {
       
        global $conn;
        $nama_obat = $data['nama_obat'];
        $id_jenis_obat = $data['id_jenis_obat'];
        $link_obat = $data['link_obat'];
        


        $query = "INSERT INTO t_obat VALUES('', '$nama_obat', '$id_jenis_obat', '$link_obat')";
        $result = mysqli_query($conn, $query);


        $isSucceed = mysqli_affected_rows($conn);
        if ($isSucceed > 0) {
            $query = "SELECT id_obat from t_obat WHERE nama_obat LIKE '$nama_obat'";
            $result = mysqli_query($conn, $query);
            while($data = mysqli_fetch_assoc($result))
            {
                $id = $data['id_obat'];
            }
            foreach ($list_penyakit as $t_penyakit) {
                $query = "INSERT INTO t_obat_penyakit VALUES('', '$id', '$t_penyakit')";
                $result = mysqli_query($conn, $query);
            }
        }
        // mengembalikan nilai sukses
        return $isSucceed;
    }   
    function add_dokter($data, $file) // tambahin data dokter
    {
        
        global $conn, $mysqli;
        $nama_dokter = $data['nama_dokter'];
        $id_spesialisasi_dokter = $data['id_spesialisasi_dokter'];
        $notelp_dokter = $data['notelp_dokter'];
        $alamat_dokter = $data['alamat_dokter'];
        $id_jenis_kelamin = $data['id_jenis_kelamin'];
        $deskripsi_dokter = $data['deskripsi_dokter'];
        $link_dokter = $data['link_dokter'];

        $foto_dokter = $file['foto_dokter']['name'];
        $tempfoto_dokter = $file['foto_dokter']['tmp_name'];
        $direktori = 'assets/img/doctors/' . $foto_dokter;
        $isMoved = move_uploaded_file($tempfoto_dokter, $direktori);  
        if (!$isMoved) {
            $foto_dokter = 'default.jpg';
        }

        $query = "INSERT INTO t_dokter VALUES('', '$nama_dokter', '$id_spesialisasi_dokter', '$notelp_dokter', '$alamat_dokter', '$id_jenis_kelamin', '$deskripsi_dokter', '$link_dokter', '$foto_dokter')";
        
        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);
        
        // mengembalikan nilai sukses
        return $isSucceed;
    }   
    function add_nutrisi_makanan($data, $file) // tambahin data nutrisi makanan
    {
        
        global $conn, $mysqli;
        $asal_nutrisi = $data['asal_nutrisi'];
        $id_jenis_nutrisi = $data['id_jenis_nutrisi'];
        $k_karbo = $data['k_karbo'];
        $k_protein = $data['k_protein'];
        $k_lemak = $data['k_lemak'];
        $k_vit = $data['k_vit'];
        $k_kalsium = $data['k_kalsium'];

        $query = "INSERT INTO t_nutrisi_makanan VALUES('', '$asal_nutrisi', '$id_jenis_nutrisi', '$k_karbo', '$k_protein', '$k_lemak', '$k_vit', '$k_kalsium')";
        
        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);
        
        // mengembalikan nilai sukses
        return $isSucceed;
    }   
    function add_penyakit($data, $file) // tambahin data penyakit
    {
        
        global $conn, $mysqli;
        $nama_penyakit = $data['nama_penyakit'];
        $ket_penyakit = $data['ket_penyakit'];
        $resiko_kematian = $data['resiko_kematian'];
        $link_penyakit = $data['link_penyakit'];

        $query = "INSERT INTO t_penyakit VALUES('', '$nama_penyakit', '$ket_penyakit', '$resiko_kematian', '$link_penyakit')";
        
        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);
        
        // mengembalikan nilai sukses
        return $isSucceed;
    }   
    function add_artikel($data, $file) // tambahin data artikel
    {
        global $conn, $mysqli;
        
        $foto_artikel = $file['foto_artikel']['name'];
        $tempfoto_artikel = $file['foto_artikel']['tmp_name'];
        $direktori = 'assets/img/articles/' . $foto_artikel;
        $isMoved = move_uploaded_file($tempfoto_artikel, $direktori);  
        if (!$isMoved) {
            $foto_artikel = 'default.jpg';
        }

        $judul_artikel = $data['judul_artikel'];
        $id_jenis_artikel = $data['id_jenis_artikel'];
        $ket_singkat = $data['ket_singkat'];
        $link_artikel = $data['link_artikel'];
        $isi_artikel = $data['isi_artikel'];
        

        $query = "INSERT INTO t_artikel VALUES('', '$foto_artikel', '$judul_artikel', '$id_jenis_artikel', '$ket_singkat', '$link_artikel', '$isi_artikel')";
        
        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);

        return $isSucceed;
    }
    function update_obat($data, $file, $list_penyakit) // update data obat
    {
       
        global $conn;
        $obat = $data['id_obat'];
        $nama_obat = $data['nama_obat'];
        $id_jenis_obat = $data['id_jenis_obat'];
        $link_obat = $data['link_obat'];

        $obat_penyakit = read_obat_penyakit($obat);

        $query = "UPDATE t_obat SET nama_obat = '$nama_obat', id_jenis_obat = $id_jenis_obat, link_obat = '$link_obat'
        WHERE id_obat = $obat";
        $result = mysqli_query($conn, $query);

        foreach ($obat_penyakit as $t_penyakit) {
            $query = "DELETE FROM t_obat_penyakit WHERE id_obat = $obat";
            $result = mysqli_query($conn, $query);
        }
        foreach ($list_penyakit as $t_penyakit) {
            $query = "INSERT INTO t_obat_penyakit VALUES('',$obat, $t_penyakit)";
            $result = mysqli_query($conn, $query);
        }

        $isSucceed = mysqli_affected_rows($conn);
        // mengembalikan nilai sukses
        return $isSucceed;
    }
    function delete_obat($id) // menghapus data obat
    {
        global $conn;

        $obat = read_obat_penyakit($id);

        while($list_penyakit = mysqli_fetch_assoc($obat))
        {
            $query = "DELETE FROM t_obat_penyakit WHERE id_obat_penyakit = ".$list_penyakit['id_obat_penyakit'];
            $result = mysqli_query($conn, $query);
        }
        $query = "DELETE FROM t_obat WHERE id_obat = ".$id;
        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);

        // mengembalikan nilai sukses
        return $isSucceed;
    }

    // KHUSUS PENGUNJUNG
    function add_kendala($data, $file) // guest menambahkan kendala
    {
        global $conn;
        $nama_user = $data['nama_user'];
        $id_jenis_kelamin_user = $data['id_jenis_kelamin_user'];
        $umur_user = $data['umur_user'];
        $email_user = $data['email_user'];
        $id_pilih_dokter = $data['id_pilih_dokter'];
        $pilihanbalasan = $data['pilihanbalasan'];
        $kendala_user = $data['kendala_user'];
        
        $query = "INSERT INTO t_kendala VALUES('', '$nama_user', '$id_jenis_kelamin_user', '$umur_user', '$email_user', '$id_pilih_dokter', '$pilihanbalasan', '$kendala_user')";
        
        $result = mysqli_query($conn, $query);
        //print_r($result);
        $isSucceed = mysqli_affected_rows($conn);
        // mengembalikan nilai sukses
        return $isSucceed;
    }
    function add_balasan($data, $file) // dokter membalas pesan kendala guest
    {
        global $conn;
        $id_kendala = $data['id_kendala'];
        $id_dokter = $data['id_dokter'];
        $balasan_kendala = $data['balasan_kendala'];

        $query = "INSERT INTO t_tanya_dokter VALUES('', '$id_kendala', '$id_dokter', '$balasan_kendala')";

        $result = mysqli_query($conn, $query);
        //print_r($result);
        $isSucceed = mysqli_affected_rows($conn);
        // mengembalikan nilai sukses
        return $isSucceed;
    }
    function balasan_kendala($id_kendala) // menampilkan balasan
    {
        global $conn;
        $query    = "SELECT t_dokter.id_dokter, t_dokter.nama_dokter, 
        t_dokter.foto_dokter, t_dokter.link_dokter, t_tanya_dokter.balasan_kendala
        FROM t_tanya_dokter
        JOIN t_kendala ON t_kendala.id_kendala = t_tanya_dokter.id_kendala 
        JOIN t_dokter ON t_dokter.id_dokter = t_tanya_dokter.id_dokter
        WHERE t_tanya_dokter.id_kendala = '$id_kendala'
        AND t_kendala.pilihanbalasan = 2;";

        $eksekusi = mysqli_fetch_assoc(mysqli_query($conn, $query));
        
        return $eksekusi;
    }
    function balasan_dokter() // menampilkan is kendala
    {
        global $conn;
        $id_kendala    = $_GET['id_kendala']; // ambil id kendala
        $query    = "SELECT * FROM t_kendala WHERE id_kendala = '$id_kendala'"; // nampilin isi kendala sesuai idnya
        $eksekusi = mysqli_fetch_assoc(mysqli_query($conn, $query));
        
        return $eksekusi;
    }
    function artikel() // menampilkan artikel
    {
        global $conn;
        $id_artikel    = $_GET['id_artikel']; // ambil id artikel
        $query    = "SELECT * FROM t_artikel WHERE id_artikel = '$id_artikel'"; // nampilin isi artikel sesuai idnya
        $eksekusi = mysqli_fetch_assoc(mysqli_query($conn, $query));
        
        return $eksekusi;
    }
    function daftar_obat() // baca data tabel obat penyakit
    {
        global $conn;
        $query = "SELECT * FROM t_obat
        JOIN t_jenis_obat ON t_jenis_obat.id_jenis_obat = t_obat.id_jenis_obat ORDER BY t_obat.nama_obat ASC;";

        $eksekusi = mysqli_query($conn, $query);

        return $eksekusi;
    }
    function v_penyakit() // view daftar penyakit
    {
        global $conn;

        $query = "SELECT * FROM v_penyakit ORDER BY nama_penyakit ASC;";

        $eksekusi = mysqli_query($conn, $query);
        return $eksekusi;
    }
    function v_dokter() // view daftar dokter
    {
        global $conn;

        $query = "SELECT * FROM v_dokter ORDER BY nama_spesialisasi ASC;";

        $eksekusi = mysqli_query($conn, $query);
        return $eksekusi;
    }
    function readQuery($table, $id, $find) // baca query
    {
        global $conn;

        $query = "SELECT * FROM " . $table . " WHERE " . $id . "=" . $find;
        $result = mysqli_query($conn, $query);

        return $result;
    };
    function update_penyakit($data, $file) // tambahin data penyakit
    {

        global $conn, $mysqli;
        $id = $data['id'];
        $nama_penyakit = $data['nama_penyakit'];
        $ket_penyakit = $data['ket_penyakit'];
        $resiko_kematian = $data['resiko_kematian'];
        $link_penyakit = $data['link_penyakit'];

        $query = "UPDATE t_penyakit SET nama_penyakit = '$nama_penyakit', ket_penyakit = '$ket_penyakit', resiko_kematian = '$resiko_kematian', link_penyakit = '$link_penyakit' WHERE id_penyakit = $id";

        $result = mysqli_query($conn, $query);
        $isSucceed = mysqli_affected_rows($conn);

        // mengembalikan nilai sukses
        return $isSucceed;
    }
    function delete_penyakit($id) // hapus data penyakit
    {
        global $conn;

        // Menghapus data dari tabel t_obat_penyakit yang terkait dengan penyakit yang dihapus
        $query_delete_obat_penyakit = "DELETE FROM t_obat_penyakit WHERE id_penyakit IN (SELECT id_penyakit FROM t_penyakit WHERE id_penyakit = $id)";
        $result_delete_obat_penyakit = mysqli_query($conn, $query_delete_obat_penyakit);

        // Menghapus data obat yang tidak terhubung dengan penyakit lain dari tabel t_obat
        $query_delete_obat = "DELETE FROM t_obat WHERE id_obat NOT IN (SELECT id_obat FROM t_obat_penyakit)";
        $result_delete_obat = mysqli_query($conn, $query_delete_obat);

        // Menghapus data penyakit dari tabel t_penyakit
        $query_delete_penyakit = "DELETE FROM t_penyakit WHERE id_penyakit = $id";
        $result_delete_penyakit = mysqli_query($conn, $query_delete_penyakit);

        $isSucceed = mysqli_affected_rows($conn);

        // Mengembalikan nilai sukses
        return $isSucceed;
    }
    function update_dokter($data, $file) // update data dokter
    {
        global $conn, $mysqli;
        $id = $data['id'];
        $nama_dokter = $data['nama_dokter'];
        $id_spesialisasi_dokter = $data['id_spesialisasi_dokter'];
        $notelp_dokter = $data['notelp_dokter'];
        $alamat_dokter = $data['alamat_dokter'];
        $id_jenis_kelamin = $data['id_jenis_kelamin'];
        $deskripsi_dokter = $data['deskripsi_dokter'];
        $link_dokter = $data['link_dokter'];

        $foto_dokter = $file['foto_dokter']['name'];

        if ($foto_dokter != "") {
            
            $tempFotoDokter = $file['foto_dokter']['tmp_name'];
            $direktori = 'assets/img/doctors/' . $foto_dokter;
            move_uploaded_file($tempFotoDokter, $direktori);
            $query = "UPDATE t_dokter SET nama_dokter = '$nama_dokter', id_spesialisasi_dokter = '$id_spesialisasi_dokter', notelp_dokter = '$notelp_dokter', alamat_dokter = '$alamat_dokter', id_jenis_kelamin = '$id_jenis_kelamin', deskripsi_dokter = '$deskripsi_dokter', link_dokter = '$link_dokter', foto_dokter = '$foto_dokter' WHERE id_dokter = '$id'";
            $result = mysqli_query($conn, $query);
        }else{
            $query = "UPDATE t_dokter SET nama_dokter = '$nama_dokter', id_spesialisasi_dokter = '$id_spesialisasi_dokter', notelp_dokter = '$notelp_dokter', alamat_dokter = '$alamat_dokter', id_jenis_kelamin = '$id_jenis_kelamin', deskripsi_dokter = '$deskripsi_dokter', link_dokter = '$link_dokter' WHERE id_dokter = '$id'";
            $result = mysqli_query($conn, $query);
        }

        // $query = "UPDATE t_dokter SET nama_dokter = '$nama_dokter', id_spesialisasi_dokter = '$id_spesialisasi_dokter', notelp_dokter = '$notelp_dokter', alamat_dokter = '$alamat_dokter', id_jenis_kelamin = '$id_jenis_kelamin', deskripsi_dokter = '$deskripsi_dokter', link_dokter = '$link_dokter', foto_dokter = '$foto_dokter' WHERE id_dokter = '$id'";

        $isSucceed = mysqli_affected_rows($conn);

        // mengembalikan nilai sukses
        return $isSucceed;
    }
    function delete_dokter($id_dokter) // hapus data dokter
    {
        global $conn;

        $query = "DELETE t_tanya_dokter
        FROM t_tanya_dokter
        JOIN t_dokter ON t_tanya_dokter.id_dokter = t_dokter.id_dokter
        WHERE t_dokter.id_dokter = '$id_dokter'";
        $result = mysqli_query($conn, $query);

        // Menghapus dokter dari tabel t_dokter
        $query = "DELETE FROM t_dokter WHERE id_dokter = '$id_dokter'";
        $result = mysqli_query($conn, $query);
        
        $isSucceed = mysqli_affected_rows($conn);

        // Mengembalikan nilai sukses
        return $isSucceed;
    }
?>