@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('tractions.index') }}">Tractions</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <h3>Create Traction</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('tractions.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    @error('title')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Subtitle</label>
                    <input type="text" name="subtitle" class="form-control" value="{{ old('subtitle') }}">
                </div>
                <div class="form-group">
                    <label>Icon Class (FontAwesome)</label>
                    <input type="text" name="icon_class" class="form-control" value="{{ old('icon_class') }}">
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save
                    </button>
                    <a href="{{ route('tractions.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection