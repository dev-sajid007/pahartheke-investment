@extends('frontend.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $plan->title }}</h2>
                    @if($plan->subtitle)
                        <h5 class="text-muted">{{ $plan->subtitle }}</h5>
                    @endif
                    <div class="mt-3 mb-2">
                        {!! $plan->description !!}
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Invest in this Plan</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('investments.store') }}">
                        @csrf
                        <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Investment Amount (BDT)</label>
                            <input type="number" name="amount" class="form-control" min="0" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message / Notes</label>
                            <textarea name="message" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Submit Investment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
