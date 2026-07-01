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
        Schema::create('album', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('ano_lancamento');
            $table->string('url_imagem')->nullable();
            $table->foreignId('artista_id')
            ->constrained('artista')->cascadeOnDelete();
            #A tabela album deve receber a foreign key já que uma vez que o 
            #album é um produto do artista. E não o artista sendo um produto do album

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('album');
    }
};
