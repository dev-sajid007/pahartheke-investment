@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('faqs.index') }}">Manage FAQs</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <h3>Create FAQ</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('faqs.store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label>Question</label>
                    <input type="text" name="question" class="form-control @error('question') is-invalid @enderror" value="{{ old('question') }}">
                    @error('question')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label>Answer</label>
                    <textarea name="answer" rows="5" class="form-control tinymce @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                    @error('answer')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save
                    </button>
                    <a href="{{ route('faqs.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection