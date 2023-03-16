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
        Schema::create('products',function( Blueprint $table){
            $table->id();

            $table->string('name',80);
            $table->string('description',255);
            $table->integer('count')->default(0);
            $table->integer('order_count')->default(0);
            $table->integer('price')->default(0);
            $table->string('image_path',255)->nullable()->default('public/images/product-default.png');

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
