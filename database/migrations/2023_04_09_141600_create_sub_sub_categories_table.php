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
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable()->default(null);
            $table->string('url')->nullable()->default(null);
            $table->enum('target',['_self','_blank']) ->default('_self');
            $table->integer('count')->default(0);
            $table->unsignedBigInteger('sub_category_id')->default(0);
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
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
        Schema::dropIfExists('sub_sub_categories');
    }
};
