<?php
    require 'config.php';

    if(isset($_POST['submit'])){
        $pelajaran = $_POST['pelajaran'];
        $kelas = $_POST['kelas'];
        $nama = $_POST['nama'];
        $gambar = $_FILES['gambar']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$nama.$ekstensi";
        $tmp = $_FILES['gambar']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
            $query = "INSERT INTO pelajaran (pelajaran, kelas, gambar) VALUES ('$pelajaran','$kelas',
            '$gambar_baru')";
            $result = $db->query($query);

            if($result){
                header("Location:admin.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>