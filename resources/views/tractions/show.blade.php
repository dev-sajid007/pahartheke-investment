@extends('layouts.app')

@section('content')
<div class="container py-5">
    <!-- Hero Section -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Our Growth & Traction</h1>
        <p class="lead text-muted">Discover our milestones and achievements</p>
    </div>

    <!-- Tractions Grid -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($tractions as $traction)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        @if($traction->icon_class)
                            <div class="display-4 me-3">
                                <i class="{{ $traction->icon_class }} text-primary"></i>
                            </div>
                        @endif
                        <div>
                            <h3 class="card-title h5 mb-1">{{ $traction->title }}</h3>
                            @if($traction->subtitle)
                                <p class="card-subtitle text-muted mb-0">{{ $traction->subtitle }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $tractions->links() }}
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        transition: transform 0.2s ease-in-out;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endpush