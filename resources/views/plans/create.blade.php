@extends('layouts.app')


@section('content')

    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('plans.index') }}">Plans</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>

        <div class="card">
            <div class="card-header">
                <h3>Create Plan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('plans.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            value="{{ old('title') }}">
                        @error('title')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Subtitle</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
                    </div>

                    <div class="form-group mb-3">
                        <label>Description</label>
                        <textarea  name="description" id="editor" class="form-control @error('description') is-invalid @enderror"
                            rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Save
                        </button>
                        <a href="{{ route('plans.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>


    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
               .then(editor => {
        editor.ui.view.editable.element.style.minHeight = "300px"; // <-- height here
    })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
