<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('idade');
            $table->string('sexo');
            $table->char('telefone',11);
            $table->string('email');
            $table->string('doencasRegressas');
            $table->string('doencaAtual');
            $table->string('queixasPrincipais');
            $table->string('processosCirurgicosMedicamentos');
            $table->string('atvFisica');
            $table->string('motivoProcura');
            $table->string('profissao');
            $table->string('setorAreaTrabalho');
            $table->string('funcao');
            $table->string('tempoExerce');
            $table->string('postura');
            $table->string('nomeAluno')->nullable();
            $table->string('anotacaoAluno')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */     
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
};
