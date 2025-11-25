<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin 1 - Superadmin
        Admin::updateOrCreate(
            ['email' => 'admin@balaiindustri.go.id'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('minda1937'),
                'role' => 'superadmin',
            ]
        );

        // Admin 2 - Media Admin (hanya akses media & informasi)
        Admin::updateOrCreate(
            ['email' => 'media@balaiindustri.go.id'],
            [
                'name' => 'Media Admin',
                'password' => Hash::make('adminmesi'),
                'role' => 'media',
            ]
        );
    }
}

