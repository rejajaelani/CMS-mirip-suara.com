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
            $table->bigInteger('id_author')->unsigned();
            $table->string('title', 200);
            $table->string('slug', 200);
            $table->string('content', 255);
            $table->string('status', 50);
            $table->bigInteger('id_category')->unsigned();
            $table->bigInteger('id_media_post')->unsigned();
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
