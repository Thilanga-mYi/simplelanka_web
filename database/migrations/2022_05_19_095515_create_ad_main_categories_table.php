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
        Schema::create('ad_main_categories', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [1, 2, 3])->default(1); //1-Products / 2-Services / 3-Shops
            $table->string('name');
            $table->string('image');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('ad_main_categories');
    }
};
