<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function show()
    {
        return view('pages.about.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'purpose' => 'nullable|string|in:kunjungan,ajuan_layanan,lainnya',
            'message' => 'required|string|max:2000',
        ]);

        try {
            // Store message to database for admin panel
            \App\Models\ContactMessage::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'company' => $request->input('company'),
                'subject' => $request->input('subject'),
                'purpose' => $request->input('purpose'),
                'message' => $request->input('message'),
                'is_read' => false,
            ]);

            // Send email
            Mail::to(config('mail.from.address'))->send(new ContactMail($request->all()));

            return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan segera menghubungi Anda.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.');
        }
    }
}
