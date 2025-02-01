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
        Schema::create('pomodoros', function (Blueprint $table) {
            $table->id();

            //OUTRAS CONFIGURAÇÕES
            $table->integer('timer');
            $table->string('day');
            $table->boolean('done');
            $table->time('created');

            // Adicionando a FK para o ID do user
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            //Chave FK para a tag
            $table->unsignedBigInteger('id_tag');
            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pomodoros');
    }
};
