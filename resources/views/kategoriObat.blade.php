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
    <link rel="stylesheet" href="/bootstrap/css/style3.css">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="#" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="front">Home</a>
        <a href="{{ url('/') }}" class="front">About</a>
        <a href="{{ url('/') }}" class="front">Products</a>        
        <a href="{{ url('/') }}" class="front">Contact</a>
        <a href="{{ url('/') }}" class="front">Blogs</a>
        <div class="login-container">
            <a href="{{ url('/login') }}" class="login">login</a>
        </div>     
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping" id="cart-btn"></div>     
        <div class="fas fa-bars" id="menu-btn"></div>           
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search" ></label>
    </div>

</header>

<section class="home" id="home">
    <div class="content">
        <div class="wrapper">
            <h2>Obat</h2>
            <form action="{{ url('/tableproducts') }}" method="get">
                @csrf
                <label for="kategori_obat">Kategori Obat:</label>
                <select id="kategori_obat" name="kategori_obat" required>
                    <option value="obat1">Sirup</option>
                    <option value="obat2">Botol</option>
                    <option value="obat3">Kapsul/Tablet</option>
                </select>
                <label for="nama_obat">Nama Obat:</label>
                <select id="nama_obat" name="nama_obat" required>
                    <!-- Options akan ditambahkan melalui JavaScript -->
                </select>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var jenisSelect = document.getElementById("kategori_obat");
    var namaSelect = document.getElementById("nama_obat");

    var obatOptions = {
        obat1: ["Isoprinosine", "Sanmol"],
        obat2: ["Cendo Catarlent", "Wellness Ocucare"],
        obat3: ["Cardio Aspirin", "Amcor"],
    };

    jenisSelect.addEventListener("change", function() {
        var jenisValue = this.value;
        namaSelect.innerHTML = ""; // Kosongkan opsi nama penyakit

        if (jenisValue in obatOptions) {
            obatOptions[jenisValue].forEach(function(nama) {
                var option = document.createElement("option");
                option.text = nama;
                option.value = nama;
                namaSelect.add(option);
            });
        }
    });

    // Trigger perubahan untuk memastikan opsi nama penyakit disesuaikan saat halaman dimuat
    jenisSelect.dispatchEvent(new Event("change"));
});
</script>
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

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