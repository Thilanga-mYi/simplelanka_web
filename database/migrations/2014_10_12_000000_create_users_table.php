<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('gender')->nullable(); #1: male / 2: female
            $table->string('mobile_number')->nullable();
            $table->string('email')->unique();
            $table->integer('usertype_id')->default(3); #3 :shop_admin / 2:agent / 1:normal_user / 4- Administrator
            $table->integer('district_id')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('membership')->default(1);
            $table->string('website')->nullable();
            $table->string('whatsapp')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
