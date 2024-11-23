<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    aside div{
        height: 10vh;
        width: 20vw;
        background-color: slateblue;
        border: 1px solid white;
    }
    aside{
        background-color: grey;
        border-radius: 10px;
        padding: 10px;
        margin: 10vh 5vw ;
    }
    </style>
</head>

<body>
    @include('layouts.header')
    <div style="display:flex">                              
        <aside>
            <div><a href="{{route('panel.index')}}">Jugador</a></div>
            <div><a href="{{route('panel.descripcion', ['id' => 1])}}">Descripcion</a></div>
            <div><a href="{{route('panel.partidas')}}">Partidas</a></div>
            <div><a href="{{route('panel.ranking')}}">Rankinks</a></div>
            <div><a href="{{route('panel.reglas')}}">Reglas</a></div>
        </aside>
        <div></div>
        <div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>