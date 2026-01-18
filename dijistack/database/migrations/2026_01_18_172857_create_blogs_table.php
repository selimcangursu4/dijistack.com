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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // h1 başlık
            $table->string('slug')->unique(); // URL
            $table->string('category'); // Tech
            $table->longText('content'); // HTML içerik
            $table->string('featured_image'); // üst büyük görsel
            $table->date('published_at'); // yayın tarihi
            $table->string('author_name');
            $table->string('author_avatar');
            $table->json('tags')->nullable();
            $table->integer('comment_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
