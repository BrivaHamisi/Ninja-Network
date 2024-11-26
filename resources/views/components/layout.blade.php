<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network </title>

    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{session('success')}}
        </div>
    @endif 

    @if(session('error'))
        <div id="flash" class="p-4 text-center bg-red-50 text-red-500 font-bold">
            {{session('error')}}
        </div>
    @endif

    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="{{ route('ninjas.index')}}">All Ninjas</a>
            <a href="{{ route('ninjas.create')}}">Create New Ninja</a>
        </nav>
    </header>
    <main class="container">
        {{ $slot }}
    </main>
   
</body>
</html>
