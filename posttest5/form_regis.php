<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/forms-style.css">
    <title>Registrasi</title>
</head>
<body>
    <h1>Silahkan Registrasi</h1>
    <div>
        <div class="form_regis">
            <form action="form_login.php" method="post">
                <label for="email">Email</label><br>
                <input type="email" name="regisEmail" id="email"><br><br>
                <label for="username">Username</label><br>
                <input type="text" name="regisUsername" id="username"><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="regisPassword" id="password"><br><br>
                <label for="password">Konfirmasi Password</label><br>
                <input type="password" name="konfirPassword" id="password"><br><br>
                <input type="radio" name="regisGender" id="gender">
                <label for="laki">Laki-laki</label><br>
                <input type="radio" name="regisGender" id="gender">
                <label for="perempuan">Perempuan</label><br><br>
                <input type="submit" name="regisSubmit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>