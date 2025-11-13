@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6">Edit Hero Section</h2>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sections.update', $hero_section->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <!-- Title -->
        <div>
            <label class="block mb-1 font-medium">Title</label>
            <input type="text" name="title" value="{{ $hero_section->title }}" required class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-gray-300">
        </div>

        <!-- Subtitle -->
        <div>
            <label class="block mb-1 font-medium">Subtitle</label>
            <input type="text" name="subtitle" value="{{ $hero_section->subtitle }}" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-gray-300">
        </div>

        <!-- Description -->
        <div>
            <label class="block mb-1 font-medium">Description</label>
            <textarea name="description" rows="4" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-gray-300">{{ $hero_section->description }}</textarea>
        </div>

        <!-- Button Text -->
        <div>
            <label class="block mb-1 font-medium">Button Text</label>
            <input type="text" name="button_text" value="{{ $hero_section->button_text }}" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-gray-300">
        </div>

        <!-- Button Link -->
        <div>
            <label class="block mb-1 font-medium">Button Link</label>
            <input type="url" name="buttonlink" value="{{ $hero_section->buttonlink }}" class="w-full border px-3 py-2 rounded focus:outline-none focus:ring focus:ring-gray-300">
        </div>

        <!-- Image Upload + Preview -->
        <div>
            <label class="block mb-1 font-medium">Image</label>
            <input type="file" name="image" id="imageInput" class="w-full border px-3 py-2 rounded">
            
            @if($hero_section->image)
                <img id="imagePreview" src="{{ asset('storage/' . $hero_section->image) }}" class="mt-4 max-h-48 rounded border">
            @else
                <img id="imagePreview" src="#" class="mt-4 max-h-48 hidden rounded border">
            @endif
        </div>

        <!-- Submit Button -->
        <div class="mt-4">
    <button type="submit" 
        class="border border-black text-black bg-gray-100 px-6 py-2 rounded hover:bg-black hover:text-white transition">
        Update
    </button>
</div>


<script>
const imageInput = document.getElementById('imageInput');
const imagePreview = document.getElementById('imagePreview');

imageInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result;
            imagePreview.classList.remove('hidden');
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endsection
