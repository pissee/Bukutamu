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
        Schema::create('bukutamu', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->unique();
            $table->string('alamat')->nullable();
            $table->string('kategori');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('keperluan');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukutamu');
    }
};
