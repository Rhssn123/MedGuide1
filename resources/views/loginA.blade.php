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
        <a href="" class="front">{{ Auth::user()->email }}</a>
        <a href="" class="front">{{ Auth::user()->level }}</a>
        <div class="login-container">
            <a href="{{ url('admin/logout') }}" class="logout">Logout</a>
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
        <div class="slide-up">
            <h2>Login</h2>
            <form action="{{ url('admin/postlogin')}}" method="get">

                @if (Auth::user()->level == 'admin')
                    <div class="alert alert-danger">User</div>
                @endif
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <div class="remember-forget">
                    
                <label><input type="checkbox"> Remember me?
                </label>
                    <a href="#" Forgot Password?></a>
                </div>
                <label for="password">Login as</label>                
                <button type="submit" class="btn">Login</button>
                {{-- <a href="{{ url('/loginadmin')}}" class="btn">Admin</a> --}}
            </form>    
            

            <div class="login-register">
                    <p>Don't have an account?
                        @if (session()->missing('idpengguna'))
                            <a href="{{ url('/register')}}" class="register-link"> Register </a>
                        @endif
                    </p>
            </div>
        </div>
        </div>
</section>

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