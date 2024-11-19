<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninja Network | Home</title>
</head>
<body>
    <h2>Currently available Ninjas</h2>

    @if($greeting == "Hello!")
      <p>Download</p>
    @endif

    <p>{{ $greeting }}</p>
    <ul>
        @foreach ($ninjas as $ninja)
        <li>
            <a href="/ninjas/{{ $ninja["id"]}}">{{ $ninja["name"]}}</a> 
        </li>   
        @endforeach
    </ul>
</body>
</html>
