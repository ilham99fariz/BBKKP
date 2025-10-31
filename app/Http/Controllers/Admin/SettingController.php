<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display the settings page.
     */
    public function index()
    {
        $settings = HomepageSetting::getAllAsArray();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the settings.
     */
    public function update(Request $request)
    {
        $request->validate([
            'hero_title' => 'required|string|max:255',
            'hero_subtitle' => 'required|string|max:500',
            'hero_description' => 'required|string|max:1000',
            'about_title' => 'required|string|max:255',
            'about_description' => 'required|string|max:2000',
            'services_title' => 'required|string|max:255',
            'services_subtitle' => 'required|string|max:500',
            'news_title' => 'required|string|max:255',
            'news_subtitle' => 'required|string|max:500',
            'testimonials_title' => 'required|string|max:255',
            'testimonials_subtitle' => 'required|string|max:500',
            'contact_title' => 'required|string|max:255',
            'contact_subtitle' => 'required|string|max:500',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'facebook_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
        ]);

        foreach ($request->all() as $key => $value) {
            if ($key !== '_token') {
                HomepageSetting::setValue($key, $value);
            }
        }

        return redirect()->route('admin.settings.index')
            ->with('success', 'Pengaturan berhasil diperbarui.');
    }
}
