@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active">Tractions</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <h3>Tractions</h3>
                <a href="{{ route('tractions.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Create New
                </a>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tractions as $traction)
                    <tr>
                        <td>{{ $traction->title }}</td>
                        <td>{{ $traction->subtitle }}</td>
                        <td><i class="{{ $traction->icon_class }}"></i></td>
                        <td>
                            <a href="{{ route('tractions.edit', $traction) }}" class="btn btn-sm btn-info">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('tractions.destroy', $traction) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $tractions->links() }}
        </div>
    </div>
</div>
@endsection