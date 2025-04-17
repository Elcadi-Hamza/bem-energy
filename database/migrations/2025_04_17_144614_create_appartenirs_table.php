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
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_projet');
            $table->unsignedBigInteger('id_service');
            $table->timestamps();
            $table->primary(['id_projet', 'id_service']);
           
            $table->foreign('id_projet')
                  ->references('id_projet')
                  ->on('projets')
                  ->onDelete('cascade');
                  
            $table->foreign('id_service')
                  ->references('id_service')
                  ->on('services')
                  ->onDelete('cascade');
                  
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartenirs');
    }
};
