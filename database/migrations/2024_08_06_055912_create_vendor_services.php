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
        Schema::create('vendor_services', function (Blueprint $table) {
            $table->id();
            $table->string('service_name');
            $table->string('service_description');
            $table->string('thumbnail_service');
            $table->string('start_price_at');
            $table->string('location_available');
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
        Schema::dropIfExists('vendor_services');
    }
};
