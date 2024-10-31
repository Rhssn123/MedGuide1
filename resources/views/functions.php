
TABLEPRODUCTS

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
      <a href="{{ url('/') }}" class="front">Home</a>
      <a href="{{ url('/') }}" class="front">About</a>
      <a href="{{ url('/') }}" class="front">Products</a>        
      <a href="{{ url('/') }}" class="front">Contact</a>
      <a href="{{ url('/') }}" class="front">Blogs</a>
      <div class="login-container">
          <a href="{{ url('/login') }}" class="login">login</a>
      </div>     
  </nav>
    <!--<div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-map-marker-alt header-icon" id="location-btn">  Jl. Mulyorejo Tengah No.36  </div>   
        <div class="fas fa-bars" id="menu-btn"></div>           
    </div>

    <div class="location-address" id="location-address"></div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search" ></label>
    </div>-->
</header>
    <section class="home" id="home">
                <div class="content">
                    <!--<div class="container">
                        <h2>DATA KELUHAN</h2>
                        <div class="table-wrapper">
                        <table>
                          <tr>
                            <th>ID_User</th>
                            <th>Penyakit</th>
                            <th>Keluhan</th>
                            <th>Sejak Kapan</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                          </tr>
                        </table>
                      </div>
                      <div class="atsbtn">
                        <button class="btn" onclick="bukaFormRegistrasi()">
                            Tambah Keluhan<ion-icon name="add-circle"></ion-icon>
                          </button>
                      </div>
                        <section class="register" id="registerSection" style="display: none;">
                          <h2>Registrasi di MySelf</h2>
                          <form id="registrationForm" onsubmit="addUser(event)">
                            <input type="text" id="userId" placeholder="ID User" required />
                            <select id="penyakit" required>
                              <option value="" disabled selected>Pilih Penyakit Mental</option>
                              <option value="Depresi">Depresi</option>
                              <option value="Kecemasan">Kecemasan</option>
                              <option value="Skizofrenia">Skizofrenia</option>
                              <option value="Gangguan Bipolar">Gangguan Bipolar</option>
                              <option value="Gangguan Kepribadian">Gangguan Kepribadian</option>
                              <option value="Gangguan Obsesif Komulsif (OCD)">Gangguan Obsesif Komulsif (OCD)</option>
                            </select>
                            <input type="text" id="keluhan" placeholder="Keluhan" required />
                            <input type="text" id="lamaHariGejala" placeholder="Lama Hari Gejala" required />
                            <input type="number" id="age" placeholder="Umur" required />
                            <button type="submit" class="btn">Tambahkan</button>
                          </form>
                        </section>
                      </div>
                      
                      <script>
                        function bukaFormRegistrasi() {
                          var registerSection = document.getElementById('registerSection');
                          registerSection.style.display = 'block';
                        }
                      
                        function addUser(event) {
                          event.preventDefault(); // Hindari pengiriman formulir
                      
                          // Dapatkan nilai-nilai dari formulir
                          var userId = document.getElementById('userId').value;
                          var penyakit = document.getElementById('penyakit').value;
                          var keluhan = document.getElementById('keluhan').value;
                          var lamaHariGejala = document.getElementById('lamaHariGejala').value;
                          var age = document.getElementById('age').value;
                      
                          // Masukkan nilai-nilai ke dalam tabel
                          var table = document.querySelector('table');
                          var newRow = table.insertRow(-1);
                          var cell1 = newRow.insertCell(0);
                          var cell2 = newRow.insertCell(1);
                          var cell3 = newRow.insertCell(2);
                          var cell4 = newRow.insertCell(3);
                          var cell5 = newRow.insertCell(4);
                          var cell6 = newRow.insertCell(5);
                          cell1.innerHTML = userId;
                          cell2.innerHTML = penyakit;
                          cell3.innerHTML = keluhan;
                          cell4.innerHTML = lamaHariGejala;
                          cell5.innerHTML = age;
                          cell6.innerHTML = "<button class='btn btn-edit'>Edit</button><button class='btn btn-delete' onclick='hapusBaris(this)'>Hapus</button>";
                      
                          // Reset formulir
                          document.getElementById('registrationForm').reset();
                        }
                      
                        function hapusBaris(button) {
                          var row = button.parentNode.parentNode;
                          row.parentNode.removeChild(row);
                        }
                      </script>
                </div>-->
            </div>
    </section>
</body>
</html>