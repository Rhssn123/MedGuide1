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

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="{{ url('/') }}" class="logo">
        <img src="/bootstrap/images/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#mental-health" class="front">Mental Health</a>
        <a href="#heart" class="front">Heart</a>
        <a href="#dental" class="front">Dental</a>
        <a href="#eyes" class="front">Eyes</a>
    </nav>
    
</header>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('/halUser') }}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Halaman Cari Tahu Penyakit</li>
  </ol>
</nav>

<section class="home" id="home">
    <div class="content">
      <div class="text" id="mental-health">Mental Health</div>
      <div class="container">
        <div class="table-wrapper" id="obat-container">
          <!-- Frame gambar dan informasi obat -->
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/depresi.jpeg" alt="Gambar Obat 1">
            </div>
            <div class="info">
              <h3>Depresi</h3>
              <p>Depresi adalah kondisi suasana hati yang ditandai oleh perasaan sedih yang berkepanjangan, kehilangan minat atau kesenangan dalam aktivitas sehari-hari, serta gejala lain seperti perubahan berat badan, gangguan tidur, dan perasaan rendah diri. Ini adalah gangguan mental serius yang memerlukan perhatian dan perawatan medis.</p>
            <div class="add">
              <a href="{{ url('https://www.siloamhospitals.com/en/informasi-siloam/artikel/tips-mengatasi-depresi')}}" class="button" id="btn-add">Lihat Penanganan</a>
            </div>
          </div>  
          </div>
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/trauma.jpeg" alt="Gambar Obat 2">
            </div>
            <div class="info">
              <h3>Trauma</h3>
              <p>Trauma adalah respons psikologis dan fisik terhadap suatu peristiwa yang mengancam atau melukai secara signifikan, baik secara fisik maupun emosional. Peristiwa trauma bisa berupa kecelakaan, kekerasan fisik atau seksual, bencana alam, perang, kehilangan orang yang dicintai, atau pengalaman lain yang mengancam keselamatan dan kesejahteraan seseorang.</p>
            <div class="add">
              <a href="{{ url('https://www.siloamhospitals.com/en/informasi-siloam/artikel/apa-itu-trauma')}}" class="button" id="btn-add">Lihat Penanganan</a>
            </div>
          </div> 
          </div>
        </div>
      </div>
      <div class="text" id="heart">Heart</div>
      <div class="container">
        <div class="table-wrapper" id="obat-container">
          <!-- Frame gambar dan informasi obat -->
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/hipertensi.jpeg" alt="Gambar Obat 1">
            </div>
            <div class="info">
              <h3>Hipertensi</h3>
              <p>Hipertensi, atau tekanan darah tinggi, adalah kondisi medis di mana tekanan darah dalam pembuluh darah arteri meningkat secara persisten. Normalnya, tekanan darah sistolik (tekanan saat jantung berkontraksi) diukur di bawah 120 mmHg dan tekanan darah diastolik (tekanan saat jantung beristirahat) diukur di bawah 80 mmHg. Ketika tekanan darah melebihi ambang batas ini secara konsisten, individu tersebut dianggap menderita hipertensi.</p>
              <h2>Gejala</h2>
              <p>Sakit Kepala: Terutama di bagian belakang kepala, diikuti dengan rasa pusing.</p>
              <p>Pusing: Sensasi pusing atau pingsan yang terjadi secara tiba-tiba.</p>
              <p>1. Sesak Napas: Terutama saat melakukan aktivitas fisik.</p>
              <p>2. Nyeri Dada: Terutama di bagian dada belakang atau tengah.</p>
                <p>3. Palpitasi Jantung: Sensasi detak jantung yang tidak teratur atau cepat.</p>
                <p>4. Penglihatan Kabur: Terutama jika hipertensi menyebabkan kerusakan pada pembuluh darah di mata.</p>
                <p>5. Kebingungan: Gangguan kognitif yang muncul secara tiba-tiba.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/heart_attack.jpeg" alt="Gambar Obat 2">
            </div>
            <div class="info">
              <h3>Serangan Jantung</h3>
              <p>Serangan jantung, atau infark miokard, terjadi ketika aliran darah ke bagian dari otot jantung (miokardium) terhenti atau sangat berkurang, sehingga menyebabkan kerusakan pada jaringan jantung. Penyebab utama biasanya adalah penyumbatan pada arteri koroner akibat penumpukan plak (aterosklerosis), yang bisa pecah dan membentuk gumpalan darah yang menyumbat aliran darah.</p>
              <h2>Gejala</h2>
              <p>1. Nyeri Dada: Rasa sakit atau tekanan yang hebat di tengah atau kiri dada, yang bisa menyebar ke lengan, leher, rahang, atau punggung. Sering digambarkan seperti ada beban berat di dada.</p>
              <p>2. Sesak Napas: Kesulitan bernapas atau napas pendek yang muncul tiba-tiba, sering kali disertai dengan nyeri dada.</p>
              <p>3. Keringat Dingin: Berkeringat tanpa alasan yang jelas, sering kali disertai dengan kulit yang dingin dan lembap.</p>
              <p>4. Pusing atau Pingsan: Merasa pusing atau pingsan secara tiba-tiba.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text" id="dental">Dental</div>
      <div class="container">
        <div class="table-wrapper" id="obat-container">
          <!-- Frame gambar dan informasi obat -->
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/lubang_gigi.jpeg" alt="Gambar Obat 1">
            </div>
            <div class="info">
              <h3>Lubang Gigi</h3>
              <p>Lubang gigi, atau karies gigi, adalah kerusakan pada gigi yang terjadi akibat asam yang diproduksi oleh bakteri di dalam mulut. Bakteri ini mengkonsumsi gula dan pati dari makanan dan minuman yang kita konsumsi, menghasilkan asam yang kemudian mengikis lapisan luar gigi (email) dan dapat merusak lapisan dalam gigi (dentin dan pulpa).</p>
              <h2>Gejala</h2>
              <p>1. Nyeri Gigi: Rasa sakit atau nyeri yang bisa terjadi secara spontan atau saat menggigit makanan.</p>
              <p>2. Lubang yang Terlihat: Lubang atau cekungan yang terlihat pada permukaan gigi.</p>
              <p>3. Bau Mulut: Bau mulut yang tidak sedap atau rasa tidak enak di mulut yang disebabkan oleh pembusukan gigi.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/periodontis.jpeg" alt="Gambar Obat 2">
            </div>
            <div class="info">
              <h3>Periodontitis</h3>
              <p>Periodontitis adalah infeksi gusi yang serius yang merusak jaringan lunak dan tulang penyangga gigi. Jika tidak diobati, periodontitis dapat menyebabkan gigi tanggal. Penyakit ini merupakan tahap lanjutan dari gingivitis, yang merupakan inflamasi gusi awal.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text" id="eyes">Eyes</div>
      <div class="container">
        <div class="table-wrapper" id="obat-container">
          <!-- Frame gambar dan informasi obat -->
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/katarak.jpeg" alt="Gambar Obat 1">
            </div>
            <div class="info">
              <h3>Katarak</h3>
              <p>Katarak adalah kondisi di mana lensa mata yang biasanya jernih menjadi keruh, mengakibatkan penurunan penglihatan. Kondisi ini umumnya berkembang perlahan dan sering terjadi pada orang yang lebih tua, meskipun juga dapat terjadi akibat cedera mata, penyakit, atau penggunaan obat tertentu.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
          <div class="frame">
            <div class="image">
              <img src="/bootstrap/images/glaukoma.jpeg" alt="Gambar Obat 2">
            </div>
            <div class="info">
              <h3>Glaukoma</h3>
              <p>Glaukoma adalah sekelompok penyakit mata yang merusak saraf optik, yang vital untuk penglihatan yang baik. Kerusakan ini sering disebabkan oleh peningkatan tekanan dalam mata (tekanan intraokular). Jika tidak diobati, glaukoma dapat menyebabkan kehilangan penglihatan permanen. Glaukoma adalah penyebab utama kebutaan yang dapat dicegah.</p>
              <div class="add">
                <a href="{{ url('/tableproducts')}}" class="button" id="btn-add">Cari Obat</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    
</body>
</html>