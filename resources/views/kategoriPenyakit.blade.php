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

    <a href="{{ url('/') }}" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="{{ url('/') }}" class="front">Home</a>
        <a href="{{ url('/') }}" class="front">About</a>
        <a href="{{ url('/') }}" class="front">Products</a>        
        <a href="{{ url('/') }}" class="front">Contact</a>
        <a href="{{ url('/') }}" class="front">Blogs</a>
        <div class="login-container">
            <a href="{{ url('/login') }}" class="login">LOGIN</a>
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

<section class="home" id="home">
    <div class="content">
        <div class="wrapper">
            <h2>Penyakit</h2>
            <form action="{{ url('/halPenyakit') }}" method="get">
                @csrf
        
                <label for="penyakit_jenis">Jenis Penyakit:</label>
                <select id="penyakit_jenis" name="penyakit_jenis" required>
                    <option value="penyakit1">Mental Health</option>
                    <option value="penyakit2">Heart</option>
                    <option value="penyakit3">Dental</option>
                    <option value="penyakit4">Eyes</option>
                </select>
                
                <label for="penyakit_nama">Nama Penyakit:</label>
                <select id="penyakit_nama" name="penyakit_nama" required>
                    <!-- Options akan ditambahkan melalui JavaScript -->
                </select>

                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    var jenisSelect = document.getElementById("penyakit_jenis");
    var namaSelect = document.getElementById("penyakit_nama");

    var penyakitOptions = {
        penyakit1: ["Depression", "Anxiety", "Bipolar Disorder"],
        penyakit2: ["Hypertensi", "Heart Attack", "Arrhythmia"],
        penyakit3: ["Lubang Gigi", "Periodontis", "Toothache"],
        penyakit4: ["Ambiyopia", "Buta Warna", "Katarak", "Glaukoma"],
    };

    jenisSelect.addEventListener("change", function() {
        var jenisValue = this.value;
        namaSelect.innerHTML = ""; // Kosongkan opsi nama penyakit

        if (jenisValue in penyakitOptions) {
            penyakitOptions[jenisValue].forEach(function(nama) {
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
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
        <a href="#">login</a>
    </div>

    <div class="credit">created by <span>MedGuide</span> | all rights reserved</div>
</section>

</body>
</html>