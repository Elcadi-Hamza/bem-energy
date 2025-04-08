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
        Schema::create('commentaires_temoignages', function (Blueprint $table) {
            $table->increments('id_com_tem');
            $table->string('contunue_com_tem');
            $table->date('datePublication_com_tem');
            $table->string('etat_com_tem');
            $table->unsignedInteger('id_employee');
            $table->unsignedInteger('id_blog');
            $table->unsignedInteger('id_client');
            $table->foreign('id_employee')->references('id_employee')->on('employees');
            $table->foreign('id_blog')->references('id_blog')->on('blogs');
            $table->foreign('id_client')->references('id_client')->on('clients');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires_temoignages');
    }
};
