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
        Schema::create('paragraphs', function (Blueprint $table) {
            
            $table->id();
            $table->string('title')->nullable()->default(null);
            $table->string('thumb')->nullable()->default(null);
            $table->string('image')->nullable()->default(null);
            $table->text('paragraph')->nullable()->default(null);
            $table->integer('count')->default(0);
            $table->unsignedBigInteger('blog_id')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('blog_id')->references('id')->on('blogs');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paragraphs');
    }
};
