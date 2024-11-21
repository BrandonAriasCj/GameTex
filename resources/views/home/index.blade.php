    @extends('layouts.layout')

    @section('contenido')
    <!-- component -->
    <html>
    <main>
        <section class="h-dvh w-dvw max-h-[80rem] relative">
            <div class="absolute inset-0 z-[1]">
                <img class="h-full w-full object-cover object-center" src="{{ asset('gifs/Fondo1.gif') }}" alt="">
            </div>
            <div class="max-w-[120rem] mx-auto h-full relative z-[2] px-6 md:px-8 lg:px-10">
                <div class="h-full w-full  flex flex-col relative space-y-6">
                    <div class="mt-auto mb-0 text-gray-50 md:pb-36 space-y-6">
                        <span class="font-light text-sm text-accent-500 ">GAMETEX</span>
                        <h1 class="text-3xl md:text-5xl max-w-[30rem] font-medium">EL ECOSISTEMA PARA LOS GAMERS</h1>
                        <p class="max-w-[30rem] font-light ml-4 before:content-[''] relative before:absolute before:w-px before:h-full before:left-0 before:top-0 before:-translate-x-4 before:bg-accent-500 md:text-base text-sm">
                            "¡Únete a la batalla y demuestra tu habilidad en nuestros emocionantes torneos de videojuegos! Donde los mejores gamers se enfrentan por la gloria y grandes premios."
                        </p>
                        <div class="md:flex-row flex-col flex gap-4">
                            <button class="inline-block text-base font-medium px-12 py-2 border border-accent-400 rounded-lg text-accent-400 cursor-pointer bg-gray-50/10 backdrop-blur-3xl">Mas de nosotros</button>
                        </div>
                    </div>
                    <div class="md:absolute md:right-0 md:bottom-32 text-gray-50 my-16">
                        <ul class="flex md:flex-col items-center justify-center gap-2">
                            <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                                <a href="" class="block h-full w-full p-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-current " viewBox="0 0 24 24">
                                        <g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M0 0h24v24H0z"></path>
                                            <path fill="currentColor" d="M18 2a1 1 0 0 1 .993.883L19 3v4a1 1 0 0 1-.883.993L18 8h-3v1h3a1 1 0 0 1 .991 1.131l-.02.112l-1 4a1 1 0 0 1-.858.75L17 15h-2v6a1 1 0 0 1-.883.993L14 22h-4a1 1 0 0 1-.993-.883L9 21v-6H7a1 1 0 0 1-.993-.883L6 14v-4a1 1 0 0 1 .883-.993L7 9h2V8a6 6 0 0 1 5.775-5.996L15 2z"></path>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50"><a href="" class="h-full w-full block p-1"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-full h-full fill-current ">
                                        <path d="M256.283 47.553c70.693 0 128 54.682 118 128.931-2.072 15.388-3.422 31.483-4.26 44.759 0 0 2.402 4.253 12.664 4.253 6.071 0 14.895-1.543 27.596-6.354 2.236-.847 4.377-1.241 6.377-1.241 7.918 0 13.615 5.931 14.123 12.271.426 5.31-4.564 11.199-8.371 13.009-13.766 6.542-46.991 10.063-46.991 32.638 0 22.576 22.362 46.656 40.862 63.713S480 360.602 480 360.602s.283 21.57-31.717 29.097c-32 7.524-32.1 5.712-33.25 13.796-2.133 14.979-1.535 21.378-11.248 21.378-1.672 0-3.651-.19-6.002-.558-8.23-1.291-19.239-3.644-31.121-3.644-11.216 0-23.21 2.097-34.379 9.161-23 14.549-41.283 34.114-76.283 34.114s-53-19.565-76-34.114c-11.17-7.065-23.162-9.161-34.379-9.161-11.88 0-22.892 2.353-31.121 3.644-2.352.367-4.33.558-6.002.558-9.71 0-9.115-6.399-11.248-21.378-1.151-8.084-1.25-6.27-33.25-13.795s-32-29.097-32-29.097 45.5-4.012 64-21.068c18.5-17.058 40.862-41.134 40.862-63.71 0-22.575-33.226-26.09-46.991-32.632-3.807-1.81-8.796-7.687-8.371-12.997.507-6.336 6.196-12.251 14.107-12.25 2.004 0 4.152.38 6.393 1.229 12.749 4.829 21.588 6.342 27.662 6.342 10.204 0 12.598-4.273 12.598-4.273-.837-13.275-2.187-29.371-4.259-44.759-10-74.249 47.307-128.931 118-128.931M256.283 32H256c-41.093 0-79.215 16.208-104.591 45.341-23.982 27.534-34.375 63.345-29.265 101.292 1.416 10.51 2.46 21.231 3.21 30.618-3.97-.559-9.686-1.998-17.703-5.034-3.965-1.502-8.017-2.295-12.043-2.295-15.641-.001-28.844 11.852-30.057 27.003-1.027 12.818 8.235 24.393 17.47 28.783 4.251 2.02 9.181 3.578 14.4 5.232 6.707 2.125 14.309 4.532 19.293 7.703 4.147 2.639 4.147 4.168 4.147 5.182 0 8.66-6.191 24.691-35.688 51.888-10.499 9.681-39.055 15.501-54.588 16.897l-14.572 1.311L16 360.603c0 1.679.312 10.546 6.485 20.319 5.246 8.306 16.073 19.283 37.863 24.407a1139.713 1139.713 0 0 0 15.208 3.454c2.306.512 4.555 1.01 6.454 1.453l.081.623c.9 7.004 1.611 12.535 4.392 17.75 2.453 4.6 8.574 12.316 22.015 12.316 2.478 0 5.249-.246 8.472-.751 1.672-.263 3.386-.554 5.2-.863 7.116-1.212 15.182-2.587 23.451-2.587 10.277 0 18.732 2.188 25.846 6.688 4.531 2.867 8.892 5.972 13.509 9.26C202.967 465.481 223.358 480 256 480c32.726 0 53.293-14.582 71.439-27.446 4.576-3.244 8.898-6.309 13.377-9.142 7.113-4.5 15.568-6.688 25.846-6.688 8.27 0 16.334 1.375 23.449 2.586 1.814.311 3.529.602 5.202.864 3.223.505 5.993.751 8.472.751 13.44 0 19.562-7.715 22.015-12.313 2.781-5.214 3.492-10.746 4.392-17.749l.082-.629c1.898-.441 4.148-.941 6.455-1.452 4.023-.892 9.029-2.001 15.206-3.454 21.851-5.139 32.611-16.17 37.79-24.518 6.098-9.828 6.296-18.736 6.273-20.422l-.189-14.501-14.398-1.278c-15.413-1.396-43.8-7.219-54.301-16.9-16.281-15.011-35.688-36.199-35.688-51.893 0-1.014 0-2.546 4.15-5.186 4.985-3.174 12.589-5.584 19.297-7.71 5.217-1.654 10.144-3.217 14.394-5.236 9.236-4.39 18.498-15.978 17.471-28.807-1.215-15.166-14.424-27.046-30.072-27.046-4.021 0-8.068.76-12.027 2.259-8.027 3.041-13.743 4.41-17.705 4.962.747-9.319 1.791-20.12 3.211-30.67 5.111-37.948-5.281-73.509-29.264-101.042C335.498 48.208 297.376 32 256.283 32z" fill="currentColor"></path>
                                        <path d="M256 229c-20.838 0-40.604-8.29-55.657-23.343a8 8 0 1 1 11.313-11.313C223.688 206.374 239.436 213 256 213c16.387 0 32.15-6.64 44.385-18.698a8 8 0 0 1 11.23 11.395C296.368 220.725 276.617 229 256 229z" fill="currentColor"></path>
                                        <ellipse cx="208" cy="152" rx="16" ry="24" fill="currentColor"></ellipse>
                                        <ellipse cx="304" cy="152" rx="16" ry="24" fill="currentColor"></ellipse>
                                    </svg></a></li>
                            <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50 p-1"><svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full fill-none stroke-current " viewBox="0 0 24 24" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="none"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" fill="none"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" fill="none"></line>
                                </svg></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-blue-900 text-white py-16 px-8 border p-0">
            <div class="container mx-auto px-0 py-0">
                <!-- Subtítulo de la sección -->
                <h2 class="py-0 lg:px-20 md:px-10 px-5 lg:mx-0 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
                    Eventos
                </h2>
                <section class="text-gray-400 bg-gray-900 body-font">
                    <div class="flex flex-wrap justify-center px-5 py-5 mx-auto space-x-0 sm:space-x-4 md:space-x-10">
                        <!-- Evento 1 -->
                        <div class="px-0 py-4 md:w-1/3 sm:mb-0 mb-6 group relative w-full sm:w-1/2 lg:w-1/3">
                            <div class="rounded-lg h-80 overflow-hidden relative">
                                <!-- Imagen con efecto hover -->
                                <img alt="content" class="object-cover object-center h-full w-full transition duration-300 ease-in-out group-hover:brightness-50" src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2117/bd406f42e9352fdb398efcf21a4ffe575b2306ac40089d21.png">
                                <!-- Texto visible al hacer hover -->
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    Completa misiones épicas rápidamente para ganar Wukong. Los primeros 100 finalistas recibirán Cartas de Regalo de Steam.
                                </p>
                            </div>
                            <!-- Título del evento -->
                            <h3 class="text-xl font-medium title-font text-white mt-5">Desafío del Guerrero Legendario</h3>
                            <button class="mt-3 text-indigo-500">Participar</button>
                        </div>

                        <!-- Evento 2 -->
                        <div class="px-0 py-4 md:w-1/3 sm:mb-0 mb-6 group relative w-full sm:w-1/2 lg:w-1/4">
                            <div class="rounded-lg h-80 overflow-hidden relative">
                                <!-- Imagen con efecto hover -->
                                <img alt="content" class="object-cover object-center h-full w-full transition duration-300 ease-in-out group-hover:brightness-50" src="https://preview.redd.it/8m9tv6m3ouq81.jpg?auto=webp&s=0f99cb2b9bd28d93667453c0806a5dd75f888c1e">
                                <!-- Texto visible al hacer hover -->
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    Ganá torneos de Left4Dead2 y Counter Strike. Las mejores estrategias ganan premios en cartas de regalo de Steam.
                                </p>
                            </div>
                            <!-- Título del evento -->
                            <h3 class="text-xl font-medium title-font text-white mt-5">Concurso de Creadores de Estrategias</h3>
                            <button class="mt-3 text-indigo-500">Participar</button>
                        </div>

                        <!-- Evento 3 -->
                        <div class="px-0 py-4 md:w-1/3 sm:mb-0 mb-6 group relative w-full sm:w-1/2 lg:w-1/3">
                            <div class="rounded-lg h-80 overflow-hidden relative">
                                <!-- Imagen con efecto hover -->
                                <img alt="content" class="object-cover object-center h-full w-full transition duration-300 ease-in-out group-hover:brightness-50" src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2216/cbb03393f0ab1149f2b89a8194ce19e596a24fa5bec6526a.png">
                                <!-- Texto visible al hacer hover -->
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out">
                                    Participa en torneos de DragonBall Fighters y llevate el juego de Sparking Zero.
                                </p>
                            </div>
                            <!-- Título del evento -->
                            <h3 class="text-xl font-medium title-font text-white mt-5">Torneo del Fin de Semana Épico</h3>
                            <button class="mt-3 text-indigo-500">Participar</button>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="bg-blue-900 text-white py-16 px-8 border p-4">
            <!-- component -->
            <div class="flex flex-col bg-white m-auto p-auto overflow-x-auto max-w-full h-50%">
                <h2 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-0 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
                    Torneos
                </h2>
                <div class="flex overflow-x-scroll pb-10 hide-scroll-bar">
                    <div class="flex flex-nowrap lg:ml-10 md:ml-20 ml-10 mr-10">
                        <!-- Imagen 1 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/550/capsule_616x353.jpg?t=1729702523" alt="Imagen 1">
                            </a>
                        </div>
                        <!-- Imagen 2 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://i.3djuegos.com/juegos/19026/counterstrike_2/fotos/ficha/counterstrike_2-5835305.webp">
                            </a>
                        </div>
                        <!-- Imagen 3 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://cdn1.epicgames.com/offer/24b9b5e323bc40eea252a10cdd3b2f10/EGS_LeagueofLegends_RiotGames_S2_1200x1600-905a96cea329205358868f5871393042">
                        </div>
                        <!-- Imagen 4 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://media.vandal.net/m/78025/call-of-duty-mobile-2019102104887_1.jpg">
                            </a>
                        </div>
                        <!-- Imagen 5 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://supercell.com/images/e93a34598d3723641a72eb9ce02691f6/790/games_thumbnail_brawlstars.5cd76330.webp">
                            </a>
                        </div>
                        <!-- Imagen 6 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://yt3.googleusercontent.com/ytc/AIdro_m0DtuBhZUI1Mie9JUspzzqediBM76hO49vWA8hM5hwu9s=s900-c-k-c0x00ffffff-no-rj">
                            </a>
                        </div>
                        <!-- Imagen 7 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://image.api.playstation.com/cdn/UP0700/CUSA09072_00/2eBPISxxvTv5foYSDlqiBJfmRj5LZxv3.png">
                            </a>
                        </div>
                        <!-- Imagen 8 -->
                        <div class="inline-block px-3">
                            <a href="#">
                                <img
                                    class="w-30 h-64 max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                                    src="https://image.api.playstation.com/vulcan/ap/rnd/202312/0123/978efa66c9645e4692ac7036a31aa002a49d0efb4b88b45c.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-blue-900 text-white py-16 px-8 border p-4">
            <div class="flex justify-center items-center">
                <div class="max-w-7xl mx-auto px-4">
                    <h3 class="text-center text-2xl font-semibold mb-6">RANKING SEMANAL</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center items-center text-center">
                        <!-- Card 1 -->
                        <div class="relative flex flex-col mt-6 text-black bg-plata shadow-md bg-clip-border rounded-xl">
                            <div
                                class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                <img
                                    class="object-cover w-full h-full"
                                    src="https://i.pinimg.com/originals/22/b9/39/22b939e9dbefd23f513f189de558da24.gif"
                                    alt="card-image" />
                            </div>
                            <div class="p-6">
                                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-black text-center">
                                    CHICHARRON
                                </h5>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    510 XP obtenidos 10/23 - 09/24
                                </p>
                                <!-- Flex container for image and text -->
                                <div class="flex items-center gap-2 mt-2 justify-center">
                                    <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png" alt="gift">
                                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">+10 ganados</p>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="relative flex flex-col mt-6 text-black bg-oro shadow-md bg-clip-border rounded-xl">
                            <div
                                class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                <img
                                    class="object-cover w-full h-full"
                                    src="https://media.tenor.com/xhC6NZETIzMAAAAM/simon-ghost-riley.gif"
                                    alt="card-image" />
                            </div>
                            <div class="p-6">
                                <h3 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-black">
                                    TIREN PARO
                                </h3>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    910 XP obtenidos 09/23 - 09/24
                                </p>
                                <div class="flex items-center gap-2 mt-2 justify-center">
                                    <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png">
                                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">+10 ganados</p>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="relative flex flex-col mt-6 text-black bg-bronce shadow-md bg-clip-border rounded-xl">
                            <div
                                class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                                <img
                                    class="object-cover w-full h-full"
                                    src="https://i.pinimg.com/originals/8b/a4/8d/8ba48db13ca10021f9d14aa91a0d8cb1.gif"
                                    alt="card-image" />
                            </div>
                            <div class="p-6 text-center">
                                <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-black">
                                    SINAY
                                </h5>
                                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                                    750 XP obtenidos 12/23 - 09/24
                                </p>
                                <div class="flex items-center gap-2 mt-2 justify-center">
                                    <img width="40px" src="https://png.pngtree.com/png-vector/20240716/ourmid/pngtree-neon-gift-box-tight-up-with-ribbons-png-image_13124787.png">
                                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">+10 ganados</p>
                                </div>
                            </div>
                            <div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-blue-900 text-white py-16 px-8 border p-4">
            <!-- component -->
            <h2 class="text-center text-2xl font-semibold mb-6">NOTICIAS</h2>
            <div class="relative lg:pt-2">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">
                    <article class="bg-white p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:pb-14 hover:shadow-2xl rounded-2xl cursor-pointer border">
                        <a target="_self" href="/blog/slug" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="/blog/slug" target="_self" rel="noopener noreferrer">
                                Read article
                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                            <div class="flex items-center">
                                <div class="pr-3">
                                    <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                </div>
                                <div class="flex flex-1">
                                    <div class="">
                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    2 Days ago
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botones que aparecerán al pasar el mouse -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                    </article>
                    <article class="bg-white p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:pb-14 hover:shadow-2xl rounded-2xl cursor-pointer border">
                        <a target="_self" href="/blog/slug" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="/blog/slug" target="_self" rel="noopener noreferrer">
                                Read article
                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                            <div class="flex items-center">
                                <div class="pr-3">
                                    <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                </div>
                                <div class="flex flex-1">
                                    <div class="">
                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    2 Days ago
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botones que aparecerán al pasar el mouse -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                        </div>
                    </article>
                    <article class="bg-white p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:pb-14 hover:shadow-2xl rounded-2xl cursor-pointer border">
                        <a target="_self" href="/blog/slug" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="/blog/slug" target="_self" rel="noopener noreferrer">
                                Read article
                                <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="flex justify-between items-center w-full pb-4 mb-auto">
                            <div class="flex items-center">
                                <div class="pr-3">
                                    <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                </div>
                                <div class="flex flex-1">
                                    <div class="">
                                        <p class="text-sm font-semibold ">Morris Muthigani</p>
                                        <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    2 Days ago
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botones que aparecerán al pasar el mouse -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>
                            <button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                        </div>
                    </article>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
    </main>
    @endsection