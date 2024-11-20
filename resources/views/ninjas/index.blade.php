<x-layout>
    <h2>Currently available Ninjas</h2>

    {{-- @if($greeting == "Hello!")
      <p>Download</p>
    @endif --}}

    {{-- <p>{{ $greeting }}</p> --}}
    <ul>
        @foreach ($ninjas as $ninja)
        <li>
            <p>{{ $ninja["name"]}}</p>
            <a href="/ninjas/{{ $ninja["id"]}}">View Details</a> 
        </li>   
        @endforeach
    </ul>
</x-layout>