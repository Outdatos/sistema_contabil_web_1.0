<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movimento_envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->boolean('atd')->default(false);
            $table->unsignedBigInteger('competencia_id');
            $table->string('descricao');
            $table->json('files_anexos');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('competencia_id')->references('id')->on('competencias');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movimento_envios');
    }
};
