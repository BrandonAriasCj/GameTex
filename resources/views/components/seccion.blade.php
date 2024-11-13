<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .contenedor{
            display: flex;
        }
    </style>
</head>
<body>
<section class="bg-blue-900 text-white py-16 px-8 border p-4">
    <div class="container mx-auto text-center contenedor">
        {{ $slot }}
    </div>
</section>
</body>
</html>