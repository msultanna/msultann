<?php
require "CONFIG.php";
session_start();
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // login sebagai admin
    if($username == "admin" && $password == "admin"){
         echo "
            <script>
                alert('Selamat Datang $username');
                document.location.href = 'admin.php';
            </script>
            ";
    } else { // user biasa
        $query = mysqli_query($db, "SELECT * FROM akun WHERE username = '$username'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if(password_verify($password,$result['password'])){
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $result["nama"];
            $_SESSION['username'] = $result['username'];
            echo "
            <script>
                alert('Selamat Datang $username');
                document.location.href = 'beranda.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Username dan Password Salah');
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
    <link rel="stylesheet" href="stylesheet/forms-style.css">
    <title>Form Login</title>
</head>
<body>
    </div>
    <div class="loginBox">
        <div class="login">
            <center>
               
                <form action="" method="post">
                <label for="username">Username</label> <br>
                <input type="text" name="username" id="username" class="login-item"> <br> <br>
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" class="login-item"> <br> <br>
                <p>Belum punya akun ? <a href="form_regis.php" style="text-decoration: none;">Daftar</a></p> <br> <br>
                <input type="submit" name="submit" value="LOGIN" class="button-login">
                </form>
            </center>
        </div>
    </div>
    <script src="javascript/jquery.js"></script>
</body>
</html>