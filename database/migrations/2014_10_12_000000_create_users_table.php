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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('google_id')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->enum('gender',['Laki-Laki', 'Perempuan'])->nullable();
            $table->string('telp')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['pending', 'verified', 'suspend'])->default('pending');
            $table->enum('role',['Admin', 'User'])->default('User');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};