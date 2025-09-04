<x-layout>
    <h2 class="font-bold">Explorer's ID : {{ $explorer->id }}</h2>
    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $explorer->skill }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $explorer->bio }}</p>
    </div>
</x-layout>
