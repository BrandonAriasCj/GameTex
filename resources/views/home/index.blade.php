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
                                <a href="https://x.com/GAMETEX2024" class="block h-full w-full p-1" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                                <a href="https://discord.gg/eTHuf32W" class="block h-full w-full p-1" target="_blank">
                                    <i class="fab fa-discord"></i>
                                </a>
                            </li>

                            <li class="h-6 w-6 block rounded-full bg-accent-400 text-gray-50">
                                <a href="https://www.youtube.com/@GAMETEX2024" class="block h-full w-full p-1" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </section>
        <section class="bg-blue-900 text-white py-14 px-8 border p-0">
            <div class="container mx-auto px-0 py-0">
                <!-- Subtítulo de la sección -->
                <h2 class="lg:px-20 md:px-10 px-5 lg:mx-0 md:mx-20 mx-5 font-bold text-4xl text-white text-center pb-5">
                    EVENTOS
                </h2>
                <section class="text-gray-400 bg-gray-900 body-font">
                    <div class="flex flex-wrap justify-center px-5 py-5 mx-auto space-x-0 sm:space-x-4 md:space-x-10">
                        <!-- Evento 1 -->
                        <div class="px-0 py-4 md:w-1/3 sm:mb-0 mb-6 group relative w-full sm:w-1/2 lg:w-1/3">
                            <div class="rounded-lg h-80 overflow-hidden relative">
                                <!-- Imagen con efecto hover -->
                                <img alt="content" class="object-cover object-center h-full w-full transition duration-300 ease-in-out group-hover:brightness-50" src="https://image.api.playstation.com/vulcan/ap/rnd/202405/2117/bd406f42e9352fdb398efcf21a4ffe575b2306ac40089d21.png">
                                <!-- Texto visible al hacer hover -->
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-5">
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
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-5">
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
                                <p class="absolute inset-0 flex items-center justify-center text-white text-lg font-semibold opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-5">
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

        <section class="bg-blue-900 text-white spx-8 border p-4 pb-20">
            <!-- component -->
            <div class="flex flex-col m-auto p-auto overflow-x-auto max-w-full">
                <h2 class="lg:px-20 md:px-10 px-5 lg:mx-0 md:mx-20 mx-5 font-bold text-4xl text-white text-center pt-8">
                    TORNEOS
                </h2>
                <div class="flex overflow-x-scroll py-8 hide-scroll-bar">
                    <div class="flex flex-nowrap lg:ml-10 my-8 md:ml-20 ml-10 mr-10">
                        <!-- Imagen 1 - Left 4 Dead 2 -->
                        <div class="inline-block px-3 h-[110%]" data-juego="Left 4 Dead 2">
                            <img
                                class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-green-500 transform hover:scale-110 cursor-pointer"
                                src="https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/550/capsule_616x353.jpg?t=1729702523"
                                alt="Imagen 1">
                        </div>

                        <!-- Imagen 2 - Counter Strike 2 -->
                        <div class="inline-block px-3 h-[110%]" data-juego="Counter Strike 2">
                            <img
                                class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-red-500 transform hover:scale-110 cursor-pointer"
                                src="https://i.3djuegos.com/juegos/19026/counterstrike_2/fotos/ficha/counterstrike_2-5835305.webp">
                        </div>

                        <!-- Imagen 3 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-blue-500 transform hover:scale-110"
                                    src="https://cdn1.epicgames.com/offer/24b9b5e323bc40eea252a10cdd3b2f10/EGS_LeagueofLegends_RiotGames_S2_1200x1600-905a96cea329205358868f5871393042">
                            </a>
                        </div>
                        <!-- Imagen 4 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-yellow-500 transform hover:scale-110"
                                    src="https://media.vandal.net/m/78025/call-of-duty-mobile-2019102104887_1.jpg">
                            </a>
                        </div>
                        <!-- Imagen 5 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-purple-500 transform hover:scale-110"
                                    src="https://supercell.com/images/e93a34598d3723641a72eb9ce02691f6/790/games_thumbnail_brawlstars.5cd76330.webp">
                            </a>
                        </div>
                        <!-- Imagen 6 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-orange-500 transform hover:scale-110"
                                    src="https://yt3.googleusercontent.com/ytc/AIdro_m0DtuBhZUI1Mie9JUspzzqediBM76hO49vWA8hM5hwu9s=s900-c-k-c0x00ffffff-no-rj">
                            </a>
                        </div>
                        <!-- Imagen 7 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-yellow-500 transform hover:scale-110"
                                    src="https://image.api.playstation.com/cdn/UP0700/CUSA09072_00/2eBPISxxvTv5foYSDlqiBJfmRj5LZxv3.png">
                            </a>
                        </div>
                        <!-- Imagen 8 -->
                        <div class="inline-block px-3 h-[110%]">
                            <a href="#">
                                <img
                                    class="w-30 h-[100%] max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-transform duration-300 ease-in-out border-4 border-teal-500 transform hover:scale-110"
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
                            <!--<div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>-->
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
                                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">+20 ganados</p>
                                </div>
                            </div>
                            <!--<div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>-->
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
                                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">+5 ganados</p>
                                </div>
                            </div>
                            <!--<div class="p-6 pt-0">
                                <button
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                    type="button">
                                    Ver perfil
                                </button>
                            </div>-->
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
                        <a id="article-link" target="_self" href="{{ 'articulo1' }}" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-blue-300 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="{{ 'articulo1' }}" target="_self" rel="noopener noreferrer">
                                Leer articulo
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
                                        <p class="text-sm font-semibold ">Carlos Asparrin</p>
                                        <p class="text-sm text-gray-500">Publicado el 21/11/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    Hace 2 días
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botón de compartir -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <!--<button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>-->
                            <button id="share-button" type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                        </div>
                    </article>

                    <article class="bg-white p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:pb-14 hover:shadow-2xl rounded-2xl cursor-pointer border">
                        <a id="article-link" target="_self" href="{{ 'articulo1' }}" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-blue-300 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="{{ 'articulo1' }}" target="_self" rel="noopener noreferrer">
                                Leer articulo
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
                                        <p class="text-sm font-semibold ">Carlos Asparrin</p>
                                        <p class="text-sm text-gray-500">Publicado el 21/11/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    Hace 2 días
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botón de compartir -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <!--<button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>-->
                            <button id="share-button" type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                        </div>
                    </article>
                    
                    <article class="bg-white p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:pb-14 hover:shadow-2xl rounded-2xl cursor-pointer border">
                        <a id="article-link" target="_self" href="{{ 'articulo1' }}" class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                        <div class="relative mb-4 rounded-2xl">
                            <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                            <a class="flex justify-center items-center bg-blue-300 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100" href="{{ 'articulo1' }}" target="_self" rel="noopener noreferrer">
                                Leer articulo
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
                                        <p class="text-sm font-semibold ">Carlos Asparrin</p>
                                        <p class="text-sm text-gray-500">Publicado el 21/11/2024</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <div class="text-sm flex items-center text-gray-500 ">
                                    Hace 2 días
                                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- Botón de compartir -->
                        <div class="absolute bottom-0 left-0 right-0 p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex justify-between items-center">
                            <!--<button type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.25c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 0 1 2.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 0 0 .322-1.672V2.75a.75.75 0 0 1 .75-.75 2.25 2.25 0 0 1 2.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282m0 0h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 0 1-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 0 0-1.423-.23H5.904m10.598-9.75H14.25M5.904 18.5c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 0 1-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 9.953 4.167 9.5 5 9.5h1.053c.472 0 .745.556.5.96a8.958 8.958 0 0 0-1.302 4.665c0 1.194.232 2.333.654 3.375Z" />
                                    </svg>
                                </span>
                                <span class="">Like</span>
                            </button>-->
                            <button id="share-button" type="button" class="inline-flex items-center gap-x-2 rounded-md bg-transparent px-3.5 py-2.5 text-sm font-semibold text-gray-400 shadow-sm hover:bg-gray-400 hover:text-white">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 4.5a3 3 0 1 1 .825 2.066l-8.421 4.679a3.002 3.002 0 0 1 0 1.51l8.421 4.679a3 3 0 1 1-.729 1.31l-8.421-4.678a3 3 0 1 1 0-4.132l8.421-4.679a3 3 0 0 1-.096-.755Z" />
                                    </svg>
                                </span>
                                <span class="">Share</span>
                            </button>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>
    @endsection