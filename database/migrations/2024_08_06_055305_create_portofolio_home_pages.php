<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portofolio_home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail_portofolio')->nullable();
            $table->string('hover_portofolio')->nullable();
            $table->string('link_social_media_portofolio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio_home_pages');
    }
};
