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
        Schema::create('visitas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo')->nullable();
            $table->string('e_mail')->nullable();
            $table->string('telefone')->nullable();
            $table->string('empresa')->nullable();
            $table->string('site_linkedin')->nullable();
            $table->string('cidade_de_origem')->nullable();
            $table->string('pais_de_origem')->nullable();
            $table->date('data_da_visita')->nullable();
            $table->string('cargo')->nullable();
            $table->string('segmento')->nullable();
            $table->text('descricao_do_grupo')->nullable();
            $table->text('informacao_extra')->nullable();
            $table->string('objetivo_da_visita')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitas');
    }
};
