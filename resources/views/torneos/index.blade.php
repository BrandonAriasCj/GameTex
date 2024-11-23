@extends('layouts.layout')

@section('contenido')
<main>
    <section>
        <h1>Torneos</h1>
        <div>
            <label>Categorias:</label>
            <select>
                @foreach($torneos as $torneo)
                <option>{{ $torneo->juego->nombre }}</option>
                @endforeach
            </select>
        </div>
    </section>

    <section class="bg-blue-900 text-white py-14 px-8 border p-0">
        <div class="container mx-auto px-0 py-0">
            <div class="flex flex-wrap justify-center px-5 py-5 mx-auto space-x-0 sm:space-x-4 md:space-x-10">
                <!--Esta es la estructura -->

                @foreach ($torneos as $torneo)
                    <div data-juego="{{$torneo->juego->nombre}}" class="px-0 py-4 md:w-1/3 sm:mb-0 mb-6 group relative w-full sm:w-1/2 lg:w-1/5">
                        <div class="rounded-lg h-96 overflow-hidden relative">
                            <img alt="content" class="object-cover object-center h-full transition duration-300 ease-in-out group-hover:brightness-50" src="{{$torneo->imagen}}">
                            <div class="absolute inset-0 flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-in-out px-5">
                                <ul>
                                    <h3 class="text-lg font-semibold">{{ $torneo->nombrej }}</h3><br>
                                    <li>Juego-Tipo: {{$torneo->juego->nombre}} </li><br>
                                    <li>Premio: </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection