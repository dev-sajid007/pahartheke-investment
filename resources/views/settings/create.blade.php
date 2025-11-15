@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white p-8 rounded-xl shadow">
    <h2 class="text-3xl font-bold mb-6">Add General Setting</h2>

    <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="space-y-4">
            @foreach(['site_name','details','email','phone','address','facebook','instagram','whatsapp'] as $field)
                <div>
                    <label class="block font-medium capitalize">{{ str_replace('_',' ',$field) }}</label>
                    @if($field == 'details')
                        <textarea name="{{ $field }}" class="w-full border px-3 py-2 rounded">{{ old($field) }}</textarea>
                    @else
                        <input type="{{ $field=='email'?'email':'text' }}" name="{{ $field }}" class="w-full border px-3 py-2 rounded" value="{{ old($field) }}">
                    @endif
                </div>
            @endforeach

            <div>
                <label class="block font-medium">Logo</label>
                <input type="file" name="logo" id="logo" class="w-full border px-3 py-2 rounded">
                <img id="logoPreview" class="mt-2 w-32 h-32 object-contain hidden" />
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save</button>
        </div>
    </form>
</div>

<script>
    const logoInput = document.getElementById('logo');
    const logoPreview = document.getElementById('logoPreview');

    logoInput.addEventListener('change', function(){
        const file = this.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(e){
                logoPreview.setAttribute('src', e.target.result);
                logoPreview.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    });
</script>
@endsection
