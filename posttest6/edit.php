<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM pelajaran WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $pelajaran = $result['pelajaran'];
    $kelas= $result['kelas'];
    $gambar= $result['gambar'];

}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE pelajaran SET pelajaran='$_POST[pelajaran]',kelas='$_POST[kelas]',gambar='$_POST[gambar]' WHERE id=$_GET[id]");
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
        <h3>Edit Pelajaran</h3><br><br>
        <form action="" method="post">
            <label for="">pelajaran</label><br>
            <input type="text" name="pelajaran" class="form-text" value='<?=$pelajaran?>'><br>
            
            <label for="">Kelas</label><br>
            <input type="text" name="kelas" class="form-text" value='<?=$kelas?>'><br>

            <label for="">Gambar</label><br>
            <input type="file" name="gambar" class="form-text" value='<?=$gambar?>'><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>