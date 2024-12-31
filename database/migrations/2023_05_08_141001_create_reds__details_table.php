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
        Schema::create('reds__details', function (Blueprint $table) {
            $table->id();
            $table->string('rc');
            $table->date('situation');
            $table->float('id_compte');
            $table->string('compte');
            $table->string('ngp');
            $table->string('regime');
            $table->date('date_compte');
            $table->integer('qe');
            $table->string('desc_unite');
            $table->integer('ve');
            $table->integer('qte_apu');
            $table->integer('val_apu');
            $table->integer('qte_apu_t');
            $table->integer('val_apu_t');
            $table->date('date_echeance');
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
        Schema::dropIfExists('reds__details');
    }
};
