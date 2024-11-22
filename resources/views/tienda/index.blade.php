@extends('layouts.layout')

@section('contenido')

<main>
    <h1 class="flex py-5 lg:px-20 md:px-10 px-5 lg:mx-0 md:mx-20 mx-5 font-bold text-4xl text-gray-800">
        Tienda
    </h1>


    <x-tienda.navegacion-tienda>
        <!-- Imagen 1 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                ACCIÓN
            </a>
        </div>
        <!-- Imagen 2 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                TERROR
            </a>
        </div>
        <!-- Imagen 3 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                SUPERVIVENCIA
            </a>
        </div>
        <!-- Imagen 4 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                ROL
            </a>
        </div>
        <!-- Imagen 5 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                PELEAS
            </a>
        </div>
        <!-- Imagen 6 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                SIMULACIÓN
            </a>
        </div>
        <!-- Imagen 7 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                DEPORTES
            </a>
        </div>
        <!-- Imagen 8 -->
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                CARRERAS
            </a>
        </div>
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                AVENTURA
            </a>
        </div>
        <div class="inline-block w-100% px-5">
            <a href="#" class="text-xl">
                SHOOTER
            </a>
        </div>
    </x-tienda.navegacion-tienda>

    <section class="bg-blue-900 text-white py-10 px-8 border bg-[url('https://img.freepik.com/vector-gratis/fondo-abstracto-lluvia-pixeles_23-2148370435.jpg')]">
        <!-- component -->
        <div class="flex flex-co overflow-x-auto max-w-full h-100%">
            <div class="flex overflow-x-scroll hide-scroll-bar">
                <div class="flex flex-nowrap lg:ml-10">
                    <!-- Imagen 1 -->
                    <div class="inline-block px-3 w-1/3">
                        <img
                            class="h-full max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                            src="https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/YMUoJUYNX0xWk6eTKuZLr5Iw.jpg" alt="Imagen 1">
                    </div>
                    <!-- Imagen 2 -->
                    <div class="inline-block px-3 w-1/3">
                        <img
                            class="h-full max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                            src="https://www.dodmagazine.es/wp-content/uploads/2022/11/god-of-war-ragnarok-banda-sonora.jpg">
                    </div>
                    <!-- Imagen 3 -->
                    <div class="inline-block px-3 w-1/3">
                        <img
                            class="h-full max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                            src="https://www.nerdpool.it/wp-content/uploads/2020/05/fallout-76-free-to-play-485x360.jpg">
                    </div>
                    <!-- Imagen 4 -->
                    <div class="inline-block px-3 w-1/3">
                        <img
                            class="h-full max-w-xs rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out"
                            src="https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1888930/capsule_616x353.jpg?t=1728603021">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-900 text-white py-16 px-8 border p-4">
        <div class="relative lg:pt-2">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">
                <article class="bg-white p-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                    <div class="relative mb-4 rounded-2xl text-white transition" onclick="openModal('modal')">
                        <img class="h-full rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-10" src="https://image.api.playstation.com/cdn/UP0700/CUSA05972_00/4yfeeKKfJdD5WzDQsoiM3xrcqPlpDLm7.png" alt="">
                        <p class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100">
                            Comprar
                            <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                            </svg>
                        </p>
                    </div>
                    <div class="flex justify-center items-center w-full">
                        <div class="flex flex-1 justify-center">
                            <h2 class="text-3xl font-semibold text-black text-center">TEKKEN 7</h2>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <div id="modal" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4 modal">
        <div class="relative top-40 mx-auto shadow-xl rounded-md bg-white max-w-4xl w-full">
            <div class="flex justify-between items-center bg-blue-800 text-white text-xl rounded-t-md px-4 py-2">
                <h3>Tekken 7</h3>
                <button onclick="closeModal('modal')" class="text-2xl">x</button>
            </div>
            <div class="flex p-4">
                <div class="flex-1">
                    <img class="w-full h-auto rounded-md" src="https://image.api.playstation.com/cdn/UP0700/CUSA05972_00/4yfeeKKfJdD5WzDQsoiM3xrcqPlpDLm7.png" alt="Tekken 7">
                </div>
                <div class="flex-1 pl-6">
                    <p class="text-lg font-semibold">Descubre Tekken 7! La lucha definitiva para los videojuegos de combate.</p>
                    <p class="mt-4 text-xl font-bold">Precio:</p>
                    <p class="text-2xl text-green-600">S/150</p>
                    <p class="mt-4">¡Compra ahora y experimenta la mejor acción de lucha con Tekken 7, con una gran variedad de personajes y modos de juego!</p>
                </div>
            </div>
            <div class="px-4 py-2 border-t border-t-gray-500 flex justify-end items-center space-x-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700 transition" onclick="closeModal('modal')">Comprar</button>
            </div>
        </div>
    </div>
</main>
@endsection