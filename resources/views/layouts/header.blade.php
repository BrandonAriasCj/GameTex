<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTex</title>
</head>

<body class="bg-gray-100">
    <header>
        <nav>
            <ul>
                <li><a href="#">TIENDA</a></li>
                <li><a href="#">TORNEOS</a></li>
            </ul>
            <a href="#"><img width="100px" src="https://img.freepik.com/vector-premium/moderno-creativo-aislado-esports-tournament-emblem-logo-vector-gaming-league-o-sports-team_126068-221.jpg"></a>
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
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
                    Iniciar sección
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Registrarse
                </a>
                @endif
                @endauth
            </nav>
            @endif
    </header>
    @yield('administrador')
