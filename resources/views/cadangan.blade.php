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
    <link rel="stylesheet" href="/bootstrap/css/style.css">

</head>

<body>
    
<!-- header section starts -->

<header class="header">

    <a href="#" class="logo">
        <img src="/bootstrap/images/logo.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>        
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <a href="#login">login</a>        

    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping" id="cart-btn"></div>     
        <div class="fas fa-bars" id="menu-btn"></div>           
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-seacrh" ></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-1.png" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$4.99/ -</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-2.png" alt="">
                <h3>cart item 02</h3>
                <div class="price">$8.99/ -</div>
            </div>            
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-3.png" alt="">
                <h3>cart item 03</h3>
                <div class="price">$5.99/ -</div>
            </div>            
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/cart-item-4.png" alt="">
                <h3>cart item 04</h3>
                <div class="price">$10.99/ -</div>
            </div>            
        </div>
        <a href="#" class="btn">checkout now</a>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>MedGuide</h3>
        <p>Informasi Obat yang tersedia di apotek terdekat Anda</p>
        <a href="#" class="btn">Order now</a>
    </div>
</section>

<!-- home section starts -->

<!-- header section ends -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpeg" alt="">
        </div>

        <div class="content">
            <h3>What do you need to know abut the MedGuide</h3>
            <p>MedGuide adalah informasi obat dengan beberapa kategori tertentu. MedGuide mempermudah pengguna untuk 
            mencari obat dengan beberapa gejala yang sedang dialaminya. </p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<section class="products" id="products">
    <h1 class="heading"> our <span>products</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/products-1.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$6.99 <span>$14.99</span></div>
            </div>
        </div>
            
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/products-2.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$6.99 <span>$14.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/products-3.png" alt="">
            </div>
            <div class="content">
                <h3>fresh coffee</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$6.99 <span>$14.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span us ></h1>

    <div class="row">

        <iframe src="" frameborder="0"></iframe>

        <form action="">
            <h3>Get In Touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="Name">
            </div>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="E-mail">
            </div>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="No. HP">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>blogs</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="/bootstrap/images/blog-1.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Diabetes - Penyebab, Jenis, Gejala dan Pengobatannya</a>
                <span>by admin / 21st may, 2021</span>
                <p>Pengobatan efektif terhadap pasien katarak</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-2.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffe</a>
                <span>by admin / 21st may, 2021</span>
                <p>Pengobatan efektif terhadap pasien katarak</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/blog-3.jpeg" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">tasty and refreshing coffe</a>
                <span>by admin / 21st may, 2021</span>
                <p>Pengobatan efektif terhadap pasien katarak</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts -->

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedIn"></a>
        <a href="#" class="fab fa-fpinterest"></a>
    </div>

    <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
        <a href="#">log in</a>
    </div>

    <div class="credit">created by <span>MedGuide</span> | all rights reserved</div>
</body>
</html>


<div class="box">
    <div class="icons">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <div class="image">
        <img src="/bootstrap/images/products-2.png" alt="">
    </div>
    <div class="content">
        <h3>Wellness Ocucare</h3>
        <div class="stars">
            <button class="minus">-</button>
            <input type="number" min="0" value="0">
            <button class="plus">+</button>
        </div>
        <div class="price">Rp 288.000,00</div>
    </div>
</div>

<div class="box">
    <div class="icons">
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
    </div>
    <div class="image">
        <img src="/bootstrap/images/products-3.png" alt="">
    </div>
    <div class="content">
        <h3>Matovit Fifty</h3>
        <div class="stars">
            <button class="minus">-</button>
            <input type="number" min="0" value="0">
            <button class="plus">+</button>
        </div>
        <div class="price">Rp 62.000,00</div>
    </div>
</div>


<!--register----------------------------------------

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
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>        
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <div class="login-container">
            <a href="{{ url('front')}}" class="login">login</a>
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


<!-- header section ends -->

<!-- home section starts -->

<!--login----------------------------------------
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
        <a href="{{ url('/') }}" class="front">home</a>
        <a href="{{ url('/') }}" class="front">about</a>
        <a href="{{ url('/') }}" class="front">products</a>        
        <a href="{{ url('/') }}" class="front">contact</a>
        <a href="{{ url('/') }}" class="front">blogs</a>
        <div class="login-container">
            <a href="{{ url('/login')}}" class="login">login</a>
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


<!-- header section ends -->

<!-- home section starts -->