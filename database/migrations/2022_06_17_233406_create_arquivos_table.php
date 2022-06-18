<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArquivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arquivos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome');
            $table->string('path');
            $table->longText('texto');
            $table->string('keywords');
            $table->uuid('pasta_id');
            $table->uuid('subpasta_id')->nullable();
            $table->timestamps();
            
            $table->foreign('subpasta_id')->references('id')->on('sub_pastas');
            $table->foreign('pasta_id')->references('id')->on('pastas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arquivos');
    }
}
