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
            $table->id('id_comtem');
            $table->string('contenu');
            $table->date('datePublication');
            $table->string('etat');
            $table->timestamps();
            $table->unsignedBigInteger('id_employee'); 
            $table->unsignedBigInteger('id_blog');    
            $table->unsignedBigInteger('id_client');  
            
   
            $table->foreign('id_employee')
                  ->references('id_employee')
                  ->on('employees')
                  ->onDelete('cascade');
                  
            $table->foreign('id_blog')
                  ->references('id_blog')
                  ->on('blogs')
                  ->onDelete('cascade');
                  
            $table->foreign('id_client')
                  ->references('id_client')
                  ->on('clients')
                  ->onDelete('cascade');
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