@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold mb-6">Add General Setting</h2>

    @if($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('generalsetting.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <!-- Logo Upload + Preview -->
        <div>
            <label class="block mb-2 font-medium">Logo</label>
            <input type="file" name="logo" id="logoInput" class="w-full border px-3 py-2 rounded">
            <img id="logoPreview" src="#" class="mt-4 max-h-48 hidden rounded" alt="Logo Preview">
        </div>

        <label class="block mb-2 font-medium">Site Name</label>
        <input type="text" name="sitename" placeholder="Site Name" class="w-full border px-3 py-2 rounded" required>

        <label class="block mb-2 font-medium">Details</label>
        <textarea name="details" placeholder="Details" class="w-full border px-3 py-2 rounded" rows="3"></textarea>

        <label class="block mb-2 font-medium">Email</label>
        <input type="email" name="email" placeholder="Email" class="w-full border px-3 py-2 rounded">

        <label class="block mb-2 font-medium">Phone</label>
        <input type="text" name="phone" placeholder="Phone" class="w-full border px-3 py-2 rounded">

        <label class="block mb-2 font-medium">Address</label>
        <input type="text" name="address" placeholder="Address" class="w-full border px-3 py-2 rounded">

        <label class="block mb-2 font-medium">Facebook</label>
        <input type="text" name="facebook" placeholder="Facebook" class="w-full border px-3 py-2 rounded">

        <label class="block mb-2 font-medium">Instagram</label>
        <input type="text" name="instagram" placeholder="Instagram" class="w-full border px-3 py-2 rounded">

        <label class="block mb-2 font-medium">WhatsApp</label>
        <input type="text" name="whatsapp" placeholder="WhatsApp" class="w-full border px-3 py-2 rounded">

        <div class="mt-4">
            <button type="submit" class="border border-black text-black bg-gray-100 px-6 py-2 rounded hover:bg-black hover:text-white transition">
                Save
            </button>
        </div>
    </form>
</div>

<script>
    // Logo preview script
    const logoInput = document.getElementById('logoInput');
    const logoPreview = document.getElementById('logoPreview');

    logoInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                logoPreview.src = e.target.result;
                logoPreview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            logoPreview.src = '#';
            logoPreview.classList.add('hidden');
        }
    });
</script>
@endsection
