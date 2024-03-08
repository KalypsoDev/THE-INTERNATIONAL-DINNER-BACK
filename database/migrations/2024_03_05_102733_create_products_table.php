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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->string('product_image_url')->nullable();
            $table->text('product_description');
            $table->double('product_price');
            $table->unsignedBigInteger('flag_id');
            $table->unsignedBigInteger('diet_id');
            $table->unsignedBigInteger('allergen_type');
            $table->string('status')->default('pending');
            $table->foreign('flag_id')->references('id')->on('flags');
            $table->foreign('diet_id')->references('id')->on('diets');
            $table->foreign('allergen_type')->references('id')->on('food_allergens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};