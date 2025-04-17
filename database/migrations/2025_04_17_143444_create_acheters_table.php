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
        Schema::create('acheters', function (Blueprint $table) {
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_produit');
            $table->timestamps();
            $table->primary(['id_client', 'id_produit']);
            
            $table->foreign('id_client')
                  ->references('id_client')
                  ->on('clients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
                  
            $table->foreign('id_produit')
                  ->references('id_produit')
                  ->on('produits')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acheters');
    }
};
