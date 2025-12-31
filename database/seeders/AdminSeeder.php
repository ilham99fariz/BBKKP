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
        // Hapus semua admin selain email target
        Admin::where('email', '!=', 'admin@balaiindustri.go.id')->delete();

        // Buat admin utama
        Admin::updateOrCreate(
            ['email' => 'admin@balaiindustri.go.id'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('minda1937'),
                'role' => 'superadmin',
            ]
        );
    }
}

