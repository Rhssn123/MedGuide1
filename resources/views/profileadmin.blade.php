<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="/bootstrap/css/styleAdminUser.css">
    
</head>

<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <img src="/bootstrap/images/logo.png" alt="">
                        <span class="litle">MedGuide</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="litle">Management User</span>
                    </a>
                </li>
                <li>                  
                    <a href="{{ url('/admin.obatA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="medkit-outline"></ion-icon>
                        </span>
                        <span class="litle">Management Medicine</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin.penyakitA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="bandage-outline"></ion-icon>
                        </span>
                        <span class="litle">Management Diseases</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/apotekA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <span class="litle">Management Pharmacy</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/riwayatA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </span>
                        <span class="litle">History</span>
                    </a>
                </li> 
                <li>                  
                    <a href="{{ url('/signoutA')}}" class="btn">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="litle">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div id="menu-btn" class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!--<div class="search">
                    <label>
                        <input type="text" id="searchInput" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>-->
            </div>
            @yield('content')
        </div>    
    </div>

<script src="/bootstrap/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>