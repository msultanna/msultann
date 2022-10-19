<?php
    require "config.php";

    if(isset($_POST['submit'])){
        $pelajaran = $_POST['pelajaran'];
        $kelas = $_POST['kelas'];
  
        $query = mysqli_query($db,"INSERT INTO pelajaran (pelajaran,kelas) VALUES ('$pelajaran','$kelas')");
        if($query){
            header("Location:admin.php");
        } else {
            echo "Add Error";
        }
    }
?>