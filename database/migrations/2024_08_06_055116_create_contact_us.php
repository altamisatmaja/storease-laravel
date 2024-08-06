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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('detail_address_storease')->nullable();
            $table->string('whatsapp_number_storease')->nullable();
            $table->string('email_storease')->nullable();
            $table->string('operational_schedule_date')->nullable();
            $table->string('operational_schedule_hour')->nullable();
            $table->string('location_storease')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us');
    }
};
