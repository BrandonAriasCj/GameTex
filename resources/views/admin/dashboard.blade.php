@extends('layouts.header')

@vite('resources/css/app.css')
<body class="bg-purple-600">
    @section('administrador')
    <x-card class="m-2">
        <section class="bg-gray-500 flex  justify-center ">
            <!-- Aqui el formulario de Eventos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <a href="{{route('admin.dinamicas.eventos')}}">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" class="w-34 h-34 cursor-pointer" >
                </a>
            </div>

            
            <!-- aqui el formulario de torneos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer" >
            </div>

    

            <!-- aqui el formulario de recompensas -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer">
            </div>
            

        </section>
        <section class="flex  flex-wrap justify-center">
            <div class="bg-gray-100 m-2">
                <p>Reportes</p>
            </div>
            <div class="bg-gray-100 m-2">
                <p>Contenido</p>
            </div>
        </section>
        <section class="flex   justify-center" >
            <figure class="bg-gray-100 flex-wrap justify-center my-4 m-2 p-2 rounded ">
                <img src="https://i.pinimg.com/736x/f9/e0/9d/f9e09d33315a8d7e77104832d7d40fb3.jpg" class="w-72 h-35 ">
                
            </figure>
            <figure class="bg-gray-100 m2-p2 flex justify-center my-4 m-2 p-2 rounded"> 
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/378648/capsule_616x353.jpg?t=1670976511" class="w-72 h-35" > 
            </figure>
        </section>

    </x-card>
    @endsection
    
</body>
</html>




