<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTex</title>
</head>

<body>
    <header class="bg-primary text-white py-4 shadow-md fixed top-0 left-0 w-full p-4 z-50">
        <nav class="container mx-auto flex justify-between items-center">
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
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Dashboard
                </a>
                @endauth
                @guest
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Log in
                </a>

               
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Register
                </a>
                @endguest
                
            </nav>
            @endif
    </header>

    

<!-- <header >
  <div class="container mx-auto flex justify-between items-center">
    <h1 class="text-2xl font-bold">Mi Sitio Web</h1>
    <nav class="space-x-4">
      <a href="#" class="text-red hover:text-gray-200">Inicio</a>
      <a href="#" class="text-white hover:text-gray-200">Servicios</a>
      <a href="#" class="text-white hover:text-gray-200">Contacto</a>
    </nav>
  </div>
</header> -->
