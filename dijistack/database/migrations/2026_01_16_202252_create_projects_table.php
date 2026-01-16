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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('subtitle');
            $table->string('hero_image');
            $table->string('category');
            $table->string('client');
            $table->string('designer');
            $table->date('start_date');
            $table->text('overview_title');
            $table->text('overview_text');
            $table->string('background_title');
            $table->string('background_text');
            $table->text('slug');
            $table->text('meta_title');
            $table->text('meta_description');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
