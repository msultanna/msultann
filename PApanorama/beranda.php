

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>PANORAMA Cafe & Resto</title>
</head>

<body>  
    <header class="head">
       <!--  <div class="side-bar">
            <i class="fas fa-search" id="search" ></i>
            <i class="fas fa-user" id="user"></i>
            <i class="fas fa-bars" id="bars"></i>
        </div> -->
        <h1>PANORAMA Cafe & Resto</h1>
        <nav class="navbar">
            <a><input id="swbtn" class="toggle" type="checkbox" onclick="myFunction()"/></a>
            
            <a href="#home">Beranda</a>
            <a href="#promo">PROMO</a>
            <!-- <a href="#about">KONTAK</a> -->
            <a href="#contact">Kontak</a>
            <!-- <a href="admin.php">Admin</a> -->
            <a href="logout.php">Logout</a>
            
        </nav>
        <form action="#" class="search-bar">
            <input type="search" name="search" id="1" placeholder="Cari disini">
    </header>

    <!-- BERANDA -->
    <section class="home" id="home">
        <div class="home-content">
            <div class="inner-content">
                <h3>SELAMAT DATANG di PANORAMA Cafe & Resto</h3>
                <p>belajarWEB adalah salah satu layanan penyedia fasilitas pebelajaran secara online dan mandiri agar seluruh mahasiswa/i atau para pelajar yang ingin mempelajari tentang apa itu Website</p>
                <button class="btn">Lanjut</button>
            </div>
            <div class="inner-content-img">
                <img src="gambar/aw.png" alt="img">
            </div>
        </div>
    </section>
</body>



    <!-- PROMO -->
    <section class="promo" id="promo">
    
    <div class="menu-content">  <div class="in-box">
        <i class="far fa-heart"></i>
            <img src="p2.jpg" alt="img" class="veg-icon">
                <div class="star">
                </div>
            </div>
        </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="p3.jpg" alt="img" class="veg-icon">
            <div class="in-content">
                <div class="star">
                </div>
            </div>
        <div class="in-box">
            <i class="far fa-heart"></i>
            <img src="p4.jpg" alt="img" class="veg-icon">
            <div class="in-content">
                <div class="star">
                </div>
            </div>
        </div>
</section>
    
<!-- kontak -->
<!-- <div class="AboutMe" id="about">
        <div>
            <div class="copy-container">
            </div>
            
            <table>
                <tr>
                    <td><img src="a.jpg" width="300px"></td>
                    <td>
                        <pre class="data">
                        <p><h1>Tentang Kami</h1></p>
                        <p>Nama                      : Halo saya bukan Sultan</p>
                        <p>jabatan                   : bukan Pegwai</p>
                        <p>pembautan             : 2001</p>
                        
                        </pre>
                    </td>
                </tr>
            </table>
        </div> -->

<!-------------------------------------------contact Section-------------->
<footer class="contact" id="contact">
    <div class="contact-sec">
        <div class="contact-inner">
            <div class="contact-inner-col">
            </div>
            <div class="contact-inner-col">
                <h1>Hubungi kami</h1>
                <p>Semoga belajarWEB dapat membantu anda dalam mempelajari apa itu WEBSITE, ada kendala?
                hubungi kami
                </p>
                
                <form action="#" id="" method="get">
                    <input type="text" name="name" id=" " placeholder="masukkan nama" required>
                    <input type="email" name="name" id=" " placeholder="masukkan email" required>
                   
                    <textarea name="" id="" cols="10" rows="8"></textarea>
                    <button class="btn">kirim</button>
                </form>
            </div>
</footer>

<!-------------------------------java script ------------->
<script src="jquery.js"></script>
<script>
    let searchbtn = document.querySelector('#search');
    let searchfrm = document.querySelector('.head .search-bar');

    searchbtn.onclick = () => {
        searchfrm.classList.toggle('active');
        menu.classList.remove('active');
    }

    let menu = document.querySelector('.head .navbar');
    document.querySelector('#bars').onclick = () => {
        menu.classList.toggle('active');
        searchfrm.classList.remove('active');

    }
    window.onscroll = () => {
        menu.classList.remove('active');
        searchfrm.classList.remove('active');
    }
</script>

</html>