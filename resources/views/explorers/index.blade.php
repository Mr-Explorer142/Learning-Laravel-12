<x-layout>
    <h2 class="font-bold">Currently available explorers</h2>

    <ul>
        @foreach ($explorers as $explorer)
            <li>
                <x-card href="{{ route('explorers.show' ,$explorer->id) }}" :highlight="$explorer->skill > 70">
                    <h3>{{ $explorer->name}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $explorers->links() }}

</x-layout>
