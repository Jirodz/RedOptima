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
        Schema::create('enlace', function (Blueprint $table) {
            $table->id();
            $table->string('estado', 50);
            $table->integer('rack');
            $table->integer('puerto');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('local_id');
            $table->foreign('local_id')->references('id')->on('locales');
            $table->unsignedBigInteger('odf_id');
            $table->foreign('odf_id')->references('id')->on('odfs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enlace');
    }
};
