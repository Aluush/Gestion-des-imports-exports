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
        Schema::create('demandes_inscription', function (Blueprint $table) {
            $table->id();
            $table->string('centre_rc');
            $table->integer('numero_rc');
            $table->integer('fax')->nullable();
            $table->integer('telephone');
            $table->string('email')->unique();
            $table->string('raison_social');
            $table->integer('numero_agrement')->nullable();
            $table->date('date_creation');
            $table->string('objet_activite');
            $table->string('ville');
            $table->string('nom_gerant');
            $table->string('prenom_gerant');
            $table->text('adresse');
            $table->string('cin');
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
        Schema::dropIfExists('demandes_inscription');

    }
};
