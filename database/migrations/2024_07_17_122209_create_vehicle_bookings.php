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
        Schema::create('vehicle_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('durasi');
            $table->string('keperluan');
            $table->dateTime('booked_at');

            $table->unsignedBigInteger('start_from_mining_id');
            $table->unsignedBigInteger('end_to_mining_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('vehicle_id');

            $table->foreign('start_from_mining_id')->references('id')->on('mining_states')->onDelete('cascade');
            $table->foreign('end_to_mining_id')->references('id')->on('mining_states')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_bookings');
    }
};
