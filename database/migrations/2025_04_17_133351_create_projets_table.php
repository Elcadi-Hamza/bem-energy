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
            $table->id('id_projet');
            $table->string('titre');
            $table->string('description');
            $table->string('etat');
            $table->date('dateDebut');
            $table->date('dateFin');
            $table->timestamps();
            
            $table->foreignId('id_employee')
                  ->constrained('employees', 'id_employee')
                  ->onDelete('cascade');
                  
            $table->foreignId('id_client')
                  ->constrained('clients', 'id_client')
                  ->onDelete('cascade');
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