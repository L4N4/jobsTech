<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <header class="header">

        <div class="">

            <nav id="header" class="fixed bg-gray-100 text-green-800 w-full z-20 top-0">
                <div id="progress" class="h-1 z-40 top-0"
                    style="background:linear-gradient(to right, #FFC100 var(--scroll), );"></div>
                <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-right justify-between mt-0 py-3">
                    <!-- Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('images/logo.png') }}" class="h-16"></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->
                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle"
                            class="flex items-center px-3 py-2 text-gray-600 border-gray-600 focus:outline-none">
                            <svg fill="text-gray-600" viewBox="0 0 20 20" class="w-6 h-6 fill-current">
                                <title>Menu</title>
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex-grow p-4 lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-transparent md:bg-transparent z-20"
                        id="nav-content">
                        <ul class="list-reset lg:flex justify-end flex-1 items-center">

                            <li class="mr-3">
                                <a class="border-b-0 md:border-b-4 border-green-500 inline-block py-2 px-4 text-green-500 font-bold"
                                    href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4"
                                    href="#">Contacto</a>
                            </li>
                            @auth
                                <li class="mr-3">
                                    <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4"
                                        href="{{ url('dashboard') }}">Dashboard</a>
                                </li>
                            @else
                                <li class="mr-3">
                                    <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4"
                                        href="{{ url('login') }}">Login</a>
                                </li>
                                <li class="mr-3">
                                    <a class="inline-block hover:text-green-500 hover:text-underline py-2 px-4"
                                        href="{{ url('register') }}">Registro</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

        <main>
            <div class="h-24"></div>
            <div>
                @yield('content')
            </div>
        </main>

        <footer class="w-full font-bold text-white">
            <div class="md:flex justify-around items-center bg-gray-600 px-10">
                <div class="pt-4">
                    <img src="{{ asset('images/logo.png') }}" class="h-16">
                </div>
                <div class="pt-4 flex space-x-10">
                    <br>
                    <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                    <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                    <span><a href="#"><i class="fa fa-linkedin"></i></a></span>
                </div>
                <!-- Footer Widget End -->

                <!-- Footer Widget Start -->
                <ul class="mt-4 pb-4 ml-8 md:list-disc">
                    <li><a href="#">Lista de empleos</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">Registro</a></li>
                </ul>
                <!-- Footer Widget End -->

            </div>
            <!-- Footer Top Section End -->

            <!-- Footer Bottom Section Start -->
            <div class="bg-gray-400">
                <div class="h-8">
                    <p class="text-center">&copy; 2021 <a href="#">Natalia Lugo</a> Todos los derechos reservados.</p>
                </div>
            </div>
            <!-- Footer Bottom Section End -->
        </footer>


        <script>
            var h = document.documentElement,
                b = document.body,
                st = 'scrollTop',
                sh = 'scrollHeight',
                progress = document.querySelector('#progress'),
                scroll;
            var scrollpos = window.scrollY;
            var header = document.getElementById("header");
            var navcontent = document.getElementById("nav-content");

            // document.addEventListener('scroll', function() {
            //     scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            //     progress.style.setProperty('--scroll', scroll + '%');
            //     scrollpos = window.scrollY;

            //     if (scrollpos > 10) {
            //         header.classList.add("bg-gray-100");
            //         navcontent.classList.remove("bg-gray-100");
            //         navcontent.classList.add("bg-gray-100");
            //     } else {
            //         header.classList.remove("bg-gray-100");
            //         navcontent.classList.remove("bg-gray-100");
            //         navcontent.classList.add("bg-gray-100");

            //     }

            // });

            document.getElementById('nav-toggle').onclick = function() {
                document.getElementById("nav-content").classList.toggle("hidden");
            }

        </script>
    </body>

    </html>
