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
        Schema::create('servicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dataEntrada');
            $table->date('dataSaida');
            $table->string('nomeCliente');
            $table->string('telefoneContato');
            $table->string('descApp');
            $table->string('descRelat');
            $table->string('Capa')->nullable();
            $table->string('Chip')->nullable();
            $table->string('Operadoras')->nullable();
            $table->string('caboUsb')->nullable();
            $table->string('Cartao')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
