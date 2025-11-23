<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MediaAdminMiddleware
{
    /**
     * Handle an incoming request.
     * Restrict access to only media-informasi section for media role admin
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $adminRole = session('admin_role');
        
        // If not media admin, allow access (superadmin can access everything)
        if ($adminRole !== 'media') {
            return $next($request);
        }

        // Media admin can only access:
        // - Dashboard
        // - Media & Informasi (page-content.media-informasi.*)
        // - News (admin.news.*)
        // - Settings (admin.settings.*)
        
        $routeName = $request->route()?->getName();
        
        if (!$routeName) {
            return $next($request);
        }
        
        // Allow dashboard
        if ($routeName === 'admin.dashboard') {
            return $next($request);
        }

        // Allow media & informasi
        if (str_starts_with($routeName, 'admin.page-content.media-informasi')) {
            return $next($request);
        }

        // Allow news
        if (str_starts_with($routeName, 'admin.news')) {
            return $next($request);
        }

        // Allow settings
        if (str_starts_with($routeName, 'admin.settings')) {
            return $next($request);
        }

        // Deny access to other sections
        return redirect()->route('admin.dashboard')
            ->with('error', 'Anda tidak memiliki akses ke halaman ini. Hanya dapat mengakses Media & Informasi.');
    }
}

