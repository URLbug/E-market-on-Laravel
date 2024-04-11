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
            $table->id();
            $table->text('name')->nullable();
            $table->text('picture')->nullable();
            $table->integer('price')->nullable();
            $table->unsignedBigInteger('reviews_id');
            $table->foreign('reviews_id')
                ->references('id')
                ->on('reviews')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('color');
            $table->text('tag');
            $table->text('categories');
            $table->text('sku');
            $table->integer('sale');
            $table->integer('seller');
            $table->text('information')->default('none');
            $table->text('description')->default('none');
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
