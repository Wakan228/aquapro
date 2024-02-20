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
            $table->id('user_id');
            $table->string('name');
            $table->string('surname');
            $table->int('type_id');
            $table->int('adress_id');
            $table->string('email')->unique();
            $table->boolean('verified')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->rememberToken();
            $table->string('invite_code');
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
