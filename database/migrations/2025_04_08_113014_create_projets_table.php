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
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id_projet');
            $table->date('dateDebut_projet');
            $table->date('dateFin_projet');
            $table->string('titre_projet');
            $table->string('description_projet');
            $table->string('etat_projet');
            $table->unsignedInteger('id_employee');
            $table->unsignedInteger('id_client');
            $table->foreign('id_employee')->references('id_employee')->on('employees');
            $table->foreign('id_client')->references('id_client')->on('clients');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projets');
    }
};
