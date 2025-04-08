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
        Schema::create('se_rattacher', function (Blueprint $table) {
            $table->unsignedInteger('id_projet');
            $table->unsignedInteger('id_produit');
            $table->primary(['id_projet', 'id_produit']);
            $table->foreign('id_projet')->references('id_projet')->on('projets');
            $table->foreign('id_produit')->references('id_produit')->on('produits');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('se_rattacher');
    }
};
