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

    {{-- Flash message disappears after 3 seconds with minimal fading effect --}}
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const flash = document.getElementById('flash');
                if (flash) {
                    flash.style.opacity = '0'; // fade out
                    setTimeout(() => flash.remove(), 1000);
                }
            }, 3000); // disappears after 3 seconds
        </script>
    @endif


    {{-- Header Section --}}
    <header>
        <nav>
            <h1 class="font-bold text-2xl">
                <a href="{{ route('explorers.index') }}">Explorers' Net</a>
            </h1>

            @guest
                <a href="{{ route('show.login') }}" class="btn">Login</a>
                <a href="{{ route('show.register') }}" class="btn">Register</a>
            @endguest

            @auth
                <span class="border-r-2 border-red-500 pr-2">
                    Hi there, {{ Auth::user()->name }}
                </span>
                <a href="{{ route('explorers.create') }}">Create New Explorer</a>
                <form action="{{ route('logout') }}" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn">Logout</button>
                </form>
            @endauth
        </nav>
    </header>
    {{-- Main Section --}}
    <main class="container">
        {{ $slot }}
    </main>
</body>

</html>
