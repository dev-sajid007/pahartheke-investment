<?php

namespace App\Http\Controllers;

use App\Models\Traction;
use Illuminate\Http\Request;

class TractionController extends Controller
{
    public function index()
    {
        $tractions = Traction::latest()->paginate(10);
        return view('tractions.index', compact('tractions'));
    }

    public function show()
    {
        $tractions = Traction::latest()->paginate(9);
        return view('tractions.show', compact('tractions'));
    }

    public function create()
    {
        return view('tractions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'icon_class' => 'nullable'
        ]);

        Traction::create($request->all());
        return redirect()->route('tractions.index')
            ->with('success', 'Traction created successfully.');
    }

    public function edit(Traction $traction)
    {
        return view('tractions.edit', compact('traction'));
    }

    public function update(Request $request, Traction $traction)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'nullable',
            'icon_class' => 'nullable'
        ]);

        $traction->update($request->all());
        return redirect()->route('tractions.index')
            ->with('success', 'Traction updated successfully.');
    }

    public function destroy(Traction $traction)
    {
        $traction->delete();
        return redirect()->route('tractions.index')
            ->with('success', 'Traction deleted successfully.');
    }
}