<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersPhoneAuth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('phone_verification_codes')) {
            Schema::create('phone_verification_codes', function (Blueprint $table) {
                $table->id();

                $table->foreignId('user_id')
                    ->nullable()
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

                $table->ipAddress('ip');
                $table->string('phone');
                $table->string('code');
                $table->timestamp('expires_at');

                $table->timestamps();
            });
        }

        if (!Schema::hasTable('confirmed_phones')) {
            Schema::create('confirmed_phones', function (Blueprint $table) {
                $table->id();

                $table->ipAddress('ip');
                $table->foreignId('user_id')
                    ->nullable()
                    ->constrained()
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
                $table->string('phone');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropColumns('users', ['phone', 'phone_verified', 'phone_verified_at']);
        // Schema::dropIfExists('phone_verification_codes');
        // Schema::dropIfExists('confirmed_phones');
    }
}
