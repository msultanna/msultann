<?php
require "config.php";
if(isset($_POST['regisSubmit'])){
    $nama = $_POST['regisNama'];
    $username = $_POST['regisUsername'];
    $password = $_POST['regisPassword'];
    $konfirmasi = $_POST['konfirPass'];
    $query = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");
    if(mysqli_fetch_assoc($query)){
        echo "
        <script>
            alert('Username sudah digunakan');
        </script>
        ";
    } else {
        if($password == $konfirmasi){
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = mysqli_query($db, "INSERT INTO akun VALUES ('','$nama', '$username', '$password')");
            if($query){
                echo "
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'index.php';
                </script>
                ";
            } else {
                echo "
                <script>
                    alert('Registrasi Gagal');
                </script>
                ";
            }
        } else {
            echo "
            <script>
                alert('Password dan konfirmasi password anda berbeda');
            </script>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/forms-style.css"">
    <title>Form Register</title>
</head>
<body>
    
    <div class="regisBox">
        <div class="regis">
            <center>
                <div class="coba-regis"><center><!-- <img src="images/signup.png" width="200px" height="175px"> --></center></div>
                <form action="" method="post">
                    <label for="RegisNama">Nama Lengkap</label> <br>
                    <input type="text" name="regisNama" id="RegisNama" class="regis-item"> <br> <br>
                    <label for="username">Username</label> <br>
                    <input type="text" name="regisUsername" id="username" class="regis-item"> <br> <br>
                    <label for="password">Password</label> <br>
                    <input type="password" name="regisPassword" id="password" class="regis-item"> <br> <br>
                    <label for="password">Konfirmasi Password</label> <br>
                    <input type="password" name="konfirPass" id="konfirPass" class="regis-item"> <br> <br>
                    <input type="submit" name="regisSubmit" value="DAFTAR" class="button-regis">
                </form>
            </center>
        </div>
    </div>
    <script src="javascript/jquery.js"></script>
</body>
</html>