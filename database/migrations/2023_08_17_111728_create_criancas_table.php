<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criancas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_crianca');
            $table->string('sobrenome_crianca');
            $table->date('data_nascimento');
            $table->bigInteger('id_encarregado')->unsigned();
            $table->timestamps();
            $table->foreign('id_encarregado')->references('id')->on('encarregados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criancas');
    }
}
