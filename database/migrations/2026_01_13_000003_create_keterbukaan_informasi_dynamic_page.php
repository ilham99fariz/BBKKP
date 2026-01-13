<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\DynamicPage;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if page already exists
        $exists = DynamicPage::where('slug', 'keterbukaan-informasi-publik')->exists();

        if (!$exists) {
            DynamicPage::create([
                'title' => 'Keterbukaan Informasi Publik',
                'slug' => 'keterbukaan-informasi-publik',
                'type' => 'media_informasi',
                'category' => 'keterbukaan-informasi-publik',
                'content' => '<div style="text-align: center; padding: 60px 20px;">
    <div style="max-width: 600px; margin: 0 auto;">
        <i class="fas fa-info-circle" style="font-size: 80px; color: #3b82f6; margin-bottom: 30px;"></i>
        <h2 style="font-size: 32px; font-weight: bold; color: #1e293b; margin-bottom: 20px;">Keterbukaan Informasi Publik</h2>
        <p style="font-size: 18px; color: #64748b; margin-bottom: 30px; line-height: 1.6;">
            Website Keterbukaan Informasi Publik sedang dalam pengembangan dan akan segera hadir.
        </p>
        <div style="background: #f1f5f9; padding: 20px; border-radius: 10px; margin-bottom: 30px;">
            <p style="font-size: 14px; color: #475569; margin: 0;">
                Untuk informasi lebih lanjut, silakan hubungi kami melalui:
            </p>
            <p style="font-size: 16px; color: #1e293b; margin-top: 10px;">
                <strong>Email:</strong> bbkkp_jogja@kemenperin.go.id<br>
                <strong>Telepon:</strong> +62 811 2827 821
            </p>
        </div>
        <a href="/" style="display: inline-block; background: #3b82f6; color: white; padding: 12px 30px; border-radius: 6px; text-decoration: none; font-weight: 600;">
            Kembali ke Beranda
        </a>
    </div>
</div>',
                'is_active' => true,
                'sort_order' => 0,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DynamicPage::where('slug', 'keterbukaan-informasi-publik')->delete();
    }
};
