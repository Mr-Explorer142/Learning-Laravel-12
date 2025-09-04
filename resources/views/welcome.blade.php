<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="text-center px-8 py-12">
    <h1 class="font-bold text-3xl">Explorer's World</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, nesciunt!</p>
    <a href="/explorers" class="btn mt-4 inline-block">Find Explorers</a>
</body>

</html>
