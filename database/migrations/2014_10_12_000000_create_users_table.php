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
            $table->id('id');
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->integer('type_id');
            $table->integer('adress_id')->nullable();
            $table->string('email')->unique();
            $table->boolean('verified')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->rememberToken();
            $table->string('invite_code')->nullable();
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
