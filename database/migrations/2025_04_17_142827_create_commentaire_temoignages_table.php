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
            $table->unsignedBigInteger('id_employee')->nullable(); 
            $table->unsignedBigInteger('id_blog')->nullable();
            $table->unsignedBigInteger('id_client');  
            $table->unsignedBigInteger('id_service')->nullable();
            $table->unsignedBigInteger('id_produit')->nullable();
            
   
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

            $table->foreign('id_service')
                  ->references('id_service')
                  ->on('services')
                  ->onDelete('cascade');

            $table->foreign('id_produit')
                  ->references('id_produit')
                  ->on('services')
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