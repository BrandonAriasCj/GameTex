@extends('layouts.header')

@vite('resources/css/app.css')
<body class="bg-gray-100 justify-content">
    @section('administrador')
    <x-card class="m-2">
        <section class="bg-gray-500 flex   ">
            <!-- Aqui el formulario de Eventos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <a href="{{route('admin.dinamicas.eventos')}}">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" class="w-34 h-34 cursor-pointer" >
                </a>
            </div>

            
            <!-- aqui el formulario de torneos -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <a href="{{route('admin.dinamicas.torneos')}}">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer" >
                </a>
            </div>

    

            <!-- aqui el formulario de recompensas -->
            <div class="bg-gray-100  flex justify-center my-4 m-2 p-2 rounded">
                <a href="">
                <img src="https://i.pinimg.com/originals/d1/cb/b3/d1cbb399c90abc93f8b1acb33e327416.png" alt="Abrir Modal" class="w-34 h-34 cursor-pointer">
            </div>
            

        </section>
        <section class="flex   justify-center" >
            <figure class="bg-gray-100 flex-wrap justify-center my-4 m-2 p-2 rounded ">
                
                <img src="https://img.freepik.com/premium-vector/ticket-icon-vector-ticket-symbol-trendy-flat-ui-sign-design-graphic-pictogram-web-site-mobile_23648-1330.jpg" class="w-72 h-35 ">
                
            </figure>
            <figure class="bg-gray-100 m2-p2 flex justify-center my-4 m-2 p-2 rounded">
               
                <img src="https://static.vecteezy.com/system/resources/previews/017/206/553/original/content-designer-icon-simple-element-from-content-marketing-collection-creative-content-designer-icon-for-web-design-templates-infographics-and-more-vector.jpg" class="w-72 h-35" > 
            </figure>
        </section>

    </x-card>
    @endsection
    
</body>
</html>




