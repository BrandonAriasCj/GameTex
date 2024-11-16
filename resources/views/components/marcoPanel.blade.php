<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    aside div{
        height: 100px;
        width: 20vw;
        background-color: blue;
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
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </aside>
        <div>
            {{ $slot }}
        </div>
    </div>
</body>
</html>
<!-- Se busca ahora que se tenga el head y el footer -->