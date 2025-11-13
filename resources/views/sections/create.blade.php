@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6">Add Hero Section</h2>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sections.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        
        <label class="block mb-2 font-medium">Title</label>
        <input type="text" name="title" placeholder="Title" class="w-full border px-3 py-2 rounded" required>
       
        <label class="block mb-2 font-medium">Subtitle</label>
        <input type="text" name="subtitle" placeholder="Subtitle" class="w-full border px-3 py-2 rounded">
      
        <label class="block mb-2 font-medium">Description</label>
        <textarea name="description" placeholder="Description" class="w-full border px-3 py-2 rounded" rows="4"></textarea>

       

        <!-- Button Text and Button Link BELOW image -->
          <label class="block mb-2 font-medium">Button Text</label>
        <input type="text" name="button_text" placeholder="Button Text" class="w-full border px-3 py-2 rounded">
        
        <label class="block mb-2 font-medium">Button Link</label>
        <input type="url" name="buttonlink" placeholder="Button Link" class="w-full border px-3 py-2 rounded">



        <!-- Image Upload + Preview -->
        <div>
            <label class="block mb-2 font-medium">Image</label>
            <input type="file" name="image" id="imageInput" class="w-full border px-3 py-2 rounded">
            <img id="imagePreview" src="#" class="mt-4 max-h-48 hidden rounded" alt="Image Preview">
        </div>


        <div class="mt-4">
        <button type="submit" class="border border-black text-black bg-gray-100 px-6 py-2 rounded hover:bg-black hover:text-white transition">Save</button>
    </form>
</div>

 

<script>
    // Image preview script
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
        } else {
            imagePreview.src = '#';
            imagePreview.classList.add('hidden');
        }
    });
</script>
@endsection
