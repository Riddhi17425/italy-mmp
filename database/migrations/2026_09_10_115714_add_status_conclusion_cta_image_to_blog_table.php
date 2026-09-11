<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->enum('status', ['Active', 'InActive'])->nullable()->default('Active')->after('alt_banner');
            $table->longText('conclusion')->nullable()->after('status');
            $table->string('cta_image', 255)->nullable()->after('conclusion');
        });
    }

    public function down(): void
    {
        Schema::table('blog', function (Blueprint $table) {
            $table->dropColumn(['status', 'conclusion', 'cta_image']);
        });
    }
};