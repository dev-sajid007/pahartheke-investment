@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Add New Setting</h2>
    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
         <label class="block mb-2">Site Name</label>
        <input type="text" name="site_name" placeholder="Site Name" class="border px-3 py-2 w-full" required>
         <label class="block mb-2">Details</label>
        <textarea name="details" placeholder="Details" class="border px-3 py-2 w-full"></textarea>
       <label class="block mb-2">Email</label>
        <input type="email" name="email" placeholder="Email" class="border px-3 py-2 w-full">
         <label class="block mb-2">Phone</label>
        <input type="text" name="phone" placeholder="Phone" class="border px-3 py-2 w-full">
        <label class="block mb-2">Address</label>
        <input type="text" name="address" placeholder="Address" class="border px-3 py-2 w-full">
        <label class="block mb-2">Facebook</label>
        <input type="text" name="facebook" placeholder="Facebook" class="border px-3 py-2 w-full">
        <label class="block mb-2">Instagram</label>
        <input type="text" name="instagram" placeholder="Instagram" class="border px-3 py-2 w-full">
        <label class="block mb-2">WhatsApp</label>
        <input type="text" name="whatsapp" placeholder="WhatsApp" class="border px-3 py-2 w-full">
        
        <div>
            <label class="block mb-2">Logo</label>
            <input type="file" name="logo" id="logo" class="border px-3 py-2 w-full" accept="image/*">
            <img id="preview" class="mt-2 w-32 h-32 object-cover hidden">
        </div>

       <button type="submit" class="bg-blue-500 text-black border border-black px-4 py-2 rounded mt-4">Save</button>

    </form>
</div>

<script>
    const logo = document.getElementById('logo');
    const preview = document.getElementById('preview');

    logo.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        }
    });
</script>
@endsection
