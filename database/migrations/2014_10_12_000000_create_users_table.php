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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyText('firstName');
            $table->tinyText('lastName');
            $table->tinyText('username')->nullable();
            $table->text('password')->nullable();
            $table->text('email')->nullable();
            $table->text('payMethod');
            $table->text('adders');
            $table->text('remember_token')->default('');
            $table->tinyText('premise')->default('client');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
