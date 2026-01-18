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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();

            // Marka bilgileri
            $table->string('name');                 // Marka adı
            $table->string('slug')->unique();       // SEO / URL
            $table->string('logo_path');           
            $table->string('website_url')->nullable(); // Tıklama linki
            // Yönetim & Görünüm
            $table->integer('sort_order')->default(0); // Sıralama
            $table->boolean('is_active')->default(true); // Yayın durumu
            $table->boolean('is_featured')->default(false); // Öne çıkan

            // Zaman bilgileri
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
