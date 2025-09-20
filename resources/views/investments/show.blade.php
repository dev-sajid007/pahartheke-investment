@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Investment Details</h4>
                </div>
                <div class="card-body">
                    <dl class="row mb-0">
                        <dt class="col-sm-4">Full Name</dt>
                        <dd class="col-sm-8">{{ $investment->full_name }}</dd>
                        <dt class="col-sm-4">Email</dt>
                        <dd class="col-sm-8">{{ $investment->email }}</dd>
                        <dt class="col-sm-4">Phone</dt>
                        <dd class="col-sm-8">{{ $investment->phone }}</dd>
                        <dt class="col-sm-4">Amount (BDT)</dt>
                        <dd class="col-sm-8">{{ number_format($investment->amount, 2) }}</dd>
                        <dt class="col-sm-4">Plan</dt>
                        <dd class="col-sm-8">{{ $investment->plan->title ?? '-' }}</dd>
                        <dt class="col-sm-4">Message / Notes</dt>
                        <dd class="col-sm-8">{{ $investment->message }}</dd>
                        <dt class="col-sm-4">Submitted At</dt>
                        <dd class="col-sm-8">{{ $investment->created_at->format('Y-m-d H:i') }}</dd>
                    </dl>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4"><i class="fas fa-arrow-left me-2"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
