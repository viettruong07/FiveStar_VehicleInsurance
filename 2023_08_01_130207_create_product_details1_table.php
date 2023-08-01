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
        Schema::create('product_details1', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id1')->unsigned();
            $table->string('vehicle_id');
            $table->string('vehicle_name');
            $table->string('vehicle_ower_name');
            $table->string('vehicle_model');
            $table->string('vehicle_version');
            $table->string('vehicle_rate');
            $table->string('vehicle_body_number');
            $table->string('vehicle_engine_number');
            $table->string('vehicle_number');
            $table->string('vehicle_warrranty');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details1');
    }
};
