<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $domain = request()->getHost();
        $setting = Setting::where('domain', $domain)->first();

        // First time ku setting illa na error varama irukka
        if (!$setting) {
            $setting = new Setting([
                'institute_name' => '',
                'domain' => $domain,
                'primary_color' => '#4F46E5',
                'logo_path' => null
            ]);
        }

        return view('settings.index', compact('setting'));
    }

    public function store(Request $request)
    {
        $domain = request()->getHost();
        
        $request->validate([
            'institute_name' => 'required|string|max:255',
            'primary_color' => 'nullable|string|max:20',
            'logo' => 'nullable|image|max:2048'
        ]);

        $data = [
            'institute_name' => $request->institute_name,
            'domain' => $domain,
            'primary_color' => $request->primary_color ?? '#0d6efd',
        ];

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $data['logo_path'] = $path;
        }

        Setting::updateOrCreate(
            ['domain' => $domain],
            $data
        );

        return back()->with('success', 'Settings saved ');
    }
}