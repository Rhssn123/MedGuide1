<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website MedGuide</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="/bootstrap/css/styleLogin.css">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="#" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Products</a>        
        <a href="#contact">Contact</a>
        <a href="#blogs">Blogs</a>
        <div class="spacer"></div>
        <div class="login-container">
            <div class="login-container"><a href="{{ url('/logout') }}" class="login">Logout</a></div>
        </div>
        <div class="session-container">
            @if (session()->has('idpengguna')) 
                    <i class="fas fa-user">
                    {{ session('idpengguna')['email']}}
                    </i>
            @endif
        </div>
    </nav>

    <!--<div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-user" id="user-btn"></div>           
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search" ></label>
    </div>-->
</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>MedGuide</h3>
        <p>Informasi obat yang tersedia di apotek terdekat Anda</p>
        <a href="{{ url('/profileuser')}}" class="btn">My Profile</a>
    </div>
</section>

<!-- home section starts -->

<!-- header section ends -->

<section class="about" id="about">

    <h1 class="heading"> <span>get to</span> know </h1>

    <div class="row">

        <div class="image">
            <img src="bootstrap/images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>What Do You Need to Know About Your Diseases</h3>
            <p>MedGuide adalah informasi obat dengan beberapa kategori tertentu. MedGuide mempermudah pengguna untuk 
            mengetahui penyakit dan mencari obat dengan beberapa gejala yang sedang dialaminya. </p>
            <a href="{{ url('/halPenyakit')}}" class="btn">Cari Tahu Penyakit</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<section class="products" id="products">
    <h1 class="heading"> our <span>medicines</span></h1>

        <div class="content">
            <p>Beberapa obat yang kamu butuh</p>
            <a href="{{ url('/tableproducts') }}" class="btn">Cari Obat</a>
        </div>

    <div class="box-container">
        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-check-circle"></a>
                <a href="#" class="fas fa-pills"></a>
                <a href="#" class="fas fa-hospital"></a>
            </div>-->
            <div class="image">
                <img src="/bootstrap/images/products-1.jpeg" alt="">
            </div>
            <div class="content">
                <h3>Cardo Cartalent</h3>
                <div class="price">Rp 32.500,00</div>
                <!--<a href="{{url('/deskObat')}}" class="btn">Cek Deskripsi Produk</a>-->
            </div>
        </div>
            
        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-check-circle"></a>
                <a href="#" class="fas fa-pills"></a>
                <a href="#" class="fas fa-hospital"></a>
            </div>-->
            <div class="image">
                <img src="/bootstrap/images/products-2.png" alt="">
            </div>
            <div class="content">
                <h3>Wellness Ocucare</h3>
                <div class="price">Rp 288.000,00</div>
                <!--<a href="{{url('/deskObat')}}" class="btn">Cek Deskripsi Produk</a>-->
            </div>
        </div>

        <div class="box">
            <!--<div class="icons">
                <a href="#" class="fas fa-check-circle"></a>
                <a href="#" class="fas fa-pills"></a>
                <a href="#" class="fas fa-hospital"></a>
            </div>-->
            <div class="image">
                <img src="/bootstrap/images/products-3.png" alt="">
            </div>
            <div class="content">
                <h3>Matovit Fifty</h3>
                <div class="price">Rp 62.000,00</div>
                <!--<a href="{{url('/deskObat')}}" class="btn">Cek Deskripsi Produk</a>-->
            </div>
        </div>
    </div>
</section>

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us</h1>

    <div class="row">

        <iframe src="/bootstrap/images/maps.png" frameborder="0"></iframe>

        <form action="">
            <h3>Get In Touch</h3>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <p>medguide@gmail.com</p>
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <p>08123456789</p>
            </div>
            <div class="inputBox">
                <span class="fab fa-instagram"></span>
                <p>MedGuide_</p>
            </div>
            <div class="inputBox">
                <span class="fab fa-tiktok"></span>
                <p>MedGuide_Official</p>
            </div>
            <!--<input type="submit" value="Contact Now" class="btn">-->
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span></h1>

    <!--<div class="content">
        <p>Beberapa gejala yang perlu kamu ketahui</p>
        <a href="{{ url('/kategoriPenyakit') }}" class="btn">Cari Tahu Gejala Penyakit</a>
    </div>-->

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="/bootstrap/images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Diabetes - Penyebab, Jenis, Gejala dan Pengobatannya</a>
                <span>02 Oktober 2023</span>
                <p>Diabetes adalah kondisi yang termasuk ke dalam kategori penyakit kronis berbahaya, terutama jika sudah terjadi komplikasi.</p>
                <a href="https://www.siloamhospitals.com/en/informasi-siloam/artikel/diabetes" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/bootstrap/images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Mengenal Penyakit Cacingan, Penyebab, Gejala & Pengobatannya</a>
                <span>27 September 2023</span>
                <p>Cacingan adalah penyakit yang disebabkan oleh cacing parasit.</p>
                <a href=https://www.siloamhospitals.com/informasi-siloam/artikel/apa-itu-cacingan#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="/bootstrap/images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Inkompatibilitas Rhesus: Penyebab, Gejala, dan Pengobatannya</a>
                <span>19 Februari 2024</span>
                <p>Incompatibility rhesus atau inkompatibilitas rhesus adalah ketidakcocokan golongan darah tipe rhesus antara ibu dan bayi yang dikandungnya.</p>
                <a href="https://www.siloamhospitals.com/informasi-siloam/artikel/mengenal-inkompatibilitas-rhesus" class="btn">Read More</a>
            </div>
        </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts -->

<section class="footer">

    <!--<div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>-->

    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Products</a>        
        <a href="#contact">Contact</a>
        <a href="#blogs">Blogs</a>
    </div>

    <div class="credit">created by <span>MedGuide</span> | all rights reserved</div>
</section>

</body>
</html>