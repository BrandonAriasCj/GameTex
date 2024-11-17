@extends('layouts.layout')

@section('contenido')
@vite(['resources/js/app.js'])
<main>
    <section>
        <ul>
            <li><a href="#">ACCION</a></li>
            <li><a href="#">TERROR</a></li>
            <li><a href="#">SUPERVIVENCIA</a></li>
            <li><a href="#">ROL</a></li>
            <li><a href="#">PELEAS</a></li>
            <li><a href="#">SIMULACION</a></li>
            <li><a href="#">DEPORTES</a></li>
            <li><a href="#">CARRERAS</a></li>
            <li><a href="#">PLATAFORMAS</a></li>
        </ul>
    </section>
    <section>

    </section>
    <section>
        <div>
            <img height="160px" src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/YMUoJUYNX0xWk6eTKuZLr5Iw.jpg">
            <img height="160px" src="https://www.dodmagazine.es/wp-content/uploads/2022/11/god-of-war-ragnarok-banda-sonora.jpg">
            <img height="160px" src="https://www.nerdpool.it/wp-content/uploads/2020/05/fallout-76-free-to-play-485x360.jpg">
        </div>
    </section>
    <section>
        <div>
            <div>
                <img height="140px" src="https://image.api.playstation.com/cdn/UP0700/CUSA05972_00/4yfeeKKfJdD5WzDQsoiM3xrcqPlpDLm7.png">
                <h3>TEKKEN 7</h3>
                <p>Descrubre Tekken 7!. La lucha definitiva para los videojuegos de combate.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://blizzstoreperu.com/cdn/shop/products/Cyberpunk-2077_900x.jpg?v=1630904589">
                <h3>CyberPunk 2077</h3>
                <p>Un juego futurista con temática cyberpunk, donde exploras un vasto mundo abierto lleno de misiones y combates.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRctoQbmlT8BLMbO9TBg7lhpxPCE1fdpi6iUA&s">
                <h3>Stardew Valley</h3>
                <p>Un relajante juego de simulación donde gestionas una granja, cultivas, crías animales y construyes relaciones en la comunidad.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
        </div>
        <div>
            <div>
                <img height="140px" src="https://ir.ozone.ru/s3/multimedia-e/c1000/6684841226.jpg">
                <h3>DOOM Eternal</h3>
                <p>Un frenético shooter en primera persona en el que te enfrentas a oleadas de demonios en combates rápidos y brutales.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://assets.nintendo.com/image/upload/f_auto/q_auto/dpr_1.5/c_scale,w_400/ncom/software/switch/70010000036098/desc/fba63c09f4dd41c841f23474840c8f5fe4d5378aae37a94ff39adfffa7ef0c11">
                <h3>Among us</h3>
                <p>Un juego de deducción social donde los jugadores deben descubrir al impostor dentro del grupo antes de que cause estragos.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgcn8AdM2Ie-C_P0bo80wpJS8JfDIIk4JvWqjVNflsFh2rk7YEt_-RbKbW7_ZP-e5sk9U&usqp=CAU">
                <h3>The Forest</h3>
                <p>Juego de supervivencia en un entorno selvático donde debes enfrentarte a peligrosos enemigos y construir para sobrevivir.</p>
                <!-- Botón para Abrir el Modal -->
                <button
                    onclick="openModalEventos()"
                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-4">
                    Ver juego
                </button>

                <!-- Incluir el modal -->
                @include('componentes.AmongUs')
            </div>
        </div>
        <div>
            <div>
                <img height="140px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Rocket_League_coverart.jpg/250px-Rocket_League_coverart.jpg">
                <h3>Rocket League</h3>
                <p>Un juego multijugador que mezcla fútbol con vehículos propulsados por cohetes, lleno de acción y emoción.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://blizzstoreperu.com/cdn/shop/products/DarkSoulsIII.jpg?v=1630904551">
                <h3>Dark Souls III</h3>
                <p>Un desafiante juego de rol de acción ambientado en un mundo oscuro y sombrío, famoso por su elevada dificultad.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
            <div>
                <img height="140px" src="https://cdn1.epicgames.com/min/offer/1200x1600-1200x1600-e92fa6b99bb20c9edee19c361b8853b9.jpg">
                <h3>Hades</h3>
                <p>Un juego de acción y rol donde controlas a Zagreus, el hijo de Hades, intentando escapar del inframundo a través de.</p>
                <button>
                    <a href="#">Comprar</a>
                </button>
            </div>
        </div>
    </section>
</main>
@endsection