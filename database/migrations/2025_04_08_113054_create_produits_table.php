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
            $table->increments('id_produit');
            $table->string('nom_produit');
            $table->string('description_produit');
            $table->boolean('stock_produit');
            $table->string('prix_produit');
            $table->string('image_projet');
            $table->unsignedInteger('id_employee');
            $table->unsignedInteger('id_categorie');
            $table->foreign('id_employee')->references('id_employee')->on('employees');
            $table->foreign('id_categorie')->references('id_categorie')->on('categories');
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
