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
        Schema::create('comment_blogs', function (Blueprint $table) {
            $table->uuid('comment_blog_id')->primary();
            $table->string('title');
            $table->longText('content');
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->uuid('blog_id');
            $table->foreign('blog_id')->references('blog_id')->on('blogs')->onDelete('cascade');
            $table->uuid('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_blogs');
    }
};