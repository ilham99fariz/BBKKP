<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Display the admin login view.
     */
    public function createAdmin(): View
    {
        return view('auth.login-admin');
    }

    /**
     * Handle an incoming authentication request.
     */
// ... existing code ...
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Autentikasi admin dari tabel admins
        $admin = \App\Models\Admin::where('email', $request->email)->get();
        $loginSuccess = false;
        $authAdmin = null;
        foreach ($admin as $a) {
            if (\Hash::check($request->password, $a->password)) {
                $loginSuccess = true;
                $authAdmin = $a;
                break;
            }
        }
        if (! $loginSuccess) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password admin salah.'
            ]);
        }
        // Simpan info pada session agar dikenali sebagai admin
        session(['admin_id' => $authAdmin->id, 'admin_email' => $authAdmin->email]);
        $request->session()->regenerate();
        return redirect()->intended(\App\Providers\RouteServiceProvider::HOME);
    }

    public function getLoginAdmin(): View
    {
        return view('auth.login-admin'); // buatkan nanti
    }
    public function postLoginAdmin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $admin = \App\Models\Admin::where('email', $request->email)->get();
        $loginSuccess = false;
        $authAdmin = null;
        foreach ($admin as $a) {
            if (\Hash::check($request->password, $a->password)) {
                $loginSuccess = true;
                $authAdmin = $a;
                break;
            }
        }
        if (! $loginSuccess) {
            throw ValidationException::withMessages([
                'email' => 'Email atau password admin salah.'
            ]);
        }
        session(['admin_id' => $authAdmin->id, 'admin_email' => $authAdmin->email]);
        $request->session()->regenerate();
        return redirect()->intended(\App\Providers\RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Hapus session admin
        session()->forget(['admin_id', 'admin_email']);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
