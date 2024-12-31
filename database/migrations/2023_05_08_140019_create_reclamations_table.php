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
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string('theme');
            $table->string('sous_theme');
            $table->string('ville');
            $table->string('bureauD');
            $table->text('localisation');
            $table->string('objet');
            $table->string('message');
            $table->string('file_path')->nullable();
            $table->string('etat')->nullable();
            $table->string('service')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('reclamations');
    }
};
