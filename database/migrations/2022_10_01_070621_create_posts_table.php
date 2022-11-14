<?php

use App\Models\Post;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->integer('main_category');
            $table->integer('sub_category');
            $table->double('regular_price')->nullable();
            $table->double('sale_price')->nullable();
            $table->integer('price_condition')->default(1);
            $table->integer('ad_type')->default(1);
            $table->integer('product_condition')->default(1);
            $table->text('description')->nullable();
            $table->integer('avg_rating')->default(6);
            $table->integer('avg_views')->default(0);
            $table->integer('avg_clicks')->default(0);
            $table->enum('status', array_keys(Post::$status))->default(1);
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
        Schema::dropIfExists('posts');
    }
};
