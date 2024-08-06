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
        Schema::create('vendor_team', function (Blueprint $table) {
            $table->id();
            $table->string('owner_vendor_name')->nullable();
            $table->string('about_the_team')->nullable();
            $table->unsignedBigInteger('vendor_id');
            $table->timestamps();

            $table->foreign('vendor_id')->references('id')->on('vendor')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_team');
    }
};
