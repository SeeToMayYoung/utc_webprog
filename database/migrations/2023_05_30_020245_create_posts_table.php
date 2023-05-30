<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $faker = Faker::create();
            $table->id();
            $table->string('title', 255);
            $table->string('sub_title', 255);
            $table->string('description', 255);
            $table->string('author', 50);
            $table->dateTime('date');
            $table->longText('paragraph_content');
            $table->integer('viewed');
            $table->string('thumbnail_image');
            $table->string('content_image');
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
