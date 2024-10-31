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
    <link rel="stylesheet" href="/bootstrap/css/styleHal.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="{{ url('/') }}" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#eyes" class="front">Eyes</a>
        <a href="#dental" class="front">Dental</a>
        <a href="#heart" class="front">Heart</a>
    </nav>

</header>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/halUser') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Halaman Cari Obat</li>
  </ol>
</nav>

<section class="home" id="home">
    <div class="content">
    <div class="text" id="Eyes">Eyes</div>
          <div class="container">
                <div class="table-wrapper" id="obat-container">
                  <!-- Frame gambar dan informasi obat -->
                <div class="frame">
                  <div class="image">
                      <img src="/bootstrap/images/products-1.jpeg" alt="Gambar Obat 1">
                  </div>
                  <div class="info">
                      <h3>Cendo Catarlent</h3>
                      <h2>Harga<h2>          
                      <p>Rp 32.500,00</p>
                      <h2>Manfaat</h2>
                      <p>Cendo Catarlent digunakan untuk mengurangi kekeruhan pada mata akibat katarak.</p>
                      <h2>Dosis</h2>
                      <p>Dosis yang dianjurkan untuk Cendo Catarlent adalah 1-2 tetes pada tiap mata, 3 kali sehari atau sesuai petunjuk dokter.</p>
                      <h2>Stok</h2>
                      <p>10</p>
                      <div class="add-1">
                        <button class="button favorite-button"><i class="far fa-heart" ></i></button>
                      </div>
                  </div>
                </div>
                <div class="frame">
                    <div class="image">
                        <img src="/bootstrap/images/products-2.png" alt="Gambar Obat 2">
                    </div>
                    <div class="info">
                        <h3>Wellness Ocucare</h3>
                        <h2>Harga<h2>       
                        <p>Rp 288.000,00</p>
                        <h2>Manfaat</h2>
                        <p>Wellness Ocucare dapat melancarkan suplai darah ke mata, membantu memelihara dan melindungi kesehatan mata.</p>
                        <h2>Dosis</h2>
                        <p>Dosis yang dianjurkan untuk Wellness Ocucare adalah 1 tablet per hari.</p>
                        <h2>Stok</h2>
                        <p>8</p>
                        <!--<div class="add">
                            <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Tambahkan ke Penyimpanan</a>
                        </div>-->
                        <div class="add-1">
                          <button class="button favorite-button" ><i class="far fa-heart"></i></button>
                        </div>
                    </div>
                </div>     
          </div>
        </div>
    <div class="text" id="dental">Dental</div>
          <div class="container">
                <div class="table-wrapper" id="obat-container">
                <div class="frame">
                  <div class="image">
                      <img src="/bootstrap/images/dental_1.jpeg" alt="Gambar Obat 1">
                  </div>
                  <div class="info">
                      <h3>Fasidol Forte</h3>
                      <h2>Harga<h2>       
                      <p>Rp6.600 – Rp6.800 per strip.</p>
                      <h2>Manfaat</h2>
                      <p>mengatasi demam dan sebagai perda nyeri seperti sakit kepala, sakit gigi dan nyeri ringan lainnya.</p>
                      <h2>Dosis</h2>
                      <p>Biasanya, dosis Fasidol untuk dewasa adalah 1-2 tablet setiap 4-6 jam sesuai kebutuhan, tidak melebihi 4 dosis dalam 24 jam. Untuk anak-anak, dosisnya harus sesuai dengan rekomendasi dokter berdasarkan berat badan dan kondisi kesehatan.</p>
                      <h2>Stok</h2>
                      <p>15</p>
                      <!--<div class="add">
                          <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Tambahkan ke Penyimpanan</a>
                      </div>-->
                      <div class="add-1">
                        <button class="button favorite-button"><i class="far fa-heart"></i></button>
                      </div>
                  </div>
                </div>
              <div class="frame">
                  <div class="image">
                      <img src="/bootstrap/images/dental_2.jpeg" alt="Gambar Obat 2">
                  </div>
                  <div class="info">
                      <h3>Neuralgin</h3>
                      <h2>Harga<h2>       
                      <p>Rp10.500 – Rp11.800 per strip.</p>                      
                      <h2>Manfaat</h2>
                      <p>mengatasi nyeri akibat berbagai kondisi, mulai dari nyeri sendi, nyeri saraf, sakit kepala, sakit gigi, nyeri haid, hingga nyeri pascaoperasi.</p>
                      <h2>Dosis</h2>
                      <p>Anak-anak: ½-1 kaplet 3-4 kali sehari sesudah makan.
                        Dewasa: 1-2 kaplet 3-4 kali sehari sesudah makan. </p>
                      <h2>Stok</h2>
                      <p>10</p>
                      <!--<div class="add">
                          <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Tambahkan ke Penyimpanan</a>
                      </div>-->
                      <div class="add-1">
                        <button class="button favorite-button" ><i class="far fa-heart"></i></button>
                      </div>
                  </div>
              </div>
              <!-- Frame gambar dan informasi obat -->       
          </div>
        </div>
    <div class="text" id="heart">Heart</div>
        <div class="container">
              <div class="table-wrapper" id="obat-container">
                <!-- Frame gambar dan informasi obat -->
              <div class="frame">
                <div class="image">
                    <img src="/bootstrap/images/heart_1.jpeg" alt="Gambar Obat 1">
                </div>
                <div class="info">
                    <h3>Cardio Aspirin</h3>
                    <h2>Harga<h2>       
                    <p>Rp 25.900,00</p>
                    <h2>Manfaat</h2>
                    <p>Cardio Aspirin digunakan untuk pencegahan pembekuan darah pasca serangan jantung, angina pektoris, serta dapat meringankan nyeri ringan sampai sedang dan menurunkan demam.</p>
                    <h2>Dosis</h2>
                    <p>Tujuan: pengobatan dan pencegahan stroke iskemik, angina pektoris, infark miokard
                      Dewasa: Pencegahan awal: Dosis 150–300 mg.
                      
                      Tujuan: pencegahan pada pasien berisiko tinggi pada jantung
                      Dewasa: Penggunaan jangka panjang: dosis 75–150 mg sekali sehari. Penggunaan jangka pendek: dosis 150–300 mg per hari.
                      
                      Tujuan: mengatasi demam dan nyeri ringan sampai sedang
                      Dewasa: Dosis awal 300–900 mg, dapat diulang tiap 4–6 jam bila diperlukan dengan dosis maksimal 4 g per hari..</p>
                    <h2>Stok</h2>
                    <p>15</p>
                    <!--<div class="add-1">
                        <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Tambahkan ke Penyimpanan</a>
                    </div>-->
                    <div class="add-1">
                      <button class="button favorite-button" ><i class="far fa-heart"></i></button>
                    </div>
                </div>
              </div>
            <div class="frame">
                <div class="image">
                    <img src="/bootstrap/images/heart_2.jpeg" alt="Gambar Obat 2">
                </div>
                <div class="info">
                    <h3>Lasix</h3>
                    <h2>Harga<h2>       
                    <p>Rp 150.000,00</p>
                    <h2>Manfaat</h2>
                    <p>Lasix 40 Mg 10 Tablet bermanfaat untuk mengatasi penumpukan cairan di dalam tubuh (edema) atau tekanan darah tinggi (hipertensi). 

                      Lasix 40 Mg 10 Tablet mengeluarkan kelebihan cairan dari dalam tubuh melalui urine dengan cara menghalangi penyerapan natrium di dalam sel-sel ginjal dan meningkatkan jumlah urine yang dihasilkan oleh tubuh.</p>
                    <h2>Dosis</h2>
                    <p>Kondisi: Edema akibat gagal jantung

                      Dewasa: Dosis awal 40 mg per hari. Dosis maksimal 80 mg per hari.
                      Kondisi: Tekanan darah tinggi
                      
                      Dewasa: Dosis 40-80 mg per hari. Bisa dikombinasikan dengan obat antihipertensi.
                      Lanjut usia: Dosis untuk lansia selalu diawali dengan dosis terendah, lalu ditingkatkan secara bertahap sesuai kondisi pasien.</p>
                    <h2>Stok</h2>
                    <p>10</p>
                    <!--<div class="add">
                        <a href="{{ url('/saveUedit')}}" class="button" id="btn-add">Tambahkan ke Penyimpanan</a>
                    </div>-->
                    <div class="add-1">
                      <button class="button favorite-button"><i class="far fa-heart"></i></button>
                    </div>
                </div>
            </div>
            <!-- Frame gambar dan informasi obat -->       
        </div>
      </div>
    </div>
</section>

<!-- Tambahkan script di bagian bawah file untuk menangani klik tombol favorit -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const favoriteButtons = document.querySelectorAll('.favorite-button');

        favoriteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const icon = button.querySelector('i');
                const productName = button.parentNode.parentNode.querySelector('h3').textContent;
                const productPrice = button.parentNode.parentNode.querySelector('p').textContent;

                // Periksa apakah tombol favorit sudah difavoritkan atau tidak
                const isFavorited = icon.classList.contains('fas');

                // Ubah warna ikon favorit sesuai tindakan pengguna
                if (isFavorited) {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    // Hapus dari penyimpanan jika ada
                    removeFromStorage(productName, productPrice);
                } else {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    // Tambahkan ke penyimpanan
                    addToStorage(productName, productPrice);
                }
            });
        });

        // Fungsi untuk menambahkan ke penyimpanan
        function addToStorage(name, price) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            favorites.push({ name: name, price: price });
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }

        // Fungsi untuk menghapus dari penyimpanan
        function removeFromStorage(name, price) {
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];
            favorites = favorites.filter(item => item.name !== name || item.price !== price);
            localStorage.setItem('favorites', JSON.stringify(favorites));
        }
    });
</script>


    
</body>
</html>