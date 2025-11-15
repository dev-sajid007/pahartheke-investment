@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-2xl font-bold mb-4">Edit Setting</h2>
    <form action="{{ route('settings.update', $setting->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
    @csrf
    @method('PUT')

    <label class="block mb-2">Site Name</label>
    <input type="text" name="site_name" value="{{ $setting->site_name }}" class="border px-3 py-2 w-full" required>
    <label class="block mb-2">Details</label>
    <textarea name="details" class="border px-3 py-2 w-full">{{ $setting->details }}</textarea>
    <label class="block mb-2">email</label>
    <input type="email" name="email" value="{{ $setting->email }}" class="border px-3 py-2 w-full">
    <label class="block mb-2">Phone</label>
    <input type="text" name="phone" value="{{ $setting->phone }}" class="border px-3 py-2 w-full">
    <label class="block mb-2">Address</label>
    <input type="text" name="address" value="{{ $setting->address }}" class="border px-3 py-2 w-full">
    <label class="block mb-2">Facebook</label>
    <input type="text" name="facebook" value="{{ $setting->facebook }}" class="border px-3 py-2 w-full">
    <label class="block mb-2">Instagram</label>
    <input type="text" name="instagram" value="{{ $setting->instagram }}" class="border px-3 py-2 w-full">
    <label class="block mb-2">WhatsApp</label>
    <input type="text" name="whatsapp" value="{{ $setting->whatsapp }}" class="border px-3 py-2 w-full">

    <div>
        <label class="block mb-2">Logo</label>
        <input type="file" name="logo" id="logo" class="border px-3 py-2 w-full" accept="image/*">
        <img id="preview" src="{{ $setting->logo ? asset('storage/'.$setting->logo) : '' }}" 
             class="mt-2 w-32 h-32 object-cover {{ $setting->logo ? '' : 'hidden' }}">
    </div>

    <button type="submit" class="bg-blue-500 text-black border border-black px-4 py-2 rounded mt-4">
        Update
    </button>
</form>

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
