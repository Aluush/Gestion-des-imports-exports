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
        Schema::create('situations_trans', function (Blueprint $table) {
            $table->id();
            $table->string('code_bd');
            $table->date('repertoire');
            $table->string('dum');
            $table->integer('date_enregistrement');
            $table->string('crc');
            $table->string('nrc');
            $table->string('nom_operateur');
            $table->integer('code_declarant');
            $table->string('valeur');
            $table->integer('numero_agrement');
            $table->timestamps();
            $table->unsignedBigInteger('operateur_id'); 
            $table->foreign('operateur_id')->references('id')->on('operateurs')->cascadeOnDelete(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('situations_trans');
    }
};
