<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('survey_responses')) {
            Schema::table('survey_responses', function (Blueprint $table) {
                if (!Schema::hasColumn('survey_responses', 'show_on_home')) {
                    $table->boolean('show_on_home')->default(false);
                }
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('survey_responses')) {
            Schema::table('survey_responses', function (Blueprint $table) {
                if (Schema::hasColumn('survey_responses', 'show_on_home')) {
                    $table->dropColumn('show_on_home');
                }
            });
        }
    }
};
