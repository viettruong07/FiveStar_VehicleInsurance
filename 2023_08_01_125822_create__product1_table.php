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
        Schema::create('Product1', function (Blueprint $table) {
            $table->id();
            $table->integer('product_details1_id')->unsigned();
            $table->integer('product_category1_id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->double('price');
            $table->integer('qty');
            $table->string('tag')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Product1');
    }
};
