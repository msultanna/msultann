<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM promo WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $promo = $result['promo'];
    $harga= $result['harga'];
    $gambar= $result['gambar'];

}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE panorama SET promo='$_POST[promo]',harga='$_POST[harga]',gambar='$_POST[gambar]' WHERE id=$_GET[id]");
    if($query){
        header("Location:admin.php");
    } else {
        echo "Update Gagal";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelajaran</title>
    <link rel="stylesheet" href="stylecrud.css">
</head>
<body>
        <h1 class="judul">belajarWEB</h1>
    
    <div class="form-class">
        <h3>Edit Promo</h3><br><br>
        <form action="" method="post">
            <label for="">promo</label><br>
            <input type="text" name="promo" class="form-text" value='<?=$promo?>'><br>
            
            <label for="">Harga</label><br>
            <input type="text" name="harga" class="form-text" value='<?=$harga?>'><br>

            <label for="">Gambar</label><br>
            <input type="file" name="gambar" class="form-text" value='<?=$gambar?>'><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>