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
        Schema::create('dums', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->date('date_chargement');
            $table->string('centre_rc');
            $table->integer('numero_rc');
            $table->string('nom_ope');
            $table->string('dum');
            $table->string('sh');
            $table->integer('numero_article');
            $table->string('regime');
            $table->integer('valeur_declaree');
            $table->integer('poids');
            $table->date('date_enregistrement');
            $table->float('code_declarant');
            $table->string('bureau');
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
        Schema::dropIfExists('dums');
    }
};
