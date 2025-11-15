<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Storage;

class GeneralSettingsController extends Controller
{
    // INDEX
    public function index()
    {
        $settings = GeneralSetting::all();
        return view('settings.index', compact('settings'));
    }

    // CREATE
    public function create()
    {
        return view('generalsettings.create');
    }

    // STORE
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('logo')){
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        GeneralSetting::create($data);
        return redirect()->route('settings.index');
    }

    // EDIT
    public function edit($id)
    {
        $setting = GeneralSetting::findOrFail($id);
        return view('settings.edit', compact('setting'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $setting = GeneralSetting::findOrFail($id);
        $data = $request->all();
        if($request->hasFile('logo')){
            if($setting->logo){
                Storage::disk('public')->delete($setting->logo);
            }
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $setting->update($data);
        return redirect()->route('settings.index');
    }

    // DELETE
    public function destroy($id)
    {
        $setting = GeneralSetting::findOrFail($id);
        if($setting->logo){
            Storage::disk('public')->delete($setting->logo);
        }
        $setting->delete();
        return redirect()->route('settings.index');
    }
}
