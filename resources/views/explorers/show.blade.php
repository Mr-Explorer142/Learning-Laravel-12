<x-layout>
    <h2 class="font-bold">Explorer's ID : {{ $explorer->id }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $explorer->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $explorer->bio }}</p>
    </div>

    {{-- dojo info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Institution Information</h3>
        <p><strong>Institution name:</strong> {{ $explorer->institution->name }}</p>
        <p><strong>Location:</strong> {{ $explorer->institution->location }}</p>
        <p><strong>About the Institution:</strong></p>
        <p>{{ $explorer->institution->description }}</p>
    </div>

    <form action="{{ route('explorers.destroy', $explorer->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn py-4">
            Delete Explorer
        </button>
    </form>
</x-layout>
