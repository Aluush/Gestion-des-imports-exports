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
        Schema::create('reds', function (Blueprint $table) {
            $table->id();
            $table->string('rc');
            $table->date('situation');
            $table->string('compte');
            $table->date('date_compte');
            $table->string('code_regime');
            $table->string('aspect_echeance');
            $table->integer('valeur');
            $table->integer('solde');
            $table->integer('taux_apurement');
            $table->integer('solde_t');
            $table->integer('taux_apurement_t');
            $table->string('aspect_contentieux');
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
        Schema::dropIfExists('reds');
    }
};
