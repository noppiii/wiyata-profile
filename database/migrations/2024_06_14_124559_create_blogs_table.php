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
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid('blog_id')->primary();
            $table->string('name');
            $table->longText('description');
            $table->string('main_img');
            $table->string('slug');
            $table->integer('like')->nullable();
            $table->integer('dislike')->nullable();
            $table->uuid('admin_id');
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');
            $table->uuid('category_blog_id');
            $table->foreign('category_blog_id')->references('category_blog_id')->on('category_blogs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};