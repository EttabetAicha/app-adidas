<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adidas</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/icon-adidas-logo.svg') }}" type="image/icon type">
</head>

<body>
    <header>
        <div class="offer">
            <a href="">30% OFF KIDS STYLES*</a>
            <a href=""><i class="uil uil-truck"></i> FREE STANDARD SHIPPING & RETURNS | JOIN NOW</a>
        </div>
        <div class="header-menu">
            <a href="">help</a>
            <a href="">exchanges & returns</a>
            <a href="">order tracker</a>
            <a href="">join adiclub</a>
        </div>
        <nav>
            <i class="uil uil-bars"></i>
            <a href="" class="logo">
                <img src="{{ asset('img/icon-adidas-logo.svg') }}" alt="">
            </a>
            <ul>
                <i class="uil uil-times-circle"></i>
                <li><a href="#" class="active">MEN</a></li>
                <li><a href="#" class="active">WOMEN</a></li>
                <li><a href="#" class="active">KIDS</a></li>
                <li><a href="#">BACK TO SCHOOL</a></li>
                <li><a href="#">SALE</a></li>
                <li><a href="#">3 STRIPE LIFE</a></li>
            </ul>
            <div class="user">
                <div class="search">
                    <input type="text" placeholder="Search"> <i class="uil uil-search"></i> <i
                        class="uil uil-times-circle"></i>
                </div>
                <a href="{{ url('/dashboard') }}"><i class="uil uil-user"></i></a>
                <i class="uil uil-heart"></i>
                <i class="uil uil-shopping-bag"></i>
            </div>
        </nav>
    </header>
    <main>
        <section class="main">
            <div class="container">
                <h1>THE BACK TO SCHOOL SHOP</h1> 
                <p>School style that’s uniquely you.</p>
                <div class="shop">
                    <div class="shop-item"><a href="" class="shop-now">SHOP MEN <i class="uil uil-arrow-right"></i></a>
                    </div>
                    <div class="shop-item"><a href="" class="shop-now">SHOP WOMEN <i class="uil uil-arrow-right"></i></a></div>
                    <div class="shop-item"><a href="" class="shop-now">SHOP KIDS <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular">
            <h1>POPULAR RIGHT NOW</h1>
            <div class="popular-product">
                <a href="">ULTRABOOST</a>
                <a href="">NMD</a>
                <a href="">BACKPACKS</a>
                <a href="">CLEATS</a>
                <a href="">STAN SMITH</a>
            </div>
        </section>
        <section class="clothes">
            <div class="clothes-item">
                <img src="img/shoes.webp" alt="">
                <a>SHOES</a>
            </div>
            <div class="clothes-item">
                <img src="img/clothing.webp" alt="">
                <a>CLOTHING</a>
            </div>
            <div class="clothes-item">
                <img src="img/bestsellers.webp" alt="">
                <a>BEST SELLERS</a>
            </div>
            <div class="clothes-item">
                <img src="img/new-arrivals.webp" alt="">
                <a>NEW ARRIVALS</a>
            </div>
        </section>
        <section class="arrivals-section">
            <div class="arrivals">
                <div class="new-arrivals">
                    <a href="" class="active">NEW ARRIVALS</a>
                    <a href="" class="trending">WHAT's TRENDING</a>
                </div>
                <div class="view-all">
                    <a href="">VIEW ALL</a>
                </div>
            </div>
            <div class="wrapper">
                <div class="arrivals-slider">
                    <div class="slider-item">
                        <div class="slider-img off">
                            <img src="img/arrivals-img1.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>NMD_V3 Shoes</h5>
                            <p>Men's Originals</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img off">
                            <img src="img/arrivals-img2.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>NMD_V3 Shoes</h5>
                            <p>Woen's Originals</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img3.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>COLLEGIATE SKIRT</h5>
                            <p>Women's Originals</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img4.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>adidas Originals Class of 72 Crop Vest</h5>
                            <p>Women's Originals</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img5.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>Capable of Greatness Joggers</h5>
                            <p>Men's Training</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img6.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>adidas x Peloton jacket</h5>
                            <p>Men's Training</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img7.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>adidas x Peloton jacket</h5>
                            <p>Men's Training</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img8.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>Capable of Greatness 7/8 Tights</h5>
                            <p>Women's Training</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img9.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>Dust Coat (Gender Neutral)</h5>
                            <p>Sportswear</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img10.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>Adilette Slides</h5>
                            <p>Men's Originals</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img12.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>adidas x LEGO® Sport Pro Shoes</h5>
                            <p>Youth Sportswear</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>
                    <div class="slider-item">
                        <div class="slider-img">
                            <img src="img/arrivals-img13.webp" alt="">
                        </div>
                        <div class="slider-content">
                            <h5>Ultraboost 19.5 DNA Shoes</h5>
                            <p>Men's Sportswear</p>
                            <span>new</span>
                        </div>
                        <i class="uil uil-heart"></i>
                    </div>

                </div>
                <a class="prev">&larr;</a>
                <a class="next">&rarr;</a>
            </div>

        </section>

        <section class="story">
            <div class="wrapper">
                <div class="story-item">
                    <h1>Stories, style, and sporting goods at adidas, since 1949</h1>
                    <p>Through sports, we have the power to change lives. Sports keep us fit. They keep us mindful. They
                        bring us together. Athletes inspire us. They help us to get up and get moving.
                        And sporting goods featuring the latest technologies help us beat our personal best. adidas is
                        home to the runner, the basketball player, the soccer kid, the fitness enthusiast, the yogi.
                        And even the weekend hiker looking to escape the city. The 3-Stripes are everywhere and
                        anywhere. In sports. In music. On life’s stages. Before the whistle blows, during the race,
                        and at the finish line. We’re here to support creators. To improve their game. To live their
                        lives. And to change the world</p>
                    <p>adidas is about more than sportswear and workout clothes. We partner with the best in the
                        industry to co-create. This way we offer our fans the sporting goods, style and clothing that
                        match the athletic needs, while keeping sustainability in mind. We’re here to support creators.
                        Improve their game. Create change. And we think about the impact we have on our world.</p>
                </div>
                <div class="story-item">
                    <h1>Workout clothes, for any sport</h1>
                    <p> adidas designs for athletes of all kinds. Creators who love to change the game. People who
                        challenge conventions, break the rules, and define new ones. Then break them all over again. We
                        design
                        sports apparel that gets you moving, winning, and living life to the fullest. We create bras and
                        tights for female athletes who play just as hard as the men. From low to high support. Maximum
                        comfort. We design, innovate and iterate. We test new technologies in action. On the field, the
                        track, the court, and in the pool. We’re inspired by retro workout clothes, creating new
                        streetwear essentials. From NMD and Ozweego to our Firebird tracksuits. From Stan Smith to
                        Superstar. Classic sports models are brought back to life on the streets and the stages around
                        the world.</p>
                    <p>Through our collections we blur the borders between high fashion and high performance. Like our
                        adidas by Stella McCartney athletic clothing collection – designed to look the part inside and
                        outside of the gym. Or some of our adidas Originals lifestyle pieces, that can be worn as sports
                        apparel too. Our lives are constantly changing. Becoming more and more versatile. And adidas
                        designs with that in mind.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="adiclub">
            <div class="wrapper">
                <h1>JOIN OUR ADICLUB & GET 15% OFF</h1>
                <a href="" class="sign-up"> SIGN UP FOR FREE <i class="uil uil-arrow-right"></i></a>
            </div>
        </section>
        <section class="footer">
            <div class="wrapper">
                <div class="footer-item">
                    <h1><a href="">PRODUCT</a></h1>
                    <a href="">shoes</a>
                    <a href="">clothing</a>
                    <a href="">Accessories</a>
                    <a href="" class="margin">gift cards</a>
                    <a href="">new arrivals</a>
                    <a href="">best sellers</a>
                    <a href="">release dates</a>
                    <a href="">sale</a>
                </div>
                <div class="footer-item">
                    <h1><a href="">SPORT</a></h1>
                    <a href="">soccer</a>
                    <a href="">running</a>
                    <a href="">basketball</a>
                    <a href="">football</a>
                    <a href="">outdoor</a>
                    <a href="">golf</a>
                    <a href="">baseball</a>
                    <a href="">tennis</a>
                    <a href="">skateboarding</a>
                    <a href="">training</a>
                </div>
                <div class="footer-item">
                    <h1><a href="">COLLENCTIONS</a></h1>
                    <a href="">adicolor</a>
                    <a href="">ultraboost</a>
                    <a href="">NMD</a>
                    <a href="">forum</a>
                    <a href="">superstar</a>
                    <a href="">running shoes</a>
                    <a href="">adilette</a>
                    <a href="">stan smith</a>
                    <a href="">adizero</a>
                    <a href="">tiro</a>
                    <a href="">EQT</a>
                </div>
                <div class="footer-item">
                    <h1><a href="">SUPPORT</a></h1>
                    <a href="">help</a>
                    <a href="">rturns & exchanges</a>
                    <a href="">shipping</a>
                    <a href="">order tracker</a>
                    <a href="">store locator</a>
                    <a href="">size charts</a>
                    <a href="">gift card balance</a>
                    <a href="">how to clean</a>
                    <a href="">bra fit guide</a>
                    <a href="">promotions</a>
                </div>
                <div class="footer-item">
                    <h1><a href="">COMPANY INFO </a> </h1>
                    <a href="">about us</a>
                    <a href="">student discount</a>
                    <a href="">military & healthcare</a>
                    <a href="">discount</a>
                    <a href="">adidas storeis</a>
                    <a href="">adidas apps</a>
                    <a href="">sustainability</a>
                    <a href="">adiclub</a>
                    <a href="">affiliates</a>
                    <a href="">press</a>
                    <a href="">carees</a>
                    <a href="">california transparency</a>
                    <a href="">in supply chains act</a>
                    <a href="">transparency in</a>
                    <a href="">coverage</a>
                    <a href="">location selector</a>
                </div>
                <div class="footer-item">
                    <h1><a href="">FOLLOW US</a></h1>
                    <div class="social">
                        <i class="uil uil-facebook-f"></i>
                        <i class="uil uil-instagram"></i>
                        <i class="uil uil-twitter"></i>
                        <i class="fa-brands fa-tiktok"></i>
                        <i class="uil uil-youtube"></i>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyright">
            <div class="wapper">
                <div class="rules">
                    <span>Cookie Settings</span>
                    <span>Data settings</span>
                    <span>Do not sell my personal information</span>
                    <span>Privacy Policy</span>
                    <span>Terms and Conditions</span>
                </div>
                <div class="c-adidas">
                    <span>© 2024 adidas Maroc, Inc.</span>
                </div>
            </div>
        </section>
    </footer>















    <script src="https://kit.fontawesome.com/73713bf219.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.css') }}"></script>
</body>

</html>