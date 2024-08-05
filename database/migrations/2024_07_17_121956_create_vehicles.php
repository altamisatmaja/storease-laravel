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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('plat_nomor')->unique();
            $table->string('nomor_identifikasi')->unique();
            $table->string('picture');
            $table->string('tahun_kendaraan');
            $table->integer('kapasitas_muatan');
            $table->enum('status_kepemilikan', ['Sewa', 'Milik Perusahaan']);

            $table->unsignedBigInteger('merk_vehicle_id');
            $table->unsignedBigInteger('model_vehicle_id');
            $table->unsignedBigInteger('category_vehicle_id');

            $table->foreign('merk_vehicle_id')->references('id')->on('merk_vehicles')->onDelete('cascade');
            $table->foreign('model_vehicle_id')->references('id')->on('model_vehicles')->onDelete('cascade');
            $table->foreign('category_vehicle_id')->references('id')->on('category_vehicles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
