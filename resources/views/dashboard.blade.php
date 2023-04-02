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
                            </ul>
                        </nav>
                        <img src="asset/cart.png" width="30px" height="30px">
                        <!-- Primary Navigation Menu -->
                        <div class="max-w-7xl mx-auto px-4 sm:px-3 lg:px-4">
                            <div class="flex justify-between h-16">
                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ml-3">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ml-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>
                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                                <!-- Hamburger -->
                                <div class="-mr-2 flex items-center sm:hidden">
                                    <button @click="open = ! open"
                                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 6h16M4 12h16M4 18h16" />
                                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Responsive Navigation Menu -->
                        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                            <div class="pt-2 pb-3 space-y-1">
                                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                                </x-responsive-nav-link>
                            </div>

                            <!-- Responsive Settings Options -->
                            <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
                                <div class="px-4">
                                    <div class="font-medium text-base text-gray-800 dark:text-gray-200">
                                        {{ Auth::user()->name }}</div>
                                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>

                                <div class="mt-3 space-y-1">
                                    <x-responsive-nav-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-responsive-nav-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                            </div>
                        </div>

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
