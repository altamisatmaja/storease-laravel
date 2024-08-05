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
        Schema::create('approval_processes', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['Menunggu', 'Disetujui', 'Ditolak'])->default('Menunggu');

            $table->dateTime('approved_at')->nullable();
            $table->dateTime('rejected_at')->nullable();

            $table->unsignedBigInteger('vehicle_booking_id');
            $table->unsignedBigInteger('approval_level_id');
            $table->unsignedBigInteger('approver_id');

            $table->foreign('vehicle_booking_id')->references('id')->on('vehicle_bookings')->onDelete('cascade');
            $table->foreign('approval_level_id')->references('id')->on('approval_levels')->onDelete('cascade');
            $table->foreign('approver_id')->references('id')->on('approvers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approval_processes');
    }
};
