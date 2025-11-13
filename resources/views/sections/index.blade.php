@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">
    <h2 class="text-3xl font-bold mb-1">Sections </h2>

    {{-- Add Form button --}}
    <div class="flex justify-end mb-6 px-4">
        <a href="{{ route('sections.create') }}" 
           class="flex items-center gap-2 border border-black text-black px-4 py-2 rounded text-sm hover:bg-black hover:text-white transition">
            Add Form
        </a>
    </div>

    {{-- Success message --}}
    @if(session('success'))
        <div class="p-3 bg-green-50 border border-green-300 text-green-700 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error message --}}
    @if(session('error'))
        <div class="p-3 bg-red-100 text-red-700 rounded mb-4">
            {{ session('error') }}
        </div>
    @endif

    {{-- Table --}}
    <div class="overflow-x-auto">
        <table class="w-full border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3 text-left">Image</th>
                    <th class="p-3 text-left">Title</th>
                    <th class="p-3 text-left">Subtitle</th>
                    <th class="p-3 text-left">Description</th>
                    <th class="p-3 text-left">Button Text</th>
                    <th class="p-3 text-left">Button Link</th>
                    <th class="p-3 text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($heroes as $hero)
                    <tr class="border-t">
                        <td class="p-3">
                            @if($hero->image)
                                <img src="{{ asset('storage/'.$hero->image) }}" class="h-16 rounded">
                            @endif
                        </td>
                        <td class="p-3">{{ $hero->title }}</td>
                        <td class="p-3">{{ $hero->subtitle }}</td>
                        <td class="p-3">{{ $hero->description }}</td>
                        <td class="p-3">{{ $hero->button_text }}</td>
                        <td class="p-3">{{ $hero->buttonlink }}</td>
                        <td class="p-3 flex gap-2">
                            {{-- Edit button --}}
                            <a href="{{ route('sections.edit', $hero->id) }}" 
                               class="text-indigo-600 hover:underline px-2 py-1 border border-indigo-600 rounded text-sm">
                               Edit
                            </a>

                            {{-- Delete button --}}
                            <form action="{{ route('sections.destroy', $hero->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="text-red-600 hover:underline px-2 py-1 border border-red-600 rounded text-sm"
                                        onclick="return confirm('Are you sure?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="p-3 text-center text-gray-500">
                            No hero sections found
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
