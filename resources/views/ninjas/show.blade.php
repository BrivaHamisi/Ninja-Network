<x-layout>
    <h2>{{ $ninja->name }}'s Profile</h2>
  
    <div class="bg-gray-200 p-4 rounded">
      <p><strong>Skill level:</strong> {{ $ninja->skills }}</p>
      <p><strong>About me:</strong></p>
      <p>{{ $ninja->bio }}</p>
    </div>

     {{-- dojo info --}}
  <div class="border-2 bg-white px-4 pb-4 my-4 rounded">
    <h3>Dojo Information</h3>
    <p><strong>Dojo name:</strong> {{ $ninja->dojo->name }}</p>
    <p><strong>Location:</strong> {{ $ninja->dojo->location }}</p>
    <p><strong>About the Dojo:</strong></p>
    <p>{{ $ninja->dojo->description }}</p>
  </div>

  <form action="{{ route('ninjas.destroy', $ninja->id )}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete Ninja</button>
    {{-- <a href="{{ route('ninjas.edit', $ninja->id ) }}" class="ml-4 text-blue-500 hover:text-blue-700">Edit Ninja</a>
    <a href="{{ route('dojos.show', $ninja->dojo->id ) }}" class="ml-4 text-blue-500 hover:text-blue-700">View Dojo</a> --}}

    {{-- @if (Auth::user()->id === $ninja->user_id) --}}
  </form>

  </x-layout>
