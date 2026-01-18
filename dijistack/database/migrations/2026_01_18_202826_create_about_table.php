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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            
            // Temel içerik
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
            
            // Misyon, Vizyon, Değerler
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->json('values')->nullable();
            
            // Kuruluş ve tarihçe
            $table->date('founding_date')->nullable();
            $table->json('founders')->nullable();
             $table->string('logo')->nullable();
            $table->string('video_url')->nullable();
            
            // Sosyal medya
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('youtube_url')->nullable();
            
            
            // İletişim bilgileri
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
        
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
