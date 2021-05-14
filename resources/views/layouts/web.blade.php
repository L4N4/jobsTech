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
        <div class="px-6 py-2 w-full text-gray-900">
            <div class="flex justify-between items-center">

                <!-- Header Logo Start -->
                <!-- <div class="col"> -->
                <div>
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" class="h-16">
                    </a>
                </div>
                <!-- </div> -->
                <!-- Header Logo End -->

                <!-- Offcanvas Toggle Start -->
                <div class="text-3xl">&equiv;</div>
                <!-- Offcanvas Toggle End -->

                <!-- Header Links Start -->
                <!-- <div class="header-links col-auto order-lg-3">
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#login">Login</a>
                    <span>or</span>
                    <a href="#" data-toggle="modal" data-target="#loginSignupModal" data-target-sub="#signup">Sign up</a>
                </div> -->
                <!-- Header Links End -->

                <!-- Header Menu Start -->
                <!-- <nav id="main-menu" class="text-gray-800 main-menu col-lg-auto order-lg-2">
                    <ul>
                        <li class="has-children"><a href="{{ route('home') }}">Home</a>
                        </li> -->
                <!-- <li><a href="company-list.html">Company</a>
                            <ul class="sub-menu">
                                <li><a href="company-list.html">Company List</a></li>
                                <li><a href="company-single.html">Company Single</a></li>
                                <li><a href="create-job.html">Create Job</a></li>
                            </ul>
                        </li> -->
                <!-- <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQ'S</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li> -->
                <!-- <li><a href="">Contact us</a></li>
                        @auth
                        <li><a href="{{ url('dashboard') }}">
                                Dashboard
                            </a></li>
                        @else
                        <li> <a href="{{ url('login') }}">
                                Login
                            </a></li>
                        <li> <a href="{{ url('register') }}">
                                Register
                            </a></li>
                        @endif
                    </ul>

                </nav> -->
                <!-- Header Menu End -->

            </div>

        </div>
    </header>

    <main>
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

</body>

</html>