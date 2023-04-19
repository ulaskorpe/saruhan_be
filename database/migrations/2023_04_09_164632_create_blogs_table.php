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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
             $table->string('title');
             $table->string('thumb')->nullable()->default(null);
             $table->string('image')->nullable()->default(null);
             $table->string('author')->nullable()->default(null);
             $table->date('date');
             $table->unsignedBigInteger('category_id');
             $table->unsignedBigInteger('sub_category_id')->default(0);
             $table->unsignedBigInteger('sub_sub_category_id')->default(0);
             $table->softDeletes();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('sub_sub_category_id')->references('id')->on('sub_sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};

