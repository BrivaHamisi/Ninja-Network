<x-layout>
    <h2>Currently available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja)
        <li>
            <x-card href="{{ route('ninjas.show', $ninja->id)}}" :highlight="$ninja['skills'] > 70">
                <h3>{{ $ninja["name"] }}</h3>
            </x-card>
        </li>   
        @endforeach
    </ul>
</x-layout>