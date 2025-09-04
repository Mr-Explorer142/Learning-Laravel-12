<!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Explorers' List</title>
    <title>Explorer's Network</title>
</head>

<body>
    {{-- Header Section --}}
    <header>
        <nav>
            <h1 class="font-bold text-2xl">Explorer's Network</h1>
            <a href="{{ route('explorers.index') }}">All Explorers</a>
            <a href="{{ route('explorers.create') }}">Create New Explorer</a>
        </nav>
    </header>
    {{-- Main Section --}}
    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
