<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTex</title>
</head>

<body>
    @vite('resources/css/app.css')
    <!-- component -->
    <header>
        <nav x-data="{ open: false }" class="flex h-auto w-auto bg-white shadow-lg rounded-lg justify-between md:h-16">
            <div class="flex w-full justify-between ">
                <div :class="open ? 'hidden':'flex'"
                    class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
                    x-transition:enter="transition ease-out duration-300">
                    <a href="{{ '/' }}"><img class="h-12" src="{{ asset('imagenes/logo.png') }}"></a>
                </div>

                <div
                    x-show="open" x-transition:enter="transition ease-in-out duration-300"
                    class="flex flex-col w-full h-auto md:hidden">
                    <div class="flex flex-col items-center justify-center gap-2 py-4">
                        <a href="{{ '/' }}">Inicio</a>
                        <a href="#">Torneos</a>
                        <a href="{{ 'tienda' }}">Tienda</a>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-2 py-2">
                        @if (Route::has('login'))
                        @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Perfil
                        </a>
                        @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Login
                        </a>
                        @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Registro
                        </a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </div>
                <div class="hidden w-3/5 items-center justify-evenly font-semibold md:flex">
                    <a href="{{ '/' }}">Inicio</a>
                    <a href="#">Torneos</a>
                    <a href="{{ 'tienda' }}">Tienda</a>
                </div>
                <div class="hidden w-1/5 items-center justify-evenly font-semibold md:flex">
                    @if (Route::has('login'))
                    @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Perfil
                    </a>
                    @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Login
                    </a>

                    @if (Route::has('register'))
                    <a
                        href="{{ route('register') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Registro
                    </a>
                    @endif
                    @endauth
                    @endif
                </div>
                <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white
                          md:hidden
                        " @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2   transform  -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current   transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
                        <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform  transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
                    </div>
                </button>
            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @yield('contenido')

    <footer>
        <div>
            <h3>ACERCA</h3>
            <ul>
                <li><a href="{{ 'f_nosotros' }}">Nosotros</a></li>
                <li><a href="#">Medios de Pago</a></li>
                <li><a href="{{ 'f_tienda' }}">Tienda</a></li>
                <li><a href="{{ 'f_torneos' }}">Torneos</a></li>
                <li><a href="{{ 'f_eventos' }}">Eventos</a></li>
                <li><a href="{{ 'f_categorias' }}">Categorías</a></li>
            </ul>
        </div>
        <div>
            <h3>TÉRMINOS</h3>
            <ul>
                <li><a href="{{ 'f_poli_privacidad' }}">Políticas de Privacidad</a></li>
                <li><a href="{{ 'f_termin_condiciones' }}">Terminos y Condiciones</a></li>
                <li><a href="{{ 'f_poli_reembolsos' }}">Política de Reembolsos</a></li>
                <li><a href="{{ 'f_poli_cookies' }}">Política de Cookies</a></li>
            </ul>
        </div>
        <div>
            <h3>SÍGUENOS</h3>
            <a href="#"><img width="50px" src="https://cdn-icons-png.flaticon.com/512/60/60580.png"></a>
            <a href="#"><img width="50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1vD1f6LCHjLfVrK0OhOrqG6yJOpv8HtAGZg&s"></a>
            <a href="#"><img width="50px" src="https://i.pinimg.com/1200x/6d/0a/e6/6d0ae64489762fcf1c31ed88bdd852a3.jpg"></a>
            <a href="#"><img width="50px" src="https://thumbs.dreamstime.com/b/icono-del-logotipo-de-youtube-en-blanco-y-negro-cuadrado-alta-resoluci%C3%B3n-archivo-pasos-vectoriales-tambi%C3%A9n-disponible-para-189206686.jpg"></a>
            <a href="#"><img width="50px" src="https://img.freepik.com/vector-premium/ilustracion-icono-twitch-logotipo-aplicacion-twitch-icono-redes-sociales_561158-3633.jpg"></a>
            <a href="#"><img width="50px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_aCvIriPAhgz0qsDIFR6S1ishGxqzhK3eNw&s"></a>
        </div>
        <div>
            <div>
                <img width="100px" src="https://cdn-icons-png.flaticon.com/512/1175/1175149.png">
                <a href="#">Necesitas ayuda?</a>
            </div>
        </div>
    </footer>

    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <footer class="relative bg-blueGray-200 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-twitter"></i></button><button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-facebook-square"></i></button><button class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-dribbble"></i></button><button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/presentation?ref=njs-profile">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://blog.creative-tim.com?ref=njs-profile">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.github.com/creativetimofficial?ref=njs-profile">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://www.creative-tim.com/bootstrap-themes/free?ref=njs-profile">Free Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/creativetimofficial/notus-js/blob/main/LICENSE.md?ref=njs-profile">MIT License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/terms?ref=njs-profile">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/privacy?ref=njs-profile">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://creative-tim.com/contact-us?ref=njs-profile">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright © <span id="get-current-year">2021</span><a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank"> Notus JS by
                            <a href="https://www.creative-tim.com?ref=njs-profile" class="text-blueGray-500 hover:text-blueGray-800">Creative Tim</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>