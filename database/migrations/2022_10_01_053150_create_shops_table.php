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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('agent_id')->nullable();
            $table->String('name');
            $table->String('city');
            $table->integer('district_id');
            $table->String('address')->nullable();
            $table->String('tel1')->nullable();
            $table->String('tel2')->nullable();
            $table->String('logo')->nullable();
            $table->integer('register_type')->default(1);
            $table->String('register_no')->nullable();
            $table->String('registration_document_image')->nullable();
            $table->Text('description')->nullable();
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
        Schema::dropIfExists('shops');
    }
};
