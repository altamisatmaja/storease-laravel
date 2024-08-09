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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_name')->nullable();
            $table->string('provinsi_vendor')->nullable();
            $table->string('kabupaten_vendor')->nullable();
            $table->string('kecamatan_vendor')->nullable();
            $table->string('kelurahan_vendor')->nullable();
            $table->string('detail_alamat_vendor')->nullable();
            $table->text('about_vendor')->nullable();
            $table->string('link_instagram_vendor')->nullable();
            $table->string('link_website_vendor')->nullable();
            $table->string('link_facebook_vendor')->nullable();
            $table->string('location_by_gmaps')->nullable();
            $table->string('thumbnail_vendor')->nullable();
            $table->unsignedBigInteger('vendor_category_services_id');
            $table->string('slug')->nullable();
            $table->timestamps();

            $table->foreign('vendor_category_services_id')->references('id')->on('vendor_category_services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
