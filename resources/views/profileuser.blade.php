<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard User</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="/bootstrap/css/styleAdminUser.css">

    <!-- jQuery and jQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>
<body>
    <!-- Rest of your HTML content -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="{{ url('/halUser') }}" class="logo" >
                        <img src="/bootstrap/images/logo.png" alt="">
                        <span class="litle">MedGuide</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/dashU') }}" class="btn">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="litle">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/saveU') }}" class="btn">
                        <span class="icon">
                            <ion-icon name="bookmark-outline"></ion-icon>
                        </span>
                        <span class="litle">Save Medicine</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/apotekU') }}" class="btn">
                        <span class="icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </span>
                        <span class="litle">Nearest Pharmacy</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/signoutU') }}" class="btn">
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
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="home">
                    <a href="{{ url('/halUser') }}" class="btn">Home</a>
                </div>
                <!--<div class="search">
                    <label>
                        <input id="search-input" type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>-->
                <a href="{{ url('/dashU') }}">
                    <div class="user">
                        <img src="/bootstrap/images/profile-admin.jpg" alt="">
                    </div>
                </a>
            </div>
            @yield('content')
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $('#search-input').autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "{{ route('searchUserAutocomplete') }}",
                        type: "GET",
                        data: {'query': request.term},
                        success: function(data) {
                            response($.map(data, function(item) {
                                return {
                                    label: item.pengguna,
                                    value: item.pengguna
                                };
                            }));
                        }
                    });
                },
                minLength: 2, // Minimum karakter untuk memulai pencarian
                select: function(event, ui) {
                    $('#search-input').val(ui.item.value);
                    // Lakukan sesuatu ketika item dipilih, misalnya mengisi form lain
                }
            });

            $('#search-input').on('keyup', function(){
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('searchUser') }}",
                    type: "GET",
                    data: {'query': query},
                    success: function(data){
                        $('.dashboard-content').html(data);
                    }
                });
            });
        });
    </script>

    <script src="/bootstrap/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
