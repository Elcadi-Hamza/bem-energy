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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('id_blog'); 
            $table->string('titre');
            $table->string('image');
            $table->string('contenu');
            $table->date('datePublication');
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
        Schema::dropIfExists('blogs');
    }
};