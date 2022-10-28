<?php
session_start();
if (isset($_POST['regisSubmit'])) {
    $_SESSION['regisUsername'] = $_POST['regisUsername'];
    $_SESSION['regisPassword'] = $_POST['regisPassword'];
    $_SESSION['regisSubmit'] = $_POST['regisSubmit'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/forms-style.css">
    <title>Login</title>
</head>

<body>
    <h1>Silahkan Login</h1>
    <div>
        <div class="form_login">
            <form action="" method="get">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username"><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"><br><br>

                <input type="submit" name="loginSubmit" value="submit">
            </form>
        </div>
    </div>
    <?php
    if (isset($_GET['loginSubmit']) && isset($_SESSION['regisSubmit'])) {
        if ($_GET['username'] == $_SESSION['regisUsername']) {
            if ($_GET['password'] == $_SESSION['regisPassword']) {
                echo "<script> location.href='index.html' </script>";
            }
        }
    }
    ?>
    <div>
        <p>Belum Punya Akun? <a href="form_regis.php">Registrasi</a></p>
    </div>
</body>

</html>