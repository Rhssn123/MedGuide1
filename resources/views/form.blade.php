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

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-map-marker-alt header-icon" id="location-btn">  Jl. Mulyorejo Tengah No.36  </div>   
        <div class="fas fa-bars" id="menu-btn"></div>           
    </div>

    <div class="location-address" id="location-address"></div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search" ></label>
    </div>
</header>         

<section class="home" id="home">
        <table class="table-wrapper">
          <caption><h2>Data Pelanggan</h2></caption>
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telp</th>
                <th scope="col">Jenis kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <?php
              // Generate random data for table rows
              $data = array(
                  array("Raudina", "Mulyorejo", "085334330164", "P", "rara@gmail.com", "raudinasi22"),
                  array("Luthfi", "Mulyorejo", "08123456789", "P", "luthfi@gmail.com", "luthfisi22"),
                  array("Jacob", "Rungkut", "08334455667", "L", "jacob@gmail.com", "jacobsi23")
              );

              // Loop through the data array and generate table rows
              foreach ($data as $key => $row) {
                  echo "<tr>";
                  echo "<th scope='row'>" . ($key + 1) . "</th>";
                  foreach ($row as $item) {
                      echo "<td>" . ucwords(strtolower($item)) . "</td>";
                  }
                  echo "<td>";
                  echo "<a href='#'><i class='fas fa-trash'></i></a>";
                  echo "</td>"; // Icon for Delete action
                  echo "<td>";
                  echo "<a href='#'><i class='fas fa-edit'></i></a>"; // Icon for Update action
                  echo "</td>";
                  echo "</tr>";
              }
          ?>
            </tbody>
          </table>
  <div class="h4">
    <!-- Tombol Tambahkan Data -->
   <a href="{{url('/register')}}" class="btn"><h4>Tambahkan Data</h4></a> 
 </div>      
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('#pelanggan').on('change', function(){ // Mendaftarkan event change pada input
            var inputVal = $(this).val(); // Mengambil nilai input
            $('#input-pelanggan').text(inputVal); // Memasukkan nilai input ke dalam tabel
        });
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
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Products</a>
        <a href="#">Contact</a>
        <a href="#">Blogs</a>
        <a href="#">LOGIN</a>
    </div>

    <div class="credit">created by <span>MedGuide</span> | all rights reserved</div>
</section>

</body>
</html>
