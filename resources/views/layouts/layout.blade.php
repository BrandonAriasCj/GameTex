<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameTex</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ 'tienda' }}">TIENDA</a></li>
                <li><a href="{{ 'torneos' }}">TORNEOS</a></li>
            </ul>
            <a href="#"><img width="100px" src="https://img.freepik.com/vector-premium/moderno-creativo-aislado-esports-tournament-emblem-logo-vector-gaming-league-o-sports-team_126068-221.jpg"></a>
            @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Dashboard
                </a>
                @else
                <a
                    href="{{ route('login') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Perfil
                </a>

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                    Registro
                </a>
                @endif
                @endauth
            </nav>
            @endif
    </header>

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
</body>
</html>