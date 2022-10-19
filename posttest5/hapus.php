<?php
    require "config.php";
    if(isset($_GET['id'])){
        $query = mysqli_query($db,"DELETE FROM pelajaran WHERE id=$_GET[id]");
        if($query){
            header("Location:admin.php");
        } else {
            echo "Delete Gagal";
        }
    }
?>

