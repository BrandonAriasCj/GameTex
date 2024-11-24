<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTex</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    @vite('resources/css/app.css')
    @vite(['resources/js/app.js'])

    <!-- component -->
    <header>
        <nav x-data="{ open: false }" class="flex h-auto w-auto bg-white shadow-lg rounded-lg justify-between md:h-16">
            <div class="flex w-full justify-between ">
                <div :class="open ? 'hidden':'flex'"
                    class="flex px-6 w-1/2 items-center font-semibold md:w-1/5 md:px-1 md:flex md:items-center md:justify-center"
                    x-transition:enter="transition ease-out duration-300">
                    <a href="{{ '/' }}"><img class="h-12" src="{{ asset('imagenes/logo.png') }}"></a>
                </div>
                    <div class="flex flex-col items-center justify-center gap-2 py-2">
                        @if (Route::has('login'))
                        @if (Auth::guard('users')->check())
                        <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Perfil
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Login
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Registro
                        </a>
                        @endif
                        @endif
                        @endif
                    </div>
                </div>
                <div class="hidden w-3/5 items-center justify-evenly font-semibold md:flex">
                    <a href="{{ '/' }}">Inicio</a>
                    <a href="{{ 'torneos' }}">Torneos</a>
                </div>
                <div class="hidden w-1/5 items-center justify-evenly font-semibold md:flex">
                    @if (Route::has('login'))
                    @if (Auth::guard('users')->check())
                    <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Perfil
                    </a>
                    @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Login
                    </a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                        Registro
                    </a>
                    @endif
                    @endif
                    @endif
                </div>
                <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white md:hidden" @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open, '-translate-y-1.5': !open}"></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open}"></span>
                        <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, 'translate-y-1.5': !open}"></span>
                    </div>
                </button>

            </div>
        </nav>
    </header>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    @yield('contenido')

</body>

</html>