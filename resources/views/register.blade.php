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
        <a href="{{ url('/') }}" class="front">Back</a>
        <!--<a href="{{ url('/') }}" class="front">About</a>
        <a href="{{ url('/') }}" class="front">Products</a>        
        <a href="{{ url('/') }}" class="front">Contact</a>
        <a href="{{ url('/') }}" class="front">Blogs</a>
        <div class="login-container">
            <a href="{{ url('/login') }}" class="login">LOGIN</a>
        </div>-->     
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
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="fw-bold">Register</h1>
                <form action="{{ url('/halUser')}}" method="post" class="mt-4">
                    @csrf

                    <div class="form-group mb-3">
                        <label class="form-label" for="pengguna">Pengguna</label>
                        <input class="form-control" value="{{ old('pengguna')}}" type="text" name="pengguna" id="pengguna">
                        <span class="text-danger">
                            @error('pengguna')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input class="form-control" value="{{ old('alamat')}}" type="text" name="alamat" id="alamat">
                        <span class="text-danger">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="telp">Telp</label>
                        <input class="form-control" value="{{ old('telp')}}" type="text" name="telp" id="telp" required>
                        <span class="text-danger">
                            @error('telp')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="jeniskelamin">Jenis Kelamin</label>
                        <select class="form-control" value="{{ old('jeniskelamin')}}" name="jeniskelamin" id="jeniskelamin" required>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                        <span class="text-danger">
                            @error('jeniskelamin')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" value="{{ old('email')}}" type="text" name="email" id="email" required>
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" value="{{ old('password')}}" type="password" name="password" id="password" required>
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</section>


</body>
</html>