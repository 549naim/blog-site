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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('user_id');
            $table->string('slug');
            $table->integer('tag_id');
            $table->longText('content');
            $table->string('image')->nullable();
            $table->integer('category_id');
            $table->integer('heading');
            $table->integer('breaking');
            $table->integer('latest');
            $table->boolean('published')->default(0);    

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
