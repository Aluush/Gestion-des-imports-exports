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
        Schema::create('operateurs', function (Blueprint $table) {
            $table->id();
            $table->string('centre_rc');
            $table->integer('numero_rc');
            $table->string('fax')->nullable();
            $table->integer('telephone');
            $table->string('email');
            $table->string('raison_social');
            $table->integer('numero_agrement')->nullable();
            $table->string('objet_activite');
            $table->string('ville');
            $table->string('nom_gerant');
            $table->string('prenom_gerant');
            $table->text('adresse');
            $table->string('op/trans');
            $table->softDeletes();
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
        Schema::dropIfExists('operateurs');

    }
};
