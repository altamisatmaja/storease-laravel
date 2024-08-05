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
        Schema::create('fuel_consumption', function (Blueprint $table) {
            $table->id();
            $table->integer('biaya');
            $table->integer('volume_bbm');
            $table->enum('jenis_bahan_bakar', ['Solar, Bensin']);
            $table->integer('odometer');
            $table->string('keterangan');
            $table->string('attachment');
            $table->dateTime('fuel_at');

            $table->unsignedBigInteger('vehicle_id');

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fuel_consumption');
    }
};
