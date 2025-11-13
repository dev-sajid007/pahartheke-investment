<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroSectionController extends Controller
{
    public function index() {
        $heroes = HeroSection::latest()->get();
        return view('sections.index', compact('heroes'));
    }

    public function create() 
    {
    // Check if a hero section already exists
    $existingHero = \App\Models\HeroSection::first(); // First record check

    if ($existingHero) {
        // Redirect back with alert
        return redirect()->route('sections.index')
            ->with('error', 'You can only create one Hero Section. Delete the existing one first.');
    }

    return view('sections.create');
}

    public function store(Request $request) 
    
{
    $existingHero = \App\Models\HeroSection::first();

    if ($existingHero) {
        return redirect()->route('sections.index')
            ->with('error', 'You can only create one Hero Section. Delete the existing one first.');
    }

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'button_text' => 'nullable|string|max:100',
        'buttonlink' => 'nullable|url|max:255',
    ]);

    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('hero','public');
    }

    \App\Models\HeroSection::create($validated);

    return redirect()->route('sections.index')->with('success', 'Hero Section Created!');
}

public function edit($id)
{
    $hero_section = HeroSection::findOrFail($id);
    return view('sections.edit', compact('hero_section'));
}

public function update(Request $request, $id)
{
    $hero_section = HeroSection::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'button_text' => 'nullable|string|max:255',
        'buttonlink' => 'nullable|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('image')) {
        if ($hero_section->image) {
            Storage::disk('public')->delete($hero_section->image);
        }
        $validated['image'] = $request->file('image')->store('hero', 'public');
    }

    $hero_section->update($validated);

    return redirect()->route('sections.index')->with('success', 'Hero section updated successfully!');
}


    public function destroy(HeroSection $hero_section) {
        if($hero_section->image) Storage::disk('public')->delete($hero_section->image);
        $hero_section->delete();
        return redirect()->route('sections.index')->with('success','Hero Section Deleted!');
    }
}
