@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">All Investment Submissions</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Amount (BDT)</th>
                    <th>Plan</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($investments as $inv)
                <tr>
                    <td>{{ $inv->id }}</td>
                    <td>{{ $inv->full_name }}</td>
                    <td>{{ $inv->email }}</td>
                    <td>{{ $inv->phone }}</td>
                    <td>{{ number_format($inv->amount, 2) }}</td>
                    <td>{{ $inv->plan->title ?? '-' }}</td>
                    <td>{{ $inv->message }}</td>
                    <td>{{ $inv->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $investments->links() }}
    </div>
</div>
@endsection
