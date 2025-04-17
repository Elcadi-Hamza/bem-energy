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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('id_produit');
            $table->string('nom');
            $table->string('description');
            $table->boolean('stock');
            $table->decimal('prix', 10, 2);
            $table->unsignedBigInteger('quantite');
            $table->string('image');
            $table->timestamps(); 
            

            $table->unsignedBigInteger('id_employee');
            $table->unsignedBigInteger('id_categorie');
            
            $table->foreign('id_employee')
                  ->references('id_employee')
                  ->on('employees')
                  ->onDelete('cascade');
                  
            $table->foreign('id_categorie')
                  ->references('id_categorie')
                  ->on('categories')
                  ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};