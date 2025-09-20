<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Plan;
use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'amount' => 'required|numeric|min:1',
            'plan_id' => 'required|exists:plans,id',
            'message' => 'nullable',
        ]);
        Investment::create($validated);
        return redirect()->back()->with('success', 'Your investment request has been submitted!');
    }

    public function index()
    {
        $investments = Investment::with('plan')->latest()->paginate(20);
        return view('investments.index', compact('investments'));
    }
    public function show(Investment $investment)
    {
        $investment->load('plan');
        return view('investments.show', compact('investment'));
    }
}
