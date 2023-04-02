<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>TechTek Store</title>
    </head>

    <body>

        <div class="header">
            <nav>
                <div class="container">
                    <div class="navbar">
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('dashboard') }}">
                                <x-application-logo
                                    class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                            </a>
                        </div>
                        <nav>
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">Product</a></li>
                                <li><a href="">Contact</a></li>
                                <li><a class="login" href="{{ route('login') }}">Log In</a></li>
                                <li><a class="login" href="{{ route('register') }}">Sign Up</a></li>

                            </ul>
                        </nav>
                        <img src="asset/cart.png" width="30px" height="30px">
                    </div>
                </div>
            </nav>
            <div class="row">
                <div class="col-2">
                    <h1>
                        Welcome To TechTek
                    </h1>
                    <p>
                        Tempat Belanja Alat dan Kebutuhan Elektronik
                    </p>
                    <a href="" class="btn">Lihat Selengkpanya &#8594</a>
                </div>
                <div class="col-2">
                    <img src="asset/gamers.png" width="900px">
                </div>
            </div>
        </div>
        <!--Kategori-->
        <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="asset/pc1.jpg">
                    </div>
                    <div class="col-3">
                        <img src="asset/pc2.jpg">
                    </div>
                    <div class="col-3">
                        <img src="asset/pc3.jpg">
                    </div>
                    <div class="col-3">
                        <img src="asset/pc1.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="small-container">
            <div class="title">
                <h2>Featured Products</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="asset/product-1.jpg">
                    <h4>PC Gaming Kelas S</h4>
                    <p>Rp. 25.000.000</p>
                </div>
                <div class="col-4">
                    <img src="asset/pc5.jpg">
                    <h4>Laptop Kelazzz</h4>
                    <p>Rp. 18.000.000</p>
                </div>
                <div class="col-4">
                    <img src="asset/pc7.jpg">
                    <h4>Mouse Gaming Cuy</h4>
                    <p>Rp. 900.000</p>
                </div>
                <div class="col-4">
                    <img src="asset/pc6.jpg">
                    <h4>VGA Kelas Kakap</h4>
                    <p>Rp. 10.000.000</p>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download Our App</h3>
                        <img src="asset/app-store.png">
                        <img src="asset/play-store.png">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, placeat?</p>
                    </div>
                    <div class="footer-col-2">
                        <img src="asset/LogoIcon.png" width="50px">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, alias?</p>
                    </div>
                    <div class="footer-col-3">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <Li>Youtube</Li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
</x-app-layout>
