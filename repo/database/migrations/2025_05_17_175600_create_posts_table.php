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
            $table->string('hash_id')->unique();
            $table->string('client_id')->unique();
            $table->string('channel_id')->unique();
            $table->date('post_date');
            $table->date('post_time');
            $table->string('post_title');
            $table->string('post_description');
            $table->string('post_image');
            $table->string('post_url');
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
