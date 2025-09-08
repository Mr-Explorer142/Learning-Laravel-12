<x-layout>
    <form action="{{ route('explorers.update', $explorer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h2>Edit your info</h2>

        <!-- Explorer's Name -->
        <label for="name">Explorer Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name', $explorer->name) }}" 
            required
        >

        <!-- Explorer's skill level -->
        <label for="skill">Explorer Skill (0-100):</label>
        <input 
            type="number" 
            id="skill" 
            name="skill" 
            value="{{ old('skill', $explorer->skill) }}"
            required
        >

        <!-- Explorer's Bio -->
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            required
        >{{ old('bio', $explorer->bio) }}</textarea>

        <!-- select an Institution -->
        <label for="institution_id">Institution:</label>
        <select id="institution_id" name="institution_id" required>
            <option value="" disabled selected>Select an Institution</option>
            @foreach ($institutions as $institution)
              <option 
                  value="{{ $institution->id }}" 
                  {{ $institution->id == (old('institution_id') ?? $explorer->institution_id) ? 'selected' : '' }}>
                  {{ $institution->name }}
              </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Update Explorer</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    
    </form>
</x-layout>
