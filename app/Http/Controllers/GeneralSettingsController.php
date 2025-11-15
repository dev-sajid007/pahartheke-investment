<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Storage;

class GeneralSettingsController extends Controller
{
    // INDEX - সব settings দেখাবে
    public function index()
    {
        $settings = GeneralSetting::all();
        return view('settings.index', compact('settings'));
    }

    // CREATE - নতুন setting form দেখাবে
   public function create()
{
    // Check if already 1 data exists
    if (GeneralSetting::count() > 0) {
        return redirect()->route('settings.index')
                         ->with('error', 'You can only add one general setting record.');
    }

    return view('settings.create');
}


    // STORE - নতুন setting save করবে
    public function store(Request $request)
{
    // Prevent multiple records
    if (GeneralSetting::count() > 0) {
        return redirect()->route('settings.index')
            ->with('error', 'Only one general setting record is allowed. Delete the existing one to add a new one.');
    }

    $data = $request->validate([
        'site_name' => 'required|string|max:255',
        'details' => 'nullable|string',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        'address' => 'nullable|string',
        'facebook' => 'nullable|string',
        'instagram' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
    ]);

    // Logo upload
    if ($request->hasFile('logo')) {
        $data['logo'] = $request->file('logo')->store('logos', 'public');
    }

    GeneralSetting::create($data);

    return redirect()->route('settings.index')
        ->with('success', 'Setting created successfully.');
}


    // EDIT - পুরানো data দেখাবে
    public function edit($id)
{
    $setting = GeneralSetting::findOrFail($id); // ID দিয়ে database থেকে ডাটা নিয়ে আসা
    return view('settings.edit', compact('setting'));
}
    // UPDATE - পুরানো setting update করবে
    public function update(Request $request, $id)
{
    $setting = GeneralSetting::findOrFail($id);

    $data = $request->validate([
        'site_name' => 'required|string|max:255',
        'details' => 'nullable|string',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        'address' => 'nullable|string',
        'facebook' => 'nullable|string',
        'instagram' => 'nullable|string',
        'whatsapp' => 'nullable|string',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
    ]);

    if ($request->hasFile('logo')) {
        if ($setting->logo && Storage::disk('public')->exists($setting->logo)) {
            Storage::disk('public')->delete($setting->logo);
        }
        $data['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $setting->update($data);

    return redirect()->route('settings.index')->with('success', 'Setting updated successfully.');
}



    // DELETE - setting delete করবে
   public function destroy($id)
{
    $setting = GeneralSetting::findOrFail($id);

    // Delete logo file if exists
    if ($setting->logo && Storage::disk('public')->exists($setting->logo)) {
        Storage::disk('public')->delete($setting->logo);
    }

    $setting->delete();

    return redirect()->route('settings.index')->with('success', 'Setting deleted successfully.');
}

}
